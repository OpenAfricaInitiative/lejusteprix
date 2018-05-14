<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Categorie extends \TCG\Voyager\Models\Category
{
	public function posts()
    {
<<<<<<< HEAD
        return $this->hasMany(Post::class,'category_id')
=======
        return $this->hasMany(Post::class)
>>>>>>> d9412d38df9a940c44f53010f15071eaf6780ef1
            ->published()
            ->orderBy('created_at', 'DESC');
    }
}


