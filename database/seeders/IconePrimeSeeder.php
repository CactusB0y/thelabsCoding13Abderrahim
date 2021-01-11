<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconePrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icone_primes')->insert([
            [
                'image' => 'flaticon-002-caliper',
            ],
            [
                'image' => 'flaticon-019-coffee-cup',
            ],
            [
                'image' => 'flaticon-020-creativity',
            ],
            [
                'image' => 'flaticon-037-idea',
            ],
            [
                'image' => 'flaticon-025-imagination',
            ],
            [
                'image' => 'flaticon-008-team',
            ]
        ]);
    }
}
