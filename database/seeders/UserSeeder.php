<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Abdul',
                'username' => 'abdul',
                'email' => '123@test.com',
                'password' => bcrypt('123123'),
                'remember_token' => Str::random(40),
            ],
            [
                'name' => 'Budi',
                'username' => 'budi',
                'email' => 'bud123@test.com',
                'password' => bcrypt('123123'),
                'remember_token' => Str::random(40),
            ],
        ]);
    }
}
