<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	use Sluggable;

    protected $fillable=['name',"slug"];

  

	public function sluggable()
	{
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function images()
	{
    	return $this->hasMany(Image::class);
	}
}

