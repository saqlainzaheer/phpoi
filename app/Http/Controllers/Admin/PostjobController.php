<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostjobController extends Controller
{


        public function createdesignation(){

        
          return view('admin.postjobs.createdesignation');
       }
       public function createjob(){
        $designations=DB::table('job_designations')->get();

        

        return view('admin.postjobs.createjob',['designations' => $designations]);
       }


       public function job_designation_list(){
           
        $designations=DB::table('job_designations')->get();

        $jobs=DB::table('postjobs')->get();
        //  return $designations;
        //  return $jobs;
        return view('admin.postjobs.joblist', ['designations' => $designations],  ['jobs' => $jobs]);

       }
      

       public function storedesignation(Request $request){ 

        // $request->validate([
        //     'name' => 'required|max:70',
        // ]);

        $dataToInsert = [
            'designation' => $request['designation'],
        ];
        DB::table('job_designations')->insert($dataToInsert);
        return redirect('/admin/job/list')->withErrors('success', 'Job Designation Added Successfully uccessfully!');
       }



    public function storejob(Request $request)
    {
         $request->validate([
        'job_title' => 'required|max:255',
        'city' => 'required|max:255',
        'apply_last_date' => 'required|date',
        'designation' => 'required',
        'job_details' => 'required',
        ]);

       DB::table('postjobs')->insert([
        'job_title' => $request->input('job_title'),
        'city' => $request->input('city'),
        'apply_last_date' => $request->input('apply_last_date'),
        'designation' => $request->input('designation'),
        'job_details' => $request->input('job_details'),
      
        ]);
        return redirect('/admin/job/list')->withErrors('success', 'Job Added Sccessfully successfully!')->header('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');;

    }


    public function deletejob($id){
        DB::table('postjobs')->where('id', $id)->delete();

    // Redirect back to the facts list with a success message
      return redirect('/admin/job/list')->with('success', 'job deleted successfully.');
    }
    public function deletedesignation($id){
        DB::table('job_designations')->where('id', $id)->delete();

    // Redirect back to the facts list with a success message
      return redirect('/admin/job/list')->withErrors('success', 'job deleted successfully.');
    }
    public function jobupdate(Request $request, $id)
    {

        $request->validate([
            'job_title' => 'required|max:255',
            'city' => 'required|max:255',
            'apply_last_date' => 'required|date',
            'designation' => 'required',
            'job_details' => 'required',
        ]);

        

        DB::table('postjobs')->where('id', $id)->update([
            'job_title' => $request->input('job_title'),
            'city' => $request->input('city'),
            'apply_last_date' => $request->input('apply_last_date'),
            'designation' => $request->input('designation'),
            'job_details' => $request->input('job_details'),
        ]);

        return redirect('/admin/job/list')->with('success', 'Job updated successfully!');
    }
    public function createjobupdate($id){
        $job=DB::table('postjobs')->where('id', $id)->first();
        $designations=DB::table('job_designations')->get();

     
        //  return $designations;
        //  return $jobs;
        return view('admin.postjobs.updatejob',  ['job' => $job],['designations' => $designations]);
}}