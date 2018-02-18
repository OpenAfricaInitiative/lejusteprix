<?php

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([

        	'name'=>"Paysages"
        ]);
        Categorie::create([

        	'name'=>"Maisons"
        ]);

        Categorie::create([

        	'name'=>"Vegetations"
        ]);

        Categorie::create([

        	'name'=>"Animaux"
        ]);

    }
}
