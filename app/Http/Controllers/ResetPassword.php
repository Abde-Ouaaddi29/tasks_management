<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResetPassword extends Controller
{
   
    public function create()
    {
        return view('user.reset');
    }

    
    
    public function store(Request $request)
    {
        return 'store reset ';
    }


}
