<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Companies>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //add company model data
            'companie_name'=> fake()->company(),
            'companie_slug'=> fake()->slug(),
            'companie_email'=> fake()->unique()->safeEmail(),
            'companie_logo'=> 'logo.png',
            'companie_website'=> 'https://www.google.com/',
        ];
    }
}
