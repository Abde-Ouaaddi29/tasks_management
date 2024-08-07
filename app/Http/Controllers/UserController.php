<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
    public function create()
    {
       return view('user.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email|unique:users,email',
            "password" => 'required|min:8'
        ]);

        User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return redirect()->route('login.login');

        // dd($request);
    }


}
