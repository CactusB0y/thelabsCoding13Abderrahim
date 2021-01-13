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
                    'role_id' => '4',
                    'description' => 'jeune maitre incontesté , je suis le meilleur sur tout les points AMEN',
                    'email' => 'admin@admin.com',
                    'password' => Hash::make('admin@admin.com')
                ],
                [
                    'name' => 'Salija',
                    'prenom' => 'Kadri',
                    'src' => 'cactus.jpg',
                    'role_id' => '3',
                    'description' => 'je veux un gros tacos',
                    'email' => 'webmaster@webmaster.com',
                    'password' => Hash::make('webmaster@webmaster.com')
                ],
                [
                    'name' => 'Castro',
                    'prenom' => 'Fidel',
                    'src' => 'cactus.jpg',
                    'role_id' => '2',
                    'description' => 'viva cuba !',
                    'email' => 'redacteur@redacteur.com',
                    'password' => Hash::make('redacteur@redacteur.com')
                ],
                [
                    'name' => 'Poutine',
                    'prenom' => 'Vladimir',
                    'src' => 'cactus.jpg',
                    'role_id' => '1',
                    'description' => 'Mother russia is bleeding',
                    'email' => 'membre@membre.com',
                    'password' => Hash::make('membre@membre.com')
                ]
            ]
        );
    }
}
