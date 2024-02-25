<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display the home page with the latest realisations.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $lastRealisations = Realisation::latest()->take(3)->get();
        return view('index', compact('lastRealisations'));
    }

    /**
     * Process the contact form submission and send an email.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'object' => 'required',
            'message' => 'required'
        ]);

        Mail::to('destinaire@example.com')->send(new ContactMail($request->all()));

        dd('Message envoyé');
    }
}
