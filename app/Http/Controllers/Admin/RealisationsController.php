<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Models\SubSkill;
use App\Models\Realisation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RealisationsController extends Controller
{
    /**
     * Display a listing of all realisations.
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.realisations.index');
    }

    /**
     * Show the form for creating a new realisation.
     * 
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $skills = Skill::all();
        return view('admin.realisations.create', compact('skills'));
    }

    /**
     * Store a newly created realisation.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required|string|min:32',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'subskills' => 'array'
        ]);

        if ($request->hasFile('image')) {
            $originalImage = $request->file('image');
        
            $fileName = uniqid();
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $imagePath = "{$fileName}.webp";
        }

        $realisation = Realisation::create([
            'title' => $credentials['title'],
            'subtitle' => $credentials['subtitle'],
            'slug' => Str::slug($credentials['title']),
            'content' => $credentials['content'],
            'image' => $imagePath ?? null,
        ]);

        if ($request->has('subskills')) {
            $subskills = $request->input('subskills');

            $skillIds = SubSkill::whereIn('id', $subskills)->distinct()->pluck('skill_id');
            $realisation->skills()->attach($skillIds);
            $realisation->subskills()->attach($subskills);
        }

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation créée avec succès.');
    }

    /**
     * Show the form for editing the specified realisation.
     * 
     * @param \App\Models\Realisation $realisation
     * @return \Illuminate\View\View
     */
    public function edit(Realisation $realisation)
    {
        $skills = Skill::all();
        $subskills = SubSkill::all();

        $selectedSubskills = $realisation->subskills->pluck('id')->toArray();
        return view('admin.realisations.edit', compact('realisation', 'skills', 'subskills', 'selectedSubskills'));
    }

    /**
     * Update the specified realisation.
     * 
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Realisation $realisation
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Realisation $realisation)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required|string|min:32',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'subskills' => 'array',
        ]);    

        $realisation->subskills()->detach();
        $realisation->skills()->detach();

        if ($request->has('subskills')) {
            $subskills = $request->input('subskills');

            $skillIds = SubSkill::whereIn('id', $subskills)->distinct()->pluck('skill_id');
            $realisation->skills()->attach($skillIds);
            $realisation->subskills()->attach($subskills);
        }
       
        $realisation->update($request->except('image'));

        // Slug change
        $slug = Str::slug($request->title);
        if ($slug !== $realisation->slug) {
            $realisation->slug = $slug;
            $realisation->save();
        }        

        if ($request->hasFile('image')) {
            // If a realization already has an image
            if ($realisation->image) {
                Storage::disk('public')->delete('uploads/' . $realisation->image);
            }
            $originalImage = $request->file('image');
            
            $fileName = uniqid();
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $realisation->image = "{$fileName}.webp";
            $realisation->save();
        }

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation modifiée avec succès.');
    }
}
