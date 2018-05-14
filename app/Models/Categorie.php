<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Categorie extends \TCG\Voyager\Models\Category
{
	public function posts()
    {
        return $this->hasMany(Post::class,'category_id')
            ->published()
            ->orderBy('created_at', 'DESC');
    }
}


