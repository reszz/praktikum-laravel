<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(), // Menghasilkan nama acak
            'nim' => $this->faker->unique()->numerify('########'), // Menghasilkan 8 digit angka
            'jurusan' => $this->faker->randomElement(['IF', 'SI', 'TI']), // Memilih acak dari pilihan
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
