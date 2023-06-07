<?php

namespace Database\Factories;

use App\Models\DataIbu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataAnak>
 */
class DataAnakFactory extends Factory
{
    function get_ids($model)
    {
        $ids = $model::pluck('id')->all();
        $random_id = $this->faker->randomElement($ids);

        return $random_id;
    }

    public function definition()
    {
        return [
            'nama' => fake()->name(),
            'nik' => fake()->randomNumber(16, true),
            'tempat_lahir' => fake()->city(),
            'tanggal_lahir' => fake()->date(),
            'usia' => fake()->randomNumber(2, true),
            'jenis_kelamin' => fake()->boolean(),
            'data_ibus_id' => $this->get_ids(DataIbu::class),
        ];
    }
}
