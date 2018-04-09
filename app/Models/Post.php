<?php

namespace App\Models;

use App\Comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author()
    {
    	return $this->belongsTo(User::class,'author_id');
    }
    public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	 public function getIdAttribute($value)
	{
		return $value;
	}
}
