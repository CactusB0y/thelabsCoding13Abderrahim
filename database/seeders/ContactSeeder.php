<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert(
            [
                [
                    'titre' => 'CONTACT US',
                    'texte' => 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.',
                    'sous_titre' => 'Main Office',
                    'rue' => 'C/ Libertad, 34',
                    'code_postal' => 05200,
                    'region' => 'Arévalo',
                    'tel' => '0034 37483 2445 322',
                    'email' => 'hello@company.com'
                ]
            ]
        );
    }
}
