<?php

namespace App\Models;

use App\Comment;
use App\Models\Categorie;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
    	return $this->belongsTo(User::class,'author_id');
    }
    public function category()
    {
        return $this->belongsTo(Categorie::class);
    }
    public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	
}
