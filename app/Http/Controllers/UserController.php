<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function showUsers()
    {
        $users = DB::table("users")->get();
        //return $users;
        return view('allUsers', ['data' => $users]);
    }
    public function showSingleUser(string $id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        //return user;
        return view('user', ['data' => $user]);
    }
    public function addUser(Request $request){
        $user = DB::table('users')->insert([
            'name'=> $request->username,
            'email'=> $request->useremail,
            'city'=> $request->usercity,
            'age'=> $request->userage


        ]);
        if($user){
            return redirect()->route('home');
           // echo "<h1>Data added successfully</h1>";
        }
        else{
            echo "<h1>Data not added</h1>";
        }
    
    }

}
