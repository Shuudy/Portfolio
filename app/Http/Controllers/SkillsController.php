<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\SubSkill;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skill::all();
        return view('skills.index', compact('skills'));
    }

    public function show(Skill $skill)
    {
        $subskills = $skill->subskills()->get();
        return view('skills.show', compact('skill', 'subskills'));
    }

    public function showRealisations(SubSkill $subskill)
    {
        $realisations = $subskill->realisations()->get();
        return view('skills.realisations', compact('realisations', 'subskill'));
    }
}
