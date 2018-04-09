<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ContactFormRequest;
use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::paginate(2);
    return view('pages.category.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        Categorie::create([
            'name'=>$request->name,
            
        ]);
        flashy('Categorie créer avec succés');
        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return l'article et ses commentaires 
     */
    public function show($id)
    {
       
       if($id !=''){

        $post=Post::find($id);
         $comments=Comment::where('post_id',$id)->latest()->get();
        return view('pages.category.show',compact('post','comments'));
        }
        return back();
    }
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        return view('pages.category.edit',compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Categorie $categorie)
    {
         $categorie->update($request->all());
         flashy('La categorie a bien été modifieé');
         return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorie $categorie)
    {

    $categorie->delete();
    flashy('Suppression effectuée avec succès');
    return response()->json();
   
    }
}
