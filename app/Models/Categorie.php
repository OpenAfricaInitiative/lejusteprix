<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	
    public function Product()
	{
    	return $this->hasMany(Produit::class);
	}
}


