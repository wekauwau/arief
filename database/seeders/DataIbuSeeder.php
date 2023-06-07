<?php

namespace Database\Seeders;

use App\Models\DataIbu;
use Illuminate\Database\Seeder;

class DataIbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataIbu::factory()->count(10)->create();
    }
}
