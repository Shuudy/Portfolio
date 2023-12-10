<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            ['name' => 'Gérer le patrimoine informatique'],
            ['name' => "Répondre aux incidents et aux demandes d'assistance et d'évolution"],
            ['name' => "Développer la présence en ligne de l'organisation"],
            ['name' => 'Travailler en mode projet'],
            ['name' => 'Mettre à disposition des utilisateurs un service informatique'],
            ['name' => 'Organiser son développement professionnel']
        ];

        Skill::insert($skills);
    }
}