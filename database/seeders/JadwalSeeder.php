<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalSeeder extends Seeder
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
                'dusun' => 'Dewa',
                'waktu' => null,
                'tempat' => 'Rumah Bu RT',
            ],
            [
                'dusun' => 'Banjaran',
                'waktu' => null,
                'tempat' => 'Rumah Bu RT',
            ],
            [
                'dusun' => 'Banjareja',
                'waktu' => null,
                'tempat' => 'Rumah Bu RT',
            ],
            [
                'dusun' => 'Kedung Benda',
                'waktu' => null,
                'tempat' => 'Rumah Bu RT',
            ],
            [
                'dusun' => 'Sabrang Lor',
                'waktu' => null,
                'tempat' => 'Rumah Bu RT',
            ],
        ];

        foreach ($data as $val) {
            Jadwal::create($val);
        }
    }
}
