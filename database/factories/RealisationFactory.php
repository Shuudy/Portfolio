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
        $title = ucfirst(fake()->word) . ', ' . ucfirst(fake()->word) . ', ' . ucfirst(fake()->word);
        return [
            'title' => $title,
            'subtitle' => 'HTML, CSS, JS',
            'slug' => Str::slug($title),
            'content' => fake()->sentence
        ];
    }
}
