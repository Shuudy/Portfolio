<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSkill extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function realisations()
    {
        return $this->belongsToMany(Realisation::class, 'benefits', 'sub_skill_id', 'realisation_id');
    }
}