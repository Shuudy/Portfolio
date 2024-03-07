<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Realisation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'object' => 'required',
            'message' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('index', ['#contact'])->withErrors($validator);
        }

        Mail::to('contact@jancieux.fr')->send(new ContactMail($request->all()));

        return redirect()->route('index', ['#contact'])->with('success', 'Votre message a bien été envoyé. Merci pour votre intérêt ! Je vous répondrai dès que possible.');
    }
}
