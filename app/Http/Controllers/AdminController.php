<?php

namespace App\Http\Controllers;

use App\Repositories\ImageRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
      protected $repository;

    public function __construct(ImageRepository $repository)
    {
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $orphans = $this->repository->getOrphans ();
    $countOrphans = count($orphans);
    return view('pages.maintenance.index', compact ('orphans', 'countOrphans'));
    }

  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $this->repository->destroyOrphans ();
        flashy('Suppression effectuée avec succès');
        return response()->json();
    }
}
