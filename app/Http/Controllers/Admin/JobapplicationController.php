<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class JobapplicationController extends Controller
{
    public function applicationlist(){
        $application=DB::table('job_applications')->get();
        return view('admin.job_applications.application_list',['application'=>$application]);
    }
    public function applicationview($id){
        $application = DB::table('job_applications')->where('id', $id)->first();
        return view('admin.job_applications.application_view',['application'=>$application]);



    }
    public function applicationdelete($id){

        $post = DB::table('job_applications')->where('id', $id)->first();

        if (!$post) {
            return redirect('/admin/application/list')->with('error', 'not found.');
        }

        // Delete the associated image
        $imagePath = public_path($post->resume_path);
        if (File::exists($imagePath)) {
            File::delete($imagePath);
        }
        DB::table('job_applications')->where('id', $id)->delete();

    
        // Redirect back to the facts list with a success message
        return redirect('admin/application/list')->withErrors('success', 'Service deleted successfully.');
    }
}