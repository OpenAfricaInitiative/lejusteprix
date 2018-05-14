@extends('layouts.base',['title'=>$category->name ])
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
<div class="container">
@if($Posts->count())
  <h1><span class="badge size">{{$Posts->count()}} </span> Articles dans la categorie <strong>{{$category->name}}</strong> </h1>
@else
  <h1>la categorie <strong>{{$category->name}}</strong> n'a aucun article pour l'instant </h1>
  <div class="text-center">
      <a href="{{route('blog')}}" class="btn btn-color">Voir tous les articles &rarr;</a>
  </div><br>
@endif
    <div class="row" style="display: flex;">
   
    <div class="row">
       @foreach($Posts as $Post)
      <div class="col-sm-6 col-md-4" >
        <div class="blog thumbnail" >
          <a href="{{route('slug',[$Post->id,$Post->slug]) }}">
            <img src="{{voyager::image($Post->image)}} " alt="...">
          </a>
          <div class="caption">
            <a href="{{route('slug',[$Post->id,$Post->slug]) }}">
              <h3 class="text-center">{{$category->name}}| {{$Post->title}} </h3>
            </a>
            <p>{{substr($Post->excerpt,0,100) }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
 </div>
</div>
<div class="text-center">
  <a href="{{route('blog')}}" class="btn-gr btn btn-color"><i class="fa fa-arrow-left"></i> Retour sur les articles récents</a>
</div><br>

@stop