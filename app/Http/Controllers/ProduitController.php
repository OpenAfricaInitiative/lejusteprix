<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    function riz(){
        $title='Riz';
    	 $produits=Product::where('slug','riz')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }
    function sucre(){
          $title='Sucre';
    	 $produits=Product::where('slug','sucre')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }
    function tomate(){
          $title='Tomate';
    	 $produits=Product::where('slug','tomate')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }

    function ciment(){
          $title='Ciment';
    	 $produits=Product::where('slug','ciment')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }

    function huile(){
          $title='Huile';
    	 $produits=Product::where('slug','huile')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }

    function loyers(){
          $title='Loyers';
         $produits=Product::where('slug','loyers')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }

    function gaz(){
          $title='Gaz';
         $produits=Product::where('slug','gaz')->paginate(5);
        return view('pages.master',compact('title','produits'));
    }
}
