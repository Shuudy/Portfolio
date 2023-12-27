<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Realisation;
use Illuminate\Database\Seeder;
use Database\Factories\RealisationFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UsersSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(SubSkillsSeeder::class);
        $this->call(RealisationSeeder::class);
    }
}
