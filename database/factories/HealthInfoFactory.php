<?php

namespace Database\Factories;

use App\Models\HealthInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<HealthInfo>
 */
class HealthInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(['Klinik UIN Jakarta', 'Puskesmas Ciputat Timur', 'Rumah Sakit Syarif Hidayatullah', 'Posyandu Pisangan', 'Apotek K-24 Ciputat']),
            'type' => fake()->randomElement(['Posyandu', 'Klinik', 'Rumah Sakit', 'Apotek']),
            'schedule' => 'Setiap ' . fake()->dayOfWeek() . ', 08:00 - 12:00',
            'location' => fake()->randomElement(['Jl. Ir H. Juanda, Ciputat', 'Kampus 1 UIN Jakarta', 'Belakang UIN', 'Kawasan Pisangan']),
            'contact_number' => fake()->phoneNumber(),
            'description' => fake()->paragraph(),
        ];
    }
}
