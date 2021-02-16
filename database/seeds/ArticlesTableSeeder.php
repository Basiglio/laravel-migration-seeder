<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Article;

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

            //    DEFINISCO CHIAVE VALORE DA INIETTARE NEL DB
            $newArticle -> title = $faker -> text($maxNbChars = 50);
            $newArticle -> subtitle = $faker -> text($maxNbChars = 20);
            $newArticle -> author = $faker -> name;
            $newArticle -> text = $faker -> text($maxNbChars = 5000);
            $newArticle -> pubblication = $faker -> date;
            
            // SALVO I DATI
            $newArticle -> save();

        }
    }
}
