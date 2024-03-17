<?php

namespace App\Http\Controllers;

use App\Models\Realisation;

class RealisationsController extends Controller
{
    /**
     * Display a listing of all realisations.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $realisations = Realisation::all();
        return view('realisations.index', compact('realisations'));
    }

    /**
     * Display the specified realisation.
     * 
     * @param string $slug
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($slug, $id)
    {
        $realisation = Realisation::where('slug', $slug)->where('id', $id)->with('skills.subskills')->firstOrFail();
        $lastRealisations = Realisation::where('id', '!=', $id)->latest()->take(3)->select('id', 'title', 'subtitle', 'slug', 'image')->get();

        return view('realisations.show', compact('realisation', 'lastRealisations'));
    }
}
