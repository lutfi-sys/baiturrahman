<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                "name"=> "Andika",
                "email"=> "andika@gmail.com",
                'role'=>'pegawai',
                "password"=> bcrypt("123456"),
            ],
            [
                "name"=> "Bagas",
                "email"=> "bagas@gmail.com",
                'role'=>'siswa',
                "password"=> bcrypt("123456"),
            ],
            [
                "name"=> "cika",
                "email"=> "cika@gmail.com",
                'role'=>'pegawai',
                "password"=> bcrypt("123456"),
            ],
            [
                "name"=> "Doni",
                "email"=> "do@gmail.com",
                'role'=>'pegawai',
                "password"=> bcrypt("123456"),
            ],
        ];

        foreach ($users as $key => $value) {
          User ::create($value);
    }
}
}