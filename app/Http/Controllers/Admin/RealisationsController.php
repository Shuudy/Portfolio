<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubSkill;
use App\Models\Realisation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RealisationsController extends Controller
{
    public function index()
    {
        return view('admin.realisations.index');
    }

    public function create()
    {
        $subskills = SubSkill::all();
        return view('admin.realisations.create', compact('subskills'));
    }

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
            $fileName = sha1(time() . $request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
        }

        $realisation = Realisation::create([
            'title' => $credentials['title'],
            'subtitle' => $credentials['subtitle'],
            'slug' => Str::slug($credentials['title']),
            'content' => $credentials['content'],
            'image' => $imagePath ?? null,
        ]);

        if ($request->has('subskills')) {
            $realisation->subskills()->attach($request->input('subskills'));
        }

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation créée avec succès.');
    }

    public function edit(Realisation $realisation)
    {
        $subskills = SubSkill::all();

        $selectedSubskills = $realisation->subskills->pluck('id')->toArray();
        return view('admin.realisations.edit', compact('realisation', 'subskills', 'selectedSubskills'));
    }

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

        if ($request->has('subskills')) {
            $realisation->subskills()->attach($request->input('subskills'));
        }
       
        $realisation->update($request->except('image'));

        // Slug change
        if ($request->has('title') && $request->title !== $realisation->title) {
            $realisation->slug = Str::slug($request->title);
        }       
        $realisation->save();

        if ($request->hasFile('image')) {
            // If a realization already has an image
            if ($realisation->image) {
                Storage::disk('public')->delete($realisation->image);
            }
            $fileName = sha1(time() . $request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();

            $imagePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

            $realisation->image = $imagePath;
            $realisation->save();
        }

        return redirect()->route('admin.realisations.index')->with('success', 'Réalisation modifiée avec succès.');
    }
}
