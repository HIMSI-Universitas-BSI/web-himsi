<?php

namespace Database\Seeders;

use App\Models\Campuses;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Campuses_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campuses = [
            [
                'kode_sektor' => 'HT',
                'name' => 'cikarang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'name' => 'cengkareng',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'name' => 'cimone',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'name' => 'salemba 22',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'name' => 'pemuda',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'name' => 'BSD',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HT',
                'name' => 'kaliabang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HT',
                'name' => 'cut mutiah / bekasi',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'name' => 'margonda',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'name' => 'keramat 98',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'fatmawati',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'ciputat',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'ciledug',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'dewi sartika B',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'kalimalang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'cibitung',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'name' => 'slipi',
                'image' => 'bsi.png'
            ],
        ];
        Campuses::insert($campuses);
    }
}
