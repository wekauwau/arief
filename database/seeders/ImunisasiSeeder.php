<?php

namespace Database\Seeders;

use App\Models\Imunisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imunisasi::factory()->count(5)->create();
    }
}
