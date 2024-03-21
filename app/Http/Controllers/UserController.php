<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function login()
    {
        // This function renders the 'login' view for displaying the login form
        return view("user.login");
    }

    public function authenticate(Request $request)
    {
        // This function handles the authentication process for user login
        $formFields = $request->validate([
            'username' => ['required'], // Validate that the 'username' field is required
            'password' => 'required' // Validate that the 'password' field is required
        ]);

        // Attempt to authenticate the user with the provided credentials
        if (auth()->attempt($formFields)) {
            $request->session()->regenerate(); // Regenerate the session ID to prevent session fixation attacks
            return view("user.adminLanding"); // If authentication is successful, render the 'adminLanding' view
        } else {
            // If authentication fails, redirect back to the login page with errors
            return back()->withInput()->withErrors([
                'username' => 'Invalid username or password', // Display an error message for invalid credentials
            ]);
        }
    }

    public function logout(Request $request)
    {
        // This function handles user logout
        auth()->logout(); // Log out the authenticated user

        $request->session()->invalidate(); // Invalidate the current session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/'); // Redirect the user to the root URL after logout
    }
}
