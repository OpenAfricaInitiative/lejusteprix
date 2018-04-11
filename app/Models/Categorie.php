<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
	public function posts()
    {
        return $this->hasMany(Post::class)
            ->published()
            ->orderBy('created_at', 'DESC');
    }
}


