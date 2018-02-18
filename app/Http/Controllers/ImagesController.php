<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\User;
use App\Repositories\ImageRepository;
use Illuminate\Http\Request;
class ImagesController extends Controller
{
    
protected $repository;

public function __construct(ImageRepository $repository){

    $this->repository= $repository;
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


public function user(User $user)
{   
    $images = $this->repository->getImagesForUser($user->id);
    return view('welcome', compact('user', 'images'));
}

public function category($slug)
{
    $categorie = Categorie::whereSlug($slug)->firstorFail();
    $images = $this->repository->getImagesForCategory($slug);
    return view('welcome', compact('categorie', 'images'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('pages.images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    $request->validate([
        'image' => 'required|image|max:2000',
        'category_id' => 'required|exists:categories,id',
        'description' => 'nullable|string|max:255',
    ]);
        $this->repository->store($request);
        flashy('Image enregistrée avec succès');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $this->authorize('delete', $image);
        $image->delete();
        flashy('Suppression effectuée avec succès');
        return back();
    }
}
