<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
     $images = Image::latestWithUser()->paginate(config('app.pagination'));

    return view('welcome', compact('images'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.category.create');
    }

       public function language(String $locale)
{
    $locale = in_array($locale, config('app.locale')) ? $locale : config('app.fallback_locale');
    session(['locale' => $locale]);
    return back();
}
}
