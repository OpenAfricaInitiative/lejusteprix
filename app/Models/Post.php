<?php

namespace App\Models;

use App\Comment;
use App\Models\Categorie;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends \TCG\Voyager\Models\Post
{
    public function author()
    {
        return $this->belongsTo(User::class,'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

<<<<<<< HEAD
    
=======
	
>>>>>>> d9412d38df9a940c44f53010f15071eaf6780ef1
}
