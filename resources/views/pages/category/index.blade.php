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
        

      <!-- Carousel -->
        <section class="carousel">
          <div class="reel">

            <article>
              <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Pulvinar sagittis congue</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Fermentum sagittis proin</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Varius magnis sollicitudin</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Pulvinar sagittis congue</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Fermentum sagittis proin</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Sed quis rhoncus placerat</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Ultrices urna sit lobortis</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

            <article>
              <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
              <header>
                <h3><a href="#">Varius magnis sollicitudin</a></h3>
              </header>
              <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
            </article>

          </div>
        </section>

      <!-- Main -->
    <div class="row">
          <div class="col-md-9">
           @foreach($posts as $post) 
                <div class="col-md-3">
                  <img src="{{voyager::image($post->image)}} " class="img-thumbnail" width="100%" align="left">
                </div>
                <div class="col-md-9">
                    <div class="post-preview">
                      <a href="{{url('/post/'.$post->id.'/'. trim(str_replace(' ', '-', $post->title))) }} ">
                           <h1 class="post-title">
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
            @endforeach
            </div>
                <div class="col-md-3">
                  <div class="list-group ">
                      <a href="#" style="background-color: #257525;color: #fff;" class="list-group-item disabled">
                        Les Categories
                      </a>
                      @foreach($category as $categorie)
                        <a href="category/{{$categorie->slug}}" class="list-group-item"><i class="fa fa-chevron-circle-right"></i> {{$categorie->name}} <span class="badge">14</span></a>
                      @endforeach
                    </div>
                      
                    </div>
                </div>
                {{$posts->links()}}
        </div>
          
          
      

@stop