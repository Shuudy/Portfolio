<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

class RealisationsController extends Controller
{
    public function index()
    {
        $realisations = Realisation::all();
        return view('realisations.index', compact('realisations'));
    }

    public function show($slug, $id)
    {
        $realisation = Realisation::where('slug', $slug)->findOrFail($id);
        $lastRealisations = Realisation::where('id', '!=', $id)->latest()->take(3)->select('id', 'title', 'subtitle', 'slug', 'image')->get();

        return view('realisations.show', compact('realisation', 'lastRealisations'));
    }
}
