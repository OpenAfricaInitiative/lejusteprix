<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
    
    	public function store(ContactFormRequest $request)
    {
        $comment=strip_tags($request->message);
        if($comment=!""){
            $c= new Comment;
             if(Auth::check()){
                 $c->user_id= Auth::user()->id;
           }
            $c->name=$request->name;
            $c->email=$request->email;
            $c->content=$request->message;
            $c->post_id=$request->post_id;
            $c->save();
            flashy('Commentaire ajouté avec Succès');

        }

            return back();
    }
    
}
