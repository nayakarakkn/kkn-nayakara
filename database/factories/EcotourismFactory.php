<?php

namespace Database\Factories;

use App\Models\Ecotourism;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Ecotourism>
 */
class EcotourismFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Danau Situ Gintung', 'Taman Fathullah', 'Hutan Kota Ciputat', 'Taman FKIK UIN', 'Taman Rektorat']),
            'description' => fake()->paragraph(),
            'image' => 'sample_uin.jpeg',
            'location' => fake()->randomElement(['Ciputat Timur', 'Kawasan Kampus', 'Belakang UIN']),
        ];
    }
}
