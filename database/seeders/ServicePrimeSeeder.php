<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_primes')->insert([
            [
                'icone_id' => 1,
                'titre' => 'GET IN THE LAB',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
            [
                'icone_id' => 2,
                'titre' => 'PROJECTS ONLINE',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
            [
                'icone_id' => 3,
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
            [
                'icone_id' => 4,
                'titre' => 'GET IN THE LAB',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
            [
                'icone_id' => 5,
                'titre' => 'PROJECTS ONLINE',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
            [
                'icone_id' => 6,
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            ],
        ]);
    }
}
