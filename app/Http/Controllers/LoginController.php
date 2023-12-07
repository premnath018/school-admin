<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        // Validate the user input
        $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
    
        $user = User::where('email', $credentials['email'])->first();
        
        if ($user && Hash::check($credentials['password'], $user->password)) { //Check the entered password with the stored password
            Auth::login($user);
            return redirect()->route('dashboard');
        }
        
        return redirect()->back()->with('error', 'Invalid Credentials.');
    }

    public function register(Request $request)
    {
        // Validate the user input
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ],[
            'username.required' => 'Username is required.',
            'username.unique' => 'Username already taken.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must be at least 6:min characters.',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email= $request->input('email');
        $user->password = bcrypt($request->input('password')); // Hash the password
        $user->save();

        // You may want to log the user in here if needed

        // Redirect to the login page with a success message
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
