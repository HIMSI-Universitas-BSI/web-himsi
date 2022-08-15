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
                'name' => 'Cikarang',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Cutmutiah',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Kaliabang',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Margonda',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Salemba',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Pemuda',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Keramat',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Fatmawati',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Ciputat',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Ciledug',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Dewi Sartika',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Slipi',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Cengkareng',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'BSD',
                'image' => 'bsi.png'
            ],
            [
                'name' => 'Cimone',
                'image' => 'bsi.png'
            ],
        ];
        Campuses::insert($campuses);
    }
}
