<?php

namespace Database\Factories;

use App\Models\Umkm;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Umkm>
 */
class UmkmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'business_name' => fake()->randomElement(['Kantin Tarbiyah', 'Fotokopian FISIP', 'Warmindo Mang Ade', 'Ayam Geprek Bensin', 'Kantin Syahida Inn', 'Warung Kopi Nanas', 'Percetakan FITK', 'Toko Buku Fathullah', 'Soto Lamongan Ciputat']),
            'owner_name' => fake()->name(),
            'phone_number' => fake()->phoneNumber(),
            'category' => fake()->randomElement(['Kuliner', 'Jasa', 'Fashion', 'Sembako', 'Kerajinan']),
            'description' => fake()->paragraph(),
            'address' => fake()->randomElement(['Jl. Ir H. Juanda No. 95', 'Gedung Kemahasiswaan UIN', 'Area Parkir FST', 'Belakang Kampus 1 UIN', 'Dekat Masjid Fathullah']),
            'image' => 'sample_uin.jpeg',
        ];
    }
}
