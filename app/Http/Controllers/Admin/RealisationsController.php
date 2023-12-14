<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;
use App\Models\Skill;

class RealisationsController extends Controller
{
    public function index()
    {
        return view('admin.realisations.index');
    }

    public function edit(Realisation $realisation)
    {
        $skills = Skill::all();
        return view('admin.realisations.edit', compact('realisation', 'skills'));
    }
}
