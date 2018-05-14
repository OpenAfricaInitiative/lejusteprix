@extends('layouts.base',['title'=>"Tous les articles" ])
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
    <div class="row infinite-scroll">
        <div class="row">
           @foreach($posts as $Post)
          <div class="col-sm-6 col-md-4" >
            <div class="blog thumbnail" >
              <a href="{{route('slug',[$Post->id,$Post->slug]) }}">
                <img src="{{voyager::image($Post->image)}} " alt="...">
              </a>
              <div class="caption">
                <a href="{{route('slug',[$Post->id,$Post->slug]) }}">
                  <h3 class="text-center">{{$Post->category->name}}| {{$Post->title}} </h3>
                </a>
                <p>{{substr($Post->excerpt,0,100) }}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{$posts->links("vendor.pagination.bootstrap-4") }}
    </div>
    <div class="text-center">
         <a href="{{route('blog')}}" class="btn-gr btn btn-color"> <i class="fa fa-arrow-left"></i> Retour sur les articles récents</a>
    </div><br>
</div>

@stop
@section('script')
    @include('layouts.partials.scroll');
@stop