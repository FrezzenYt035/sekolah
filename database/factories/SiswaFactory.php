<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
{
    return [
        'nama' => $this->faker->name(),
        'nis' => $this->faker->unique()->numerify('2025###'),
        'kelas_id' => Kelas::inRandomOrder()->first()->id ?? Kelas::factory(),
    ];
}
}
