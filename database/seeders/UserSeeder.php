<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("users")->insert([
            "username"=>"admin",
            "name"=>"Admin",
            "email"=>"admin@gmail.com",
            "avatar"=>"",

            "password"=> Hash::make("admin"),
            "department_id"=>"1",
            "status_id"=>"1",
            "login_at"=> "2024-04-23 11:30:02",
            "change_password_at"=>"2024-04-23 11:30:02"
        ]);
    }
}
