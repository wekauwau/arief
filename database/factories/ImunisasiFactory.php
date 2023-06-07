<?php

namespace Database\Factories;

use App\Models\DataAnak;
use App\Models\DataIbu;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Imunisasi>
 */
class ImunisasiFactory extends Factory
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
            'tanggal' => fake()->date(),
            'usia_saat_vaksin' => 1,
            'tinggi' => 50,
            'berat' => 4,
            'periode' => 'Pertama',
            'vaksins_id' => 1,
            'data_anaks_id' => $this->get_ids(DataAnak::class),
            'data_ibus_id' => $this->get_ids(DataIbu::class),
        ];
    }
}
