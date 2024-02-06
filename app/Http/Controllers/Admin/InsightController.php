<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class InsightController extends Controller
{
    public function getinsight()
    {
         $insights=DB::table('insights')->get();  

         
        
         return view('admin.latestinsights.listinsight',['insights'=>$insights]);
    }
        
    public function createinsight()
    {
        
         return view('admin.latestinsights.createinsight');
    }

    public function storeinsight(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Generate a unique filename for the stored image
            $imageName = uniqid() . '_' . $request->file('image')->getClientOriginalName();
    
            // Store the image in public/web/images with the unique filename
            $imagePath = $request->file('image')->move(public_path('web/images/insight_img'), $imageName);
    
            // Store the post in the database using Query Builder
            $postId = DB::table('insights')->insertGetId([
                'title' => $request->title,
                'description' => $request->description,
                'image' => 'web/images/insight_img/' . $imageName,
            
            ]);
    
            return redirect('/admin/insight/list')->with('success', 'Insight created successfully!');
        } else {
            return redirect('/admin/insight/list')->with('error', 'Failed to upload image. Please try again.');
        }
    }



    public function deleteinsight($id)
    {
        // Delete the fact with the specified ID from the 'facts' table


        $post = DB::table('insights')->where('id', $id)->first();

        if (!$post) {
            return redirect('/admin/insight/list')->with('error', 'Insight not found.');
        }

        // Delete the associated image
        $imagePath = public_path($post->image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        DB::table('insights')->where('id', $id)->delete();

    
        // Redirect back to the facts list with a success message
        return redirect('admin/insight/list')->with('success', 'insight deleted successfully.');
    }


    public function editinsight($id)
    {
        $post = DB::table('insights')->where('id', $id)->first();

        return view('admin.latestinsights.updateinsight', compact('post'));
    }


    public function updateinsight(Request $request, $id)
    {
        // Validation (similar to store method)
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);
        
        // Find the post by ID
        $post = DB::table('insights')->where('id', $id)->first();
        
        if (!$post) {
            return redirect('/admin/insight/list')->with('error', 'insight not found.');
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
            $request->file('image')->move(public_path('web/images/insight_img'), $imageName);
        
            // Update post data in the database
            DB::table('insights')->where('id', $id)->update([
                'title' => $validatedData['title'],
                'description' => $request->description,
                'image' => 'web/images/insight_img/' . $imageName, // Store the relative path in the database
            ]);
        
            return redirect('/admin/insight/list')->with('success', 'Insight updated successfully!');
        }
        
        // No new image uploaded, update post data without changing the image
        DB::table('insights')->where('id', $id)->update([
            'title' => $validatedData['title'],
            'description' => $request->description,
        ]);
        
        return redirect('/admin/insight/list')->with('success', 'Insights updated successfully!');
    }
}