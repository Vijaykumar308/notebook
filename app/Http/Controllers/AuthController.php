<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login() 
    {
        return view('auth.login');
    }

    public function showRegistrationForm() {

        return view('auth.register');
    }
    
    public function register(Request $request)
    {
        // Validate the form data
        $request->validate([
            'full_name' => 'required|string',
            'username' => 'required|string|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
            'password'  => 'required|required_with:confirmPassword|same:confirmPassword',
            'confirmPassword'  => 'required'
        ]);

        // Create a new user
        $user = \App\Models\User::create([
            'name' => $request->input('full_name'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        // You can add additional fields as needed

        // Redirect the user after registration
        return redirect('login')->with('success', 'Registration successful. Please login.');
    }
}
