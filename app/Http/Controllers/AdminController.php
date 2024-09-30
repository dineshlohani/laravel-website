<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login
    public function login(Request $request)
    {
        // Validate the request
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Retrieve the admin user by username
        $admin = Admin::where('username', $request->username)->first();

        // Check if the user exists and the password is correct
        if ($admin && Hash::check($request->password, $admin->password)) {
            // Log the user in manually
            Auth::guard('admin')->login($admin);

            // Authentication was successful; redirect to admin dashboard
            return redirect()->route('admin.dashboard');
        }

        // Authentication failed; redirect back to the login form with an error message
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    // Show the dashboard
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Show the signup form (new method)
    public function showSignupForm()
    {
        return view('admin.signup');
    }

    // Handle logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    // Create an admin user
    public function createAdmin(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|unique:admins',
            'password' => 'required|min:6',
        ]);

        // Create the admin user
        $admin = Admin::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        // Return a success message
        return response()->json(['message' => 'Admin created successfully', 'admin' => $admin]);
    }
}
