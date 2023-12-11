<?php

namespace Database\Seeders;

use App\Models\Realisation;
use Illuminate\Database\Seeder;

class RealisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Realisation::factory()->count(15)->create();
    }
}
