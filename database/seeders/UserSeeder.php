<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
             'name' => 'user1',
             'email' => 'user1@gmail.com',
             'password' => bcrypt('password'),
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@gmail.com',
            'password' => bcrypt('password'),
       ]);

       User::create([
        'name' => 'user3',
        'email' => 'user3@gmail.com',
        'password' => bcrypt('password'),
   ]);

        User::create([
            'name' => 'user4',
            'email' => 'user4@gmail.com',
            'password' => bcrypt('password'),
        ]);
    
    }
}
