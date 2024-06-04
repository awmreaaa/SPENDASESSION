<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'name'=>'Guru BK',
                'email'=>'bksmpn2bjm@gmail.com',
                'role'=>'gurubk',
                'password'=>bcrypt('bkspenda')
            ],

            [
                'name'=>'Guru Pengajar',
                'email'=>'gurusmpn2bjm@gmail.com',
                'role'=>'gurupengajar',
                'password'=>bcrypt('guruspenda')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}