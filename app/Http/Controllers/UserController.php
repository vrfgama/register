<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function create(){

        return view('form');
    }
    
    public function store(Request $request){
        /*
        $user= new User;
        $user->name= $_POST['name'];
        $user->email= $_POST['email'];
        $user->sex= $_POST['sex'];
        $user->birth= $_POST['birth'];
        $user->save();
        */

        //User::create($request->all());

        User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'sex'=> $request->sex,
            'birth'=> $request->birth,
            'password'=> Hash::make($request->password)
        ]);

        return redirect('/dashboard');
    }


    public function listAll(){
        
        $users= User::all();
  
        return view('dashboard', ['users'=>$users]); 
    }

    public function delete($id){
        
        User::find($id)->delete();

        return redirect('/dashboard');
    }

    public function edit($id){

        $user= User::find($id);
        
        return view('edit', ['user'=>$user]);

    }

    public function update(Request $request){
        
        User::find($request->id)
            ->update([
                'name'=> $request->name,
                'email'=> $request->email,
                'sex'=> $request->sex,
                'birth'=> $request->birth,
                'password'=> Hash::make($request->password)
            ]);

        return redirect('/dashboard');

    }
}
