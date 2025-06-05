<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {

            $users = [
            [
                'name' => 'Mya Mya',
                'email' => 'mya@gmail.com',
                'address' => 'Yangon',
                'phone' => '09199999999',
                'gender' => 'Male',
                'status' => 1,
                'password' =>'123',
            ],
            [
                'name' => 'Su Su',
                'email' => 'susu@gmail.com',
                'address' => 'Mandalay',
                'phone' => '09299999999',
                'gender' => 'Female',
                'status' => 1,
                'password' =>'1234',
            ],
            [
                'name' => 'Mg Mg',
                'email' => 'mgmg@gmail.com',
                'address' => 'Yangon',
                'phone' => '09399999999',
                'gender' => 'Male',
                'status' => 1,
                'password' =>'12345',
            ],
            [
                'name' => 'Pue Pue',
                'email' => 'puepue@gmail.com',
                'address' => 'Yangon',
                'phone' => '09499999999',
                'gender' => 'Female',
                'status' => 1,
                'password' =>'123456',
            ],
            [
                'name' => 'Kyaw Kyaw',
                'email' => 'kyawkyaw@gmail.com',
                'address' => 'Mandalay',
                'phone' => '09599999999',
                'gender' => 'Male',
                'status' => 1,
                'password' =>'1234567',
            ]
        ];

         foreach ($users as $user) {
            User::create($user);
        }
    }
}
