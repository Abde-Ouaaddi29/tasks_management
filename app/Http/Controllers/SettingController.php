<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    
   
    public function edit()
    {
        return view('setting.edit');
    }

   
    public function update(Request $request)
    {
        $currentUser = Auth::user();
    
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email,' . $currentUser->id,
            'password' => 'required',
            'new_password' => 'nullable|min:8',
        ]);
    
        
        if (!Hash::check($request->password, $currentUser->password)) {
            return back()->withErrors(['password' => 'The provided password does not match our records!']);
        }
    
        $currentUser->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->new_password ? Hash::make($request->new_password) : $currentUser->password,
        ]);
    
        return redirect()->route('setting.edit')->with('success', 'You have successfully updated your information!');
    }


  
    public function destroy(string $id)
    {
        //
    }
}
