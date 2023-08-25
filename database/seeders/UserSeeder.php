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
        User::create([
            "name" => "Mayra",
            "surname" => "Pereira",
            "email" => "mayra@gmail.com",
            "password" => bcrypt("1234"),
            "cellphone" => "11996034556",
        ]);
    }
}
