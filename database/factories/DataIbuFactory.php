<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataIbu>
 */
class DataIbuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'nik' => fake()->randomNumber(16, true),
            'alamat' => fake()->address(),
            'nomor' => fake()->phoneNumber(),
            'password' => 'password',
        ];
    }
}
