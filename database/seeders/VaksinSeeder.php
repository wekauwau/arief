<?php

namespace Database\Seeders;

use App\Models\Vaksin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaksinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Hepatitis B',
                'deskripsi' => 'text',
            ],
            [
                'nama' => 'Campak',
                'deskripsi' => 'text',
            ],
            [
                'nama' => 'Influenza B',
                'deskripsi' => 'text',
            ],
        ];

        foreach ($data as $val) {
            Vaksin::create($val);
        }
    }
}
