<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert(
            [
                [
                    'nom' => 'William',
                    'prenom' => 'Christinne',
                    'role' => 'CEO',
                    'src' => '2.jpg',
                    'src_avatar' => '02.jpg'
                ],
                [
                    'nom' => 'Richards',
                    'prenom' => 'Abdoul',
                    'role' => 'Digital Designer',
                    'src' => '3.jpg',
                    'src_avatar' => '04.jpg'
                ],
                [
                    'nom' => 'Rien',
                    'prenom' => 'Laura',
                    'role' => 'Project Manager',
                    'src' => '1.jpg',
                    'src_avatar' => '03.jpg'
                ]
            ]
        );
    }
}
