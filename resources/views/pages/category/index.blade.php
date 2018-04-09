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
    <div class="row">
          @foreach($posts as $post)
               <div class=" row ">
                <div class="col-md-2">
                  <img src="{{voyager::image($post->image)}} " class="img-thumbnail" width="100%" align="left">
                </div>
                <div class="col-md-10">
                  
                
                <div class="post-preview">
                  <a href="{{url('/post/'.$post->id.'/'. trim(str_replace(' ', '-', $post->title))) }} ">
{{--                     <a href="post/{{$post->slug}} ">
 --}}                        <h1 class="post-title">
                            {{$post->title}}
                        </h1>
                        <h3 class="post-subtitle">
                            {{$post->excerpt}}
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
  </div>
@stop