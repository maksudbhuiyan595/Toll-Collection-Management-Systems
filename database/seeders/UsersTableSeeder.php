<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Maksud Bhuiyan',
            'email'=>'maksud@gmail.com',
            'password'=>bcrypt('123456'),
            'image'=>'20230908231922.png'
        ]);
        
}
}