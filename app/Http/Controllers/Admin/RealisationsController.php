<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Realisation;

class RealisationsController extends Controller
{
    public function index()
    {
        $realisations = Realisation::paginate(10);
        return view('admin.realisations.index', ['realisations' => $realisations]);
    }
}
