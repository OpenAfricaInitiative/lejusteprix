<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\ArticleFormRequest;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Affiche la liste des categorie et celle des derniers articles.
     *par pagination de 3 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=Categorie::all();
        $posts=Post::where('status','PUBLISHED')->latest('id')->paginate(3);
       
    return view('pages.blog.index',compact('posts','category'));
    }
   /**
     * Tous les articles du blog avec une pagination de 9/pages
     *
     * @return \Illuminate\Http\Response  
     */
    public function all()
    {
        $posts=Post::where('status','PUBLISHED')->latest('Id')->paginate(10);
    return view('pages.blog.all',compact('posts'));
    }


    /**
     * Affiche Tous les articles et leurs categories 
     *
     * @return \Illuminate\Http\Response
     */
    public function category($Category_id)
    {
        $category=Categorie::where('id',$Category_id)->firstOrFail();
        $Posts =Post::where('category_id',$Category_id)
        ->whereStatus('PUBLISHED')
        ->get();
         return view('pages.blog.category',compact('category','Posts'));
    }

    /**
     *L'article et ses commentaires
     *
     * @param  int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id)
    {
       if($id !=''){
        $category=Categorie::all();
        $post=Post::find($id);
         $comments=Comment::where('post_id',$id)->latest()->paginate(5);
         $count=Comment::where('post_id',$id)->latest()->count();
        return view('pages.blog.show',compact('post','comments','category','count'));
        }
        return back();
    }
    
    /**
     * Affichage de la page de creation d'un article
     *
     * @return \Illuminate\Http\Response
     */
    public function AddArticle()
    {
        if(Auth::check()){
          $categories=Categorie::all();
       return view('pages.blog.article.create',compact('categories'));
        }else{
            flashy()->error('Vous devez avoir un compte pour pourvoir effectuer cette action !');
        return back();
        }
    }

    /**
     * Creation d'un article par utilisateur.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ArticleFormRequest $request)
    {
       if($request->image!=''){
            $path = Storage::disk('posts')->put('', $request->file('image'));
            $paths="posts/April2018/".$path;
         }else{
            $paths="";
         }

      Post::create([
        'title'=>$request->title,
        'body'=>$request->contenu,
        'excerpt'=>$request->extrait,
        'slug'=> str_slug($request->title),
        'category_id'=>$request->categorie,
        'image'=>$paths,
        'status'=>'PENDING',
        'author_id'=>Auth::user()->id,
      ]);
      flashy('Article crée avec succès');
      return redirect()->route('blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateFormRequest $request)
    {
     dd('ok');
     // return view('pages.blog.article.edit',compact('article'));  
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Categorie::all();
        $article=Post::where('id',$id)->firstOrFail();
        return view('pages.blog.article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, $id)
    {
        
        
        if($request->image!=''){
            $path = Storage::disk('posts')->put('', $request->file('image'));
            $paths="posts/April2018/".$path;
         }else{
            $paths=$request->photo;
         }
       
       Post::whereId($id)->update([
        'title'=>$request->title,
        'body'=>$request->contenu,
        'excerpt'=>$request->extrait,
        'slug'=> str_slug($request->title),
        'category_id'=>$request->categorie,
        'image'=>$paths,
        'status'=>'PENDING',
        'author_id'=>Auth::user()->id,
        ]);
        flashy('Article mise a jour avec succès');
        return redirect('/User'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        
        Post::whereId($id)->delete();
        flashy('Article supprimé avec succès');
       return back();   
    }
}
