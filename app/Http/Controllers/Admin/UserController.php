<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function list()
    {
        $users = User::orderBy('id','desc')->get();
        return view('admin.users.list', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $req)
    {
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'gender' => $req->gender,
            'phone' => $req->phone,
            'password' => Hash::make($req->password),
        ]);

        return redirect('admin/users')->with('success','User created successfully.');
    }

    public function Edit($id){
        $user = User::find($id);
        return view('admin.users.edit',compact('user'));
    }

    public function Update($id, Request $request){

        $user = User::find($id);
        $user->name =$request->name;
        $user->email =$request->email;
        $user->phone =$request->phone;
        $user->gender =$request->gender;
        $user->save();

        return redirect('admin/users')->with('success','User profile updated successfully.');

    }

    public function Delete($id){
        $user = User::find($id)->delete();
        return redirect()->back();

    }

    public function getDeposit(){

        $deposits = Deposit::join('users','users.id','deposits.user_id')->select('users.name','users.phone','deposits.*')->get();

        return  view('admin.deposit',compact('deposits'));
    }


    public function approveDisapprove($id,$param)
    {
        if ($param == 0) {
            $para = 1 ;
        }else{
            $para = 0 ;
        }

        $deposit = Deposit::where('id',$id)->update(['status'=>$para]);
        return redirect()->back();

    }

}
