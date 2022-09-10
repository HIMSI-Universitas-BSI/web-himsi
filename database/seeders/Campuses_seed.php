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
                'group_wa' => 'https://chat.whatsapp.com/DEspkFujuOT8nSUhQ2S4NV',
                'instagram' => 'https://www.instagram.com/himsi.ubsicikarang',
                'name' => 'cikarang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'group_wa' => 'https://chat.whatsapp.com/B99idLpJ3GfIsJ5rDcZnCP',
                'instagram' => 'https://www.instagram.com/himsicengkareng',
                'name' => 'cengkareng',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'group_wa' => 'https://chat.whatsapp.com/GIG5ZiRbHXNLlfJVQS7tpS',
                'instagram' => 'https://www.instagram.com/himsicimone',
                'name' => 'cimone',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'group_wa' => 'https://chat.whatsapp.com/IBH0sZHfBvz99s1c3wWDdy',
                'instagram' => 'https://www.instagram.com/himsisamudra',
                'name' => 'salemba 22',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'group_wa' => 'https://chat.whatsapp.com/IBH0sZHfBvz99s1c3wWDdy',
                'instagram' => 'https://www.instagram.com/himsisamudra',
                'name' => 'pemuda',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HB',
                'group_wa' => 'https://chat.whatsapp.com/BVT6gQrEF9fGWsNZufPPkU',
                'instagram' => 'https://www.instagram.com/himsi_bsd',
                'name' => 'BSD',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HT',
                'group_wa' => 'https://chat.whatsapp.com/DPgQ1354fgADVXfXFtjZQs',
                'instagram' => 'https://www.instagram.com/himsi.kaliabang',
                'name' => 'kaliabang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HT',
                'group_wa' => 'https://chat.whatsapp.com/F92joW8EqKG8CsN0KPWIXr',
                'instagram' => 'https://www.instagram.com/himsi_cutmutiah',
                'name' => 'cut mutia',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'group_wa' => 'https://chat.whatsapp.com/IEkUCWrrtHU7orKdc7vUdH',
                'instagram' => 'https://www.instagram.com/himsimargonda',
                'name' => 'margonda',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => 'HP',
                'group_wa' => 'https://chat.whatsapp.com/IBH0sZHfBvz99s1c3wWDdy',
                'instagram' => 'https://www.instagram.com/himsisamudra',
                'name' => 'keramat 98',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/FGBgG1wF68m2HjSiKCfn6j',
                'instagram' => null,
                'name' => 'fatmawati',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/EMKxySd6mVc9gCeXUb3nSq',
                'instagram' => null,
                'name' => 'ciputat',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/CzY9tXbpCPi264klkkvo5E',
                'instagram' => null,
                'name' => 'ciledug',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/IbWVwzmoFDzLnaWnBEUSzh',
                'instagram' => null,
                'name' => 'dewi sartika',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/E8VQbYCihZQGBBFtR4U2qR',
                'instagram' => null,
                'name' => 'kalimalang',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/IoN0O8QrSQR2usKHqO4JFl',
                'instagram' => null,
                'name' => 'cibitung',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/KxVv7k8so1aGDwYMoo3yAu',
                'instagram' => null,
                'name' => 'slipi',
                'image' => 'bsi.png'
            ],
            [
                'kode_sektor' => null,
                'group_wa' => 'https://chat.whatsapp.com/KDpxiRq6XMSLmb95KKPdaC',
                'instagram' => null,
                'name' => 'jatiwaringin',
                'image' => 'bsi.png'
            ],
        ];
        Campuses::insert($campuses);
    }
}
