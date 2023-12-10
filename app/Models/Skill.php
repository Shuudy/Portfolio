<?php

namespace App\Models;

use App\Models\SubSkill;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function subskills()
    {
        return $this->hasMany(SubSkill::class, 'skill_id', 'id');
    }
}