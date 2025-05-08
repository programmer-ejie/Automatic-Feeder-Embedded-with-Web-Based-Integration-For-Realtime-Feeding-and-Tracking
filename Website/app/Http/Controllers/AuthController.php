<?php

namespace App\Http\Controllers;

use App\Models\User; // Import User model
use Illuminate\Support\Facades\Hash; // Import Hash facade
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function toRegister()
    {
        return view('Auth.register');
    }

    public function toLogin()
    {
        return view('Auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gmail' => 'required|string',
            'password' => 'required|string',
        ]);

        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gmail' => $request->gmail,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('toLogin')->with('success', 'Account created successfully!');
    }



    public function login(Request $request)
    {
        $request->validate([
            'gmail' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt(['gmail' => $request->gmail, 'password' => $request->password])) {
          
            session(['user_id' => Auth::id()]);
    
            return redirect()->route('toDashboard');
        }
    
        return back()->with('error', 'Invalid Gmail or password.');
    }
}
