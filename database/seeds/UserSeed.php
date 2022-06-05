<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'nama' => "Admin",
                'level_id' => 1,
                'username' => "admin",
                'email' => "admin@gmail.com",
                'password' => Hash::make("admin"),
                'remember_token' => Str::random(47)
            ],
            [
                'nama' => "Exhibitor",
                'level_id' => 2,
                'username' => "exhibitor",
                'email' => "exhibitor@gmail.com",
                'password' => Hash::make("exhibitor"),
                'remember_token' => Str::random(47)
            ],
            [
                'nama' => "Visitor",
                'level_id' => 3,
                'username' => "visitor",
                'email' => "visitor@gmail.com",
                'password' => Hash::make("visitor"),
                'remember_token' => Str::random(47)
            ]            
        ]);
    }
}
