<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function register(Request $request){
        /*
        $user= new User;

        $user->name= $_POST['name'];
        $user->email= $_POST['email'];
        $user->sex= $_POST['sex'];
        $user->birth= $_POST['birth'];

        $user->save();
        */

        User::create($request->all());

        return redirect('/read');
    }


    public function listAll(){
        
        $user= User::all();
  
        return view('/read', ['user'=>$user]); 
    }

    public function delete($id){
        
        User::find($id)->delete();

        return redirect('/read');
    }
}
