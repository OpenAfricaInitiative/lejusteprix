@extends('layouts.base',['title'=>'Blog'])
@section('container')
<div class="jumbotron top">
      <div class="container-fuild">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="text-capitalize bigFont" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">{{setting('site.title')}} </h1>
                    <hr class="small">
                    <p class="intro" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">{{setting('site.description')}} </p>
                </div>
            </div>
        </div>
    </div>
<div class="container ">
  <!-- Banner -->
        

      <!-- Main -->
    <div class="row">
          <div class="col-md-9 ">
            <h2> Les + Recents articles</h2><br>
           @foreach($posts as $post) 
              <div class=""> 
                <div class="col-md-3">
                  <img src="{{voyager::image($post->image)}} " class="img-thumbnail" width="100%" align="left">
                </div>
                <div class="col-md-9 zoom ">
                    <div class="post-preview">
                        <a href="{{route('slug',[$post->id,$post->slug]) }}">
                           <h1 class="post-title">
                                {{$post->title}}
                            </h1>
                            <h3 class="post-subtitle">
                                {{substr($post->excerpt,0,40) }}
                            </h3>
                        </a>
                        <p class="post-meta">Posté par <a href="#">{{$post->author->name}}</a> le {{$post->created_at->format('d/m/Y')}}</p>
                     <hr>
                    </div>
                </div>
              </div>   
            @endforeach
             {{$posts->links()}}
            </div>
                <div class="col-md-3">
                  
                    <div class="form-group">
                      <a href="{{route('article')}} " class="btn-gr btn btn-color"><i class="fa fa-pencil"></i> Proposer un article </a>
                    </div>
                    
                  <div class="list-group ">
                      <a href="#" style="background-color: #257525;color: #fff;" class="list-group-item disabled">
                        Les Categories
                      </a>
                      @foreach($category as $categorie)
                        <a href="{{route('category',[$categorie->id,$categorie->slug])}} " class="border list-group-item" title="{{$categorie->name}}"><i class=" fa fa-chevron-circle-right" ></i> {{$categorie->name}} <span class="badge">{{$categorie->posts->count()}} </span></a>
                      @endforeach
                    </div>
                    
                    </div>
                </div>
                <div class="pull-right">
                  <a href="{{route('all')}}" class="btn-gr btn btn-color">Voir tous les articles &rarr;</a>
                </div>
        </div><br>
          
          
      

@stop