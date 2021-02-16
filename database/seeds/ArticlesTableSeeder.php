<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            // DEFINISCO NUOVA ISTANZA OGGETTO ARTICLE
           $newArticle = new Article();
           

        }
    }
}
