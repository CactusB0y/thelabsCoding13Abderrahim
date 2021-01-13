<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Icone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            NavbarSeeder::class,
            UserSeeder::class,
            LogoSeeder::class,
            CarousselSeeder::class,
            AboutSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            TitreSeeder::class,
            ChoiceSeeder::class,
            ReadySeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
            IconeSeeder::class,
            ServiceSeeder::class,
            IconePrimeSeeder::class,
            ServicePrimeSeeder::class,
            MapSeeder::class,
            TagSeeder::class,
            CategorieSeeder::class,
            ArticleSeeder::class,
            CommentSeeder::class,
            Article_TagSeeder::class,
            Article_CategorieSeeder::class
        ]);
    }
}
