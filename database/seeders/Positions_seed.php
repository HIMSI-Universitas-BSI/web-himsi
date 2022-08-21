<?php

namespace Database\Seeders;

use App\Models\Positions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Positions_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $positions = [
            [
                'name' => 'admin',
                'level' => 'super'
            ],
            [
                'name' => 'Ketua Umum',
                'level' => 'DPP'
            ],
            [
                'name' => 'Kepala Divisi PSDM',
                'level' => 'DPP'
            ],
            [
                'name' => 'Anggota PSDM',
                'level' => 'DPP'
            ],
            [
                'name' => 'Koordinator RSDM',
                'level' => 'DPC'
            ],

        ];
        Positions::insert($positions);
    }
}
