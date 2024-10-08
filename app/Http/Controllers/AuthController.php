<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display the login form.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.login');
    }

    /**
     * Process the login form submission.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Check form fields
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        // We try to authenticate the employee
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.index'));
        }

        // If the employee could not be authenticated
        return back()->with('error', 'Incorrect information provided');
    }

    /**
     * Log the admin out of the application.
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout()
    {
        // Disconnect employee using Auth facade
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
