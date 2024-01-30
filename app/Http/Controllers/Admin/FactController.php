<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FactController extends Controller
{
   
   public function createfact(){
       return view('admin.facts.createfact');

   }

    public function getfactlist()
    {
        $facts=DB::table('facts')->get();
        
         return view('admin.facts.listfact', ['facts' => $facts]);
    }


    public function storefact(Request $req)
    {  
        

        $dataToInsert = [
            'fact' => $req['fact'],
            'factDis' => $req['factDis'],

        ];
        DB::table('facts')->insert($dataToInsert);

        return redirect('admin/list/fact')->with('success','Fact Add successfully.');
    }


    public function deletefact($id)
{
    // Delete the fact with the specified ID from the 'facts' table
    DB::table('facts')->where('id', $id)->delete();

    // Redirect back to the facts list with a success message
    return redirect('admin/list/fact')->with('success', 'Fact deleted successfully.');
}
}