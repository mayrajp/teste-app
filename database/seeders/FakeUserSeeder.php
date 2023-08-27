<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class FakeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ini_set('max_execution_time', 3000);
        ini_set('memory_limit', '512M');
        DB::disableQueryLog();
        $allUsers = User::all();

        $faker = Faker::create();

        if ($allUsers->count() < 100000) {
            for ($i = 0; $i < 5000; $i++) {

                $users = User::all();
                if($users->count() < 100000) {
                    DB::table('users')->insert([
                        'name' => $faker->name(),
                        'surname' => $faker->name(),
                        'email' => $faker->email(),
                        'cellphone' => $faker->phoneNumber(),
                        'password' => Hash::make('password'),
                    ]);
                }else if($users->count() == 100000) {
                    break;
                }
            }
        }
    }
}
