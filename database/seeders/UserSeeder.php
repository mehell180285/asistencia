<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'hmedranol',
                'password' => bcrypt('password'),
                'person_id' => 1,
                'rol_id' => 1,
                'area_id' => 1,
                'status' => 'A'
            ],
            [
                'username' => 'rgomezd',
                'password' => bcrypt('password'),
                'person_id' => 2,
                'rol_id' => 2,
                'area_id' => 1,
                'status' => 'A'
            ],
            [
                'username' => 'jpalacinl',
                'password' => bcrypt('password'),
                'person_id' => 3,
                'rol_id' => 3,
                'area_id' => 1,
                'status' => 'A'
            ]
        ]);
    }
}
