<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert(
            [
                [
                    'button' => 'Home',
                    'url' => '/',
                ],
                [
                    'button' => 'Services',
                    'url' => '/service',
                ],
                [
                    'button' => 'Blog',
                    'url' => '/blog',
                ],
                [
                    'button' => 'Contact',
                    'url' => '/contact',
                ]
            ]
        );
    }
}
