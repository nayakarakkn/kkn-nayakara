<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Fakultas Ilmu Tarbiyah dan Keguruan', 'Fakultas Adab dan Humaniora', 'Fakultas Ushuluddin', 'Fakultas Syariah dan Hukum', 'Fakultas Dakwah dan Ilmu Komunikasi', 'Fakultas Dirasat Islamiyah', 'Fakultas Sains dan Teknologi', 'Fakultas Kedokteran', 'Fakultas Ekonomi dan Bisnis']),
            'type' => fake()->randomElement(['Fakultas', 'Lembaga', 'Pusat Studi']),
            'address' => fake()->randomElement(['Kampus 1 UIN', 'Kampus 2 UIN']),
            'contact_number' => fake()->phoneNumber(),
            'description' => fake()->paragraph(),
        ];
    }
}
