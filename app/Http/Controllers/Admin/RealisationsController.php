<?php

namespace App\Http\Controllers\Admin;

use App\Models\Skill;
use App\Models\Realisation;
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
        $skills = Skill::all();
        return view('admin.realisations.create', compact('skills'));
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $fileName = sha1(time() . $request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();
            $imagePath = $request->file('image')->storeAs('uploads', $fileName, 'public');
        }

        Realisation::create([
            'title' => $credentials['title'],
            'subtitle' => $credentials['subtitle'],
            'content' => $credentials['content'],
            'image' => $imagePath ?? null,
        ]);

        return redirect()->route('admin.realisations.index');
    }

    public function edit(Realisation $realisation)
    {
        $skills = Skill::all();
        return view('admin.realisations.edit', compact('realisation', 'skills'));
    }

    public function update(Request $request, Realisation $realisation)
    {
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);    

        if ($realisation->image) {
            Storage::disk('public')->delete($realisation->image);
        }
        $realisation->update($request->except('image'));

        if ($request->hasFile('image')) {
            $fileName = sha1(time() . $request->file('image')->getClientOriginalName()) . '.' . $request->file('image')->getClientOriginalExtension();

            $imagePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

            $realisation->image = $imagePath;
            $realisation->save();
        }

        return redirect()->route('admin.realisations.index');
    }
}
