<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
  public function categorie()
{
    return $this->belongsTo(Categorie::class);
}
public function user()
{
    return $this->belongsTo(User::class);
}

public function scopeLatestWithUser($query)
{
    return $query->with('user')->latest();
}

}
