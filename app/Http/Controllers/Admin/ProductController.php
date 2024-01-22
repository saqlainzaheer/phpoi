<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function create()
    {
        $products = Product::where('parent_id','0')->get();
        return view('admin.products.create',compact('products'));
    }

    public function index()
    {
        // Product::truncate();

        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function edit($id)
    {
        $products = Product::where('parent_id','0')->get();
        $product = Product::find($id);
        return view('admin.products.edit', compact('product','products'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'overview' => 'required|string',
            'specification' => 'required|string',
            'pdf_file' => 'nullable|mimes:pdf|max:2048',
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->overview = $request->overview;
        $product->specification = $request->specification;
        $product->parent_id = $request->parent_id;

        // Handle image upload
        $imagePath = $this->fileToUpload($request['image']);
        $product->image = basename($imagePath);

        // Handle pdf_file upload if provided
        if ($request->hasFile('pdf_file')) {
            $pdfPath = $this->fileToUpload($request['pdf_file']);
            $product->pdf_file = basename($pdfPath);
        }

        $product->save();

        return redirect()->back()->with('success', 'Your Product stored successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'overview' => 'required|string',
            'specification' => 'required|string',
            'pdf_file' => 'nullable|mimes:pdf|max:2048',
        ]);
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->overview = $request->overview;
        $product->specification = $request->specification;
        $product->parent_id = $request->parent_id;
        $imageOldValue = basename(parse_url($product->image, PHP_URL_PATH));
        $pdfOldValue = basename(parse_url($product->pdf_file, PHP_URL_PATH));
        // Handle image upload if provided
        if ($request->hasFile('image')) {
            // Delete the previous image
            Storage::delete('public/images/' . $product->image);


            $imagePath = $this->fileToUpload($request['image']);
            $product->image = $imagePath ? basename($imagePath) : $imageOldValue;
        }

        // Handle pdf_file upload if provided
        if ($request->hasFile('pdf_file')) {
            // Delete the previous pdf_file
            Storage::delete('public/pdfs/' . $product->pdf_file);
            
            $pdfPath = $this->fileToUpload($request['pdf_file']);
            $product->pdf_file = $pdfPath ? basename($pdfPath) : $pdfOldValue;
        }

        $product->save();

        return redirect()->back()->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $imageOldValue = basename(parse_url($product->image, PHP_URL_PATH));
        $pdfOldValue = basename(parse_url($product->pdf_file, PHP_URL_PATH));
        // Delete the previous image
        Storage::delete('public/images/' . $imageOldValue);

        // Delete the previous pdf_file
        Storage::delete('public/pdfs/' . $pdfOldValue);

        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    private function fileToUpload($file)
    {
        $fileName = uniqid() . time() . '.' . str_replace(' ', '_', $file->getClientOriginalName());

        $file->move(public_path('uploads'), $fileName);

        return 'uploads/' . $fileName;
    }
}
