<?php

namespace Database\Factories;

use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Masjid Fathullah UIN', 'Perpustakaan Utama', 'Student Center (SC)', 'Gedung Syahida Inn', 'Lapangan Futsal UIN', 'Auditorium Harun Nasution', 'Laboratorium Terpadu', 'Gedung Rektorat']),
            'image' => 'sample_uin.jpeg',
            'description' => fake()->paragraph(),
            'location' => fake()->randomElement(['Kampus 1 UIN Jakarta', 'Kampus 2 UIN Jakarta', 'Kawasan SC UIN', 'Samping Fakultas Kedokteran']),
            'operational_hours' => '08:00 - 17:00',
        ];
    }
}
