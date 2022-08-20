<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'id' => 'UID-22880001',
                'full_name' => 'admin oprec',
                'NIM' => '19200616',
                'positions_id' => 1,
                'campuses_id' => 2,
                'email' => '19200616@bsi.ac.id',
                'password' => Hash::make('#SuperOprec2022'),
            ],
            [
                'id' => 'UID-22880002',
                'full_name' => 'Fathi Furqon Amrullah',
                'NIM' => '19200882',
                'positions_id' => 2,
                'campuses_id' => 9,
                'email' => '19200882@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880003',
                'full_name' => 'Putri Aprilia Anggraini',
                'NIM' => '19200511',
                'positions_id' => 2,
                'campuses_id' => 6,
                'email' => '19200511@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880004',
                'full_name' => 'Rafi Zuhud Agungsyah',
                'NIM' => '19200905',
                'positions_id' => 2,
                'campuses_id' => 9,
                'email' => '19200905@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880005',
                'full_name' => 'Nadila Andika Rahma',
                'NIM' => '12192641',
                'positions_id' => 2,
                'campuses_id' => 7,
                'email' => '12192641@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880006',
                'full_name' => 'Dethya praningrum',
                'NIM' => '12211274',
                'positions_id' => 2,
                'campuses_id' => 5,
                'email' => '12211274@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880007',
                'full_name' => 'Tasya Raisma Rizal',
                'NIM' => '19200270',
                'positions_id' => 2,
                'campuses_id' => 8,
                'email' => '19200270@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880008',
                'full_name' => 'Yolanda Nur Aprilia',
                'NIM' => '19200311',
                'positions_id' => 2,
                'campuses_id' => 7,
                'email' => '19200311@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880009',
                'full_name' => 'Armadika Supriatna Saputra',
                'NIM' => '19210822',
                'positions_id' => 2,
                'campuses_id' => 1,
                'email' => '19210822@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880010',
                'full_name' => 'Hendra Gunawan',
                'NIM' => '12210316',
                'positions_id' => 2,
                'campuses_id' => 5,
                'email' => '12210316@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880011',
                'full_name' => 'Yesicha Audria',
                'NIM' => '19200020',
                'positions_id' => 2,
                'campuses_id' => 2,
                'email' => '19200020@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880012',
                'full_name' => 'Dwi Ratna',
                'NIM' => '19200461',
                'positions_id' => 2,
                'campuses_id' => 9,
                'email' => '19200461@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880013',
                'full_name' => 'LAILATUL ROMADHON BACHTIAR',
                'NIM' => '19207031',
                'positions_id' => 2,
                'campuses_id' => 3,
                'email' => '19207031@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
            [
                'id' => 'UID-22880014',
                'full_name' => 'Muhammad Aryazid',
                'NIM' => '12200838',
                'positions_id' => 2,
                'campuses_id' => 6,
                'email' => '12200838@bsi.ac.id',
                'password' => Hash::make('#PanitiaOprec2022'),
            ],
        ];
        User::insert($users);
    }
}
