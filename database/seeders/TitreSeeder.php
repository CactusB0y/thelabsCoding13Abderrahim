<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert(
            [
                [
                    'titre' => 'Get your freebie template now!'
                ],
                [
                    'titre' => 'Get in (the Lab) and discover the world'
                ],
                [
                    'titre' => 'WHAT OUR CLIENTS SAY'
                ],
                [
                    'titre' => 'GET IN (THE LAB) AND SEE THE SERVICES'
                ],
                [
                    'titre' => 'GET IN (THE LAB) AND MEET THE TEAM'
                ]
            ]
        );
    }
}
