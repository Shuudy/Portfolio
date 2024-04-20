<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

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
}
