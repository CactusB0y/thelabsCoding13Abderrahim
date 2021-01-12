<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'Kbib',
                    'prenom' => 'Abderrahim',
                    'src' => 'cactus.jpg',
                    'role' => 'admin',
                    'description' => 'jeune maitre incontesté , je suis le meilleur sur tout les points AMEN',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin@admin.com')
                ]
            ]
        );
    }
}
