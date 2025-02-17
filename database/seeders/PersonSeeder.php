<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('persons')->insert([
            [
                'typedoc' => 'D',
                'numdoc' => '70867433',
                'last_name0' => 'MEDRANO',
                'last_name1' => 'LLANOS',
                'first_name' => 'Hector Luis',
                'birthday' => '1995-02-18',
                'sex' => 'M',
                'civil' => 'S',
                'mail_person' => 'hectormedranollanos@gmail.com',
                'cellular' => '950893707',
                'address' => 'A.A.H.H. Victor Raúl Haya de la Torre Mz.D Lt. 1'
            ],
            [
                'typedoc' => 'D',
                'numdoc' => '70480107',
                'last_name0' => 'GOMEZ',
                'last_name1' => 'DEL VALLE',
                'first_name' => 'Rocio',
                'birthday' => '1995-08-30',
                'sex' => 'F',
                'civil' => 'S',
                'mail_person' => 'rociogomezdelvalle30@gmail.com',
                'cellular' => '910474506',
                'address' => 'A.A.H.H. Victor Raúl Haya de la Torre Mz.D Lt. 1'
            ],
            [
                'typedoc' => 'D',
                'numdoc' => '65458568',
                'last_name0' => 'PALACIN',
                'last_name1' => 'LLANOS',
                'first_name' => 'Joshua',
                'birthday' => '2010-09-05',
                'sex' => 'M',
                'civil' => 'S',
                'mail_person' => 'joshuapalacinllanos@gmail.com',
                'cellular' => '929169794',
                'address' => 'Jr. Bolognesi Nro 437'
            ]
        ]);
    }
}
