<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RealisationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ucfirst(fake()->word) . ', ' . fake()->word . ', ' . fake()->word;
        $subtitles = ['HTML, CSS, JS', 'Laravel, SASS', 'SASS', 'Debian 11', 'VirtualBox', 'Windows Server 2022'];
        return [
            'title' => $title,
            'subtitle' => fake()->randomElement($subtitles),
            'slug' => Str::slug($title),
            'content' => fake()->paragraphs(3, true)
        ];
    }
}
