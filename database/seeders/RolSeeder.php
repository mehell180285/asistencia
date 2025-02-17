<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rols')->insert([
            [
                'name' => 'Administrador',
                'prefix' => 'AD',
                'status' => 'A'
            ],
            [
                'name' => 'Docente',
                'prefix' => 'DC',
                'status' => 'A'
            ],
            [
                'name' => 'Estudiante',
                'prefix' => 'ES',
                'status' => 'A'
            ]
        ]);
    }
}
