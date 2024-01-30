<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
class CasestudyController extends Controller
{
       

    public function editcasestudy($id){

        $casestudy = DB::table('casestudies')->where('id', $id)->first();
        return view('admin.case_studies.updatestudy', ['casestudy' => $casestudy]);
    }

    public function updatecasestudy(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]);
    
        // Find the case study by ID
        $casestudy = DB::table('casestudies')->where('id', $id)->first();
    
        if (!$casestudy) {
            return redirect('/admin/casestudy/list')->withErrors('error', 'Case study not found.');
        }
    
        // Check if a new hero image is uploaded
        $newImageUploaded = $request->hasFile('hero_image') && $request->file('hero_image')->isValid();
    
        // Delete the associated image only if a new image is uploaded
        if ($newImageUploaded && $casestudy->hero_image) {
            $imagePath = public_path($casestudy->hero_image);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }
    
        // Handle hero image upload if a new image is uploaded
        if ($newImageUploaded) {
            // Generate a unique filename for the stored image
            $imageName = uniqid() . '_' . $request->file('hero_image')->getClientOriginalName();
    
            // Move the uploaded file to the public/hero_images directory
            $request->file('hero_image')->move(public_path('web/images/casestudy_images'), $imageName);
    
            // Update case study data in the database
            DB::table('casestudies')->where('id', $id)->update([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'metadisc' => $request->filled('metadisc') ? $request->metadisc : " ",

                'hero_image' => 'web/images/casestudy_images/' . $imageName, // Store the relative path in the database
            ]);
        } else {
            // Update case study data in the database without changing the image
            DB::table('casestudies')->where('id', $id)->update([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'metadisc' => $request->filled('metadisc') ? $request->metadisc : " ",

            ]);
        }
    
    
        // Redirect back with a success message
        return redirect('/admin/casestudy/list')->withErrors('success', 'Case study updated successfully.');
    }

    public function createcasestudy(){
        return view('admin.case_studies.createstudy');

    }
    
    public function getcasestudy(){

        $casestudies=DB::table('casestudies')->get(); 
        return view('admin.case_studies.liststudy', ['casestudies' => $casestudies]);
    }

    public function deletecasestudy($id){
        $post = DB::table('casestudies')->where('id', $id)->first();

        if (!$post) {
            return redirect()->back()->withErrors('error', 'Post not found.');
        }

        // Delete the associated image
        $imagePath = public_path($post->hero_image);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        DB::table('casestudies')->where('id', $id)->delete();

    
        // Redirect back to the facts list with a success message
        return redirect()->back()->withErrors('success', 'Case Study deleted successfully.');

    }

    public function storeservice(){



        return view('admin.case_studies.liststudy');
    }


    public function casestudystore(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'hero_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation as per your requirements
        ]);
    
        // Initialize postId variable
      
    
        // Check if the request has a valid image file
        if ($request->hasFile('hero_image') ) {
            // Generate a unique filename for the stored image
            $imageName = uniqid() . '_' . $request->file('hero_image')->getClientOriginalName();
        
            // Move the image to the public directory with the unique filename
            $imagePath = $request->file('hero_image')->move(public_path('web/images/casestudy_images'), $imageName);
        
            // Store the post in the database using Query Builder
            $postId = DB::table('casestudies')->insertGetId([
                'title' => $request->title,
                'metadisc' => $request->filled('metadisc') ? $request->metadisc :" ",
                'content' => $request->content,
                'hero_image' =>  'web/images/casestudy_images/' . $imageName,
            ]);
        }
    
        
    
        return redirect('/admin/casestudy/list')->withErrors('success', 'Case study added successfully.');
              

   
    }


}