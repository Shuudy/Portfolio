<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;

class RealisationsController extends Controller
{
    public function index()
    {
        return view('admin.realisations.index');
    }

    public function edit(Realisation $realisation)
    {
        return view('admin.realisations.edit', compact('realisation'));
    }
}
