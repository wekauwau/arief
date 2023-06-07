<?php

namespace Database\Seeders;

use App\Models\DataAnak;
use Illuminate\Database\Seeder;

class DataAnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DataAnak::factory()->count(20)->create();
    }
}
