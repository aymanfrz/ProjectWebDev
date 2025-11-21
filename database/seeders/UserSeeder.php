<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder {
    public function run (){
        User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost',
            'password' => bcrypt('password'),
            'status' => 'admin'
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@localhost',
            'password' => bcrypt('password'),
            'status' => 'member'
        ]);
    }
}