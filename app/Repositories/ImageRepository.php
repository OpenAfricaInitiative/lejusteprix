<?php
namespace App\Repositories;
use App\User;
use Illuminate\Support\Facades\Storage;

class ImageRepository
{



public function getOrphans()
{
    $files = collect(Storage::disk('images')->files());
    $images = User::select('avatar')->get()->pluck('avatar');
    return $files->diff($images);
}



public function destroyOrphans()
{
    $orphans = $this->getOrphans ();
    foreach($orphans as $orphan) {
        Storage::disk('images')->delete($orphan);
    }
}

}
