<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

class HomeController extends Controller
{
    public function index()
    {
        $lastRealisations = Realisation::latest()->take(3)->get();
        return view('index', compact('lastRealisations'));
    }
}
