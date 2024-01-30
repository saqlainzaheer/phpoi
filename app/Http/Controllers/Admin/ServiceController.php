<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class ServiceController extends Controller
{
    public function getservice()
    {
         $services=DB::table('services')->get();  

         
        
         return view('admin.services.listservice',['services'=>$services]);
    }
        
    public function createservice()
    {
       
        
         return view('admin.services.createservice');
    }

    public function storeservice(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Generate a unique filename for the stored image
            $imageName = uniqid() . '_' . $request->file('image')->getClientOriginalName();
    
            // Store the image in public/web/images with the unique filename
             $request->file('image')->move(public_path('web/images'), $imageName);
    
            // Store the post in the database using Query Builder
            $postId = DB::table('services')->insertGetId([
                'title' => $request->title,
                'description' => $request->description,
                'image' => 'web/images/' . $imageName,
            
            ]);
    
            return redirect('/admin/service/list')->with('success', 'Service created successfully!');
        } else {
            return redirect('/admin/service/list')->with('error', 'Failed to upload image. Please try again.');
        }
    }



    public function deleteservice($id)
    {
        // Delete the fact with the specified ID from the 'facts' table


        $post = DB::table('services')->where('id', $id)->first();

        if (!$post) {
            return redirect('/admin/service/list')->with('error', 'Service not found.');
        }

        // Delete the associated image
        $imagePath = public_path($post->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        DB::table('services')->where('id', $id)->delete();

    
        // Redirect back to the facts list with a success message
        return redirect('admin/service/list')->with('success', 'Service deleted successfully.');
    }


    public function editservice($id)
    {
        $post = DB::table('services')->where('id', $id)->first();

        return view('admin.services.updateservice', compact('post'));
    }


    public function updateservice(Request $request, $id)
    {
        // Validation (similar to store method)
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        // Find the post by ID
        $post = DB::table('services')->where('id', $id)->first();
        
        if (!$post) {
            return redirect('/admin/service/list')->with('error', 'Service not found.');
        }
        
        // Handle image upload if present
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Delete the associated image
            $imagePath = public_path($post->image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        
            // Generate a unique filename for the stored image
            $imageName = uniqid() . '_' . $request->file('image')->getClientOriginalName();
        
            // Move the uploaded file to the public/web/images directory
            $request->file('image')->move(public_path('web/images'), $imageName);
        
            // Update post data in the database
            DB::table('services')->where('id', $id)->update([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'image' => 'web/images/' . $imageName, // Store the relative path in the database
            ]);
        
            return redirect('/admin/service/list')->with('success', 'Service updated successfully!');
        }
        
        // No new image uploaded, update post data without changing the image
        DB::table('services')->where('id', $id)->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);
        
        return redirect('/admin/service/list')->with('success', 'service updated successfully!');
    }
}