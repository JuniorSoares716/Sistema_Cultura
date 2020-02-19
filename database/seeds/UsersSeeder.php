<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    public function run(){
        
         User::create([
            'name' => 'admin',
            'password' => bcrypt('ADMIN'),
            'email' => 'admin@admin.com',
        ]);
    }
}
