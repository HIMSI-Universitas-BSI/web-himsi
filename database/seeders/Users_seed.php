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
                'name' => 'admin oprec',
                'username' => 'superadmin',
                'positions_id' => 1,
                'email' => '19200616@bsi.ac.id',
                'password' => Hash::make('#19200616'),
            ],
            [
                'name' => 'panitia oprec',
                'username' => 'panitia',
                'positions_id' => 2,
                'email' => 'panitiaoprec@gmail.com',
                'password' => Hash::make('#Panitia2022'),
            ]
        ];
        User::insert($users);
    }
}
