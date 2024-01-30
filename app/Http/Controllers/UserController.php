<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use Illuminate\Support\Facades\Auth;


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
    public function addUser(Request $request)
    {
        $user = DB::table('users')->insert([
            'name' => $request->username,
            'email' => $request->useremail,
            'city' => $request->usercity,
            'age' => $request->userage


        ]);
        if ($user) {
            return redirect()->route('home');
            // echo "<h1>Data added successfully</h1>";
        } else {
            echo "<h1>Data not added</h1>";
        }

    }
    public function updateUser(string $id)
    {
        $user = DB::table("users")->where("id", $id)->get();
        //dd($user);
        return view('updateUser', ['data' => $user]);
    }
    public function update(string $id)
    {
        $user = DB::table("users")->where("id", $id)->get();
        return $user;
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
    
        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            

        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Login Successfully'
        ]);
    }
    public function signUp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'name' => 'required',
            'contact_number' => 'required|max:11'


        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
            'contact_number' => $request->contact_number,

        ]);
        $token = $user->createToken('token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'message' => 'Signup Successfully',
            'token' => $token,
        ]);
    }
}
