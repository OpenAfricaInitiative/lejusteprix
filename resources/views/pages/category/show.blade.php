@extends('layouts.base',['title'=>'Blog'])
@section('container')
     <div class="container-fluid">
        <div class="row">
           	<img src="{{voyager::image($post->image)}} " height="400px" width="100%">
        </div>
    </div>
<div class="container">
    <div class="row">
        <div class=" col-md-12 ">
            <div class="post-preview text-center">
                <h1 class="post-title">
                  {{$post->title}}
                </h1>
                    <p class="post-meta"><i class="fa fa-user"></i> <a href="#">{{$post->author->name}}</a> | <i class="fa fa-clock-o"></i> {{$post->created_at->format('d/m/Y')}}</p>
                 <hr>
                </div><br>
                {!!$post->body!!} 
                <hr>
                <div class="pull-right">
                  <a href="{{route('blog')}}" class="btn btn-color">Voir tous les articles &rarr;</a>
                </div>
              </div>
      </div>
 </div><br>
                    
                <!-- comments
    ================================================== -->
    <div class="comments-wrap">

        <div id="comments" class="row">
            <div class="container">
                @if($comments->count()==1)
                    <h3>{{$comments->count()}} Commentaire </h3>
               @else
               <h3>{{$comments->count()}} Commentaires</h3>
               @endif
               <!-- commentlist -->
               <h3>Laisser votre commentaires</h3>
              <p>Votre adresse de messagerie ne sera pas publiée. Les champs obligatoires sont indiqués avec *</p>
              <p>Creér <strong><a href="{{route('inscription')}} ">un compte</a></strong> pour ne plus à rensigner votre nom et Adresse Email a chaque commentaire. De plus vous pourriez modifier ou supprimer votre commentaire grace à <strong><a href="{{route('inscription')}}">un compte</a>.</strong> </p>
                <div class="row">
         <form action="{{url("/addComment")}} " method="POST">
            {{csrf_field()}}
                 @guest 
                 <div class="row">  
                    <div class=" col-md-6 form-group floating-label-form-group controls {{$errors->has('name') ?'has-error':'' }}">
                          <label class="label-control" for="name">Pseudo ou Nom complet<span class="text-danger">*</span></label>
                          <input type="text" id="name" name="name" class="form-control" placeholder="Pseudo ou Nom"  value="{{old('name')}}" >
                          {!! $errors->first('name','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                          <p class="help-block text-error"></p>
                    </div>
                    <div class=" col-md-6 form-group floating-label-form-group controls {{$errors->has('email') ?'has-error':'' }}">
                            <label>Adresse Email<span class="text-danger">*</span></label>
                                <input name="email" type="email" id="email" class="form-control" placeholder="Email" value="{{old('email')}}">
                                 {!! $errors->first('email','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                              <p class="help-block text-error"></p>
                    </div>
                  </div>
                  @endguest  
                    @if(auth::check())
                    <input name="name" type="hidden" id="hidden"  value="{{auth::user()->username}}">
                    <input name="email" type="hidden" id="hidden" value="{{auth::user()->email}}">
                    @endif
                    <div id="formcreate" class="row form-group floating-label-form-group controls {{$errors->has('message') ?'has-error':'' }}">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Message<span class="text-danger">*</span></label>
                            <textarea name="message"  rows="4" placeholder="Message"  class="form-control">{{old('message') }}</textarea>
                         {!! $errors->first('message','<p class="help-block " style="font-size:17px"> :message</p>') !!}
                          <p class="help-block text-error"></p>
                        </div>
                        <input type="hidden" name="post_id" value="{{$post->id}} ">
                        
                    </div>
                    <div class="form-group">
                        <button class="btn btn-color btn-block"> Envoyer</button>
                    </div>
               </form>

               <ol class="commentlist">
              @foreach($comments as $comment)

                    <li class="col-md-offset-1 comment">
                  @if($comment->user_id =='')
                        <div class="comment__avatar">
                            <img width="50" height="50" class="avatar" src="{{asset('images/avatar1.png')}}" alt="">
                        </div>
                  @else

                      <div class="comment__avatar">
                            <img width="50" height="50" class="avatar" src="{{voyager::image($comment->user->avatar)}}" alt="">
                        </div>
                  @endif
                        <div class="comment__content">

                            <div class="comment__info">
                                <cite>{{$comment->name}}</cite>

                                <div class="comment__meta">
                                    <time class="comment__time">{{$comment->created_at->format('D, d M Y @ H:i')}}</time>
                                    <span class="sep">|</span>
                                </div>
                            </div>
                 {{--              @if(auth::check() && auth::user()->username == $comment->name) 
                    <a id="deletecomment{!! $comment->id !!}" href="#" class="deletecomment"><span class="fa fa-fw fa-trash pull-right" data-toggle="tooltip" data-placement="left" title="Supprimer le commentaire"></span></a>
                    <a id="comment{!! $comment->id !!}" href="#" class="editcomment"><span class="fa fa-fw fa-pencil pull-right" data-toggle="tooltip" data-placement="left" title="Modifier le commentaire"></span></a>
                        @endif --}}
                            <div id="contenu{{ $comment->id }}" class="comment__text">
                            <p>{{$comment->content}} </p>
                            </div>
                        </div>
                  @endforeach

                    </li>
                  </ol>
            </div>  
              
            </div> 
      
          </div>  
              
       </div>
    

     
@stop
