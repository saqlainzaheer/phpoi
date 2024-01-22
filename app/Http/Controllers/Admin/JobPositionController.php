<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosition;
use App\Models\Job;


class JobPositionController extends Controller
{
    public function create()
    {
        // $products = JobPosition::where('parent_id','0')->get();
        return view('admin.job_positions.create');
    }

    public function index()
    {
        // Product::truncate();

        $products = JobPosition::all();
        return view('admin.job_positions.index', compact('products'));
    }

    public function edit($id)
    {
        // $products = JobPosition::where('parent_id','0')->get();
        $product = JobPosition::find($id);
        return view('admin.job_positions.edit', compact('product'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
           
        ]);

        $product = new JobPosition();
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->description = $request->description;
        $product->save();

        return redirect()->back()->with('success', 'Your Job Position stored successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'description' => 'required|string',
        ]);
        $product = JobPosition::findOrFail($id);
        $product->title = $request->title;
        $product->subtitle = $request->subtitle;
        $product->description = $request->description;

        $product->save();

        return redirect()->back()->with('success', 'Job Position updated successfully');
    }

    public function destroy($id)
    {
        $product = JobPosition::findOrFail($id);

        $product->delete();

        return redirect()->back()->with('success', 'Job Position deleted successfully');
    }

    public function jobRequests()
    {
        $jobs = Job::with('jobPosition')->orderBy('id','desc')->get();
        return view('admin.job_positions.requests', compact('jobs'));

        
    }

  
}

