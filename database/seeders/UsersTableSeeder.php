<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{Hash,DB};

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        DB::table('users')->insert([
         [
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make(123456),
            'role' => 'admin',
            'status'=>'active'
        ],
        //Users
        [
            'name'=>'Mahira Jabin',
            'email'=>'mahirajabin0231@gmail.com',
            'password'=>Hash::make(12345),
            'role'=>'user',
            'status'=>'active'
        ]
        ]);
    }
}
