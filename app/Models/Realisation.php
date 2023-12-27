<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'subtitle', 'content', 'image', 'slug'];

    public function subskills()
    {
        return $this->belongsToMany(SubSkill::class, 'benefits', 'realisation_id', 'sub_skill_id');
    }
}
