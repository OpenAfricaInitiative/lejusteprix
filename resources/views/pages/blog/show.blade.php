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
                    <p class="post-meta"> <a href="#">                            
                      <img width="50" height="50" class="img-circle" src="{{voyager::image($post->author->avatar)}}" alt="">
                      Par {{$post->author->name}}</a> | <i class="fa fa-clock-o"></i> {{ ucfirst (utf8_encode ($post->created_at->formatLocalized('%A %d %B %Y '))) }} à {{$post->created_at->format('H:i:s') }} </p>
                 <p> Dernière Mise à jour le {{ ucfirst (utf8_encode ($post->updated_at->formatLocalized('%A %d %B %Y '))) }} à {{$post->updated_at->format('H:i:s') }} </p>
                 <hr>
            </div><br>
            <div class="row">
                <div class="col-md-9" style="text-align: justify;">
                    {!!$post->body!!}
                    <p class="eloigner"></p>
                    <div class="share row">
                      <button class="share_fb col-md-3 btn btn-primary"><i class="fa fa-facebook"></i> Partager sur Facebook</button>
                      <button class="share_tw col-md-3 btn btn-info"><i class="fa fa-twitter"></i> Partager sur twitter</button>
                      <button class="share_gp col-md-3 btn btn-danger"><i class="fa fa-google-plus"></i> Partager sur google</button>
                      <button class="share_lk col-md-3 btn btn-primary"><i class="fa fa-linkedin"></i> Partager sur linkedin</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <a href="{{route('article')}} " class="btn-gr btn btn-color"><i class="fa fa-pencil"></i> Proposer un article </a>
                    </div>
                    {{-- <div class=" blog thumbnail ">
                        <div class="caption">
                          <h4 class=""><i class="fa fa-tags size"></i> Tags</h4>
                        </div>
                          <p class="list-group-item-text "> {{$post->meta_keywords}} </p>
                    </div> --}}
                     <div class=" blog thumbnail ">
                        <div class="caption">
                          <h4 class=""><i class="fa fa-comments size"></i> Les commentaires</h4>
                        </div>
                            @if($count==1 || $count==0)
                                <h3>Pas de Commentaire </h3>
                                <a href="#comments"><i class="fa fa-comment-o"></i> Soyer le premier à commenter</a>
                             @else
                            
                             <h3>{{$count}} Commentaires</h3>
                              <a href="#comments"><i class="fa fa-comment-o"></i> Donner votre avis sur cet article</a>
                             @endif
                       </div>
                       <div class="list-group ">
                      <a href="#" style="background-color: #257525;color: #fff;" class="list-group-item disabled">
                        Les Categories
                      </a>
                      @foreach($category as $categorie)
                        <a href="{{route('category',[$categorie->id,$categorie->slug] )}} " class="border list-group-item" title="{{$categorie->name}}"><i class=" fa fa-chevron-circle-right" ></i> {{$categorie->name}} <span class="badge">{{$categorie->posts->count()}} </span></a>
                      @endforeach
                    </div>
                    
                    </div>
                </div>
                
                <hr>
                <div class="pull-right">
                  <a href="{{route('all')}}" class="btn-gr btn btn-color">Voir tous les articles &rarr;</a>
                </div>
          </div>
      </div>
 </div><br>
                    
                <!-- comments
    ================================================== -->
    <div class="comments-wrap">

        <div id="comments" class="row">
            <div class="container">
               <h3>{{$count}} {{ trans_choice('Commentaire|commentaires',$count) }}</h3>
               <!-- commentlist -->
               <h3>Laisser votre commentaires</h3>
              <p>Votre adresse de messagerie ne sera pas publiée. Les champs obligatoires sont indiqués avec *</p>
              <p>Creér <strong><a href="{{route('register')}} ">un compte</a></strong> pour ne plus à rensigner votre nom et Adresse Email a chaque commentaire. De plus vous pourriez modifier ou supprimer votre commentaire grace à <strong><a href="{{route('register')}}">un compte</a>.</strong> </p>
                <div class="row">
         <form action="{{url("/addComment")}}" method="POST">
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
            <div class="infinite-scroll">
               <ol class="commentlist">
                
              @foreach($comments as $comment)

                    <li class="col-md-offset-1 comment">
                  @if($comment->user_id =='')
                        <div class="comment__avatar">
                            <img width="50" height="50" class="avatar" src="{{asset('images/avatar1.png')}}" alt="">
                        </div>
                  @elseif($comment->user_id =='' && $comment->content !='')
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
{{--                                     <time class="comment__time">{{$comment->created_at->format('D, d M Y @ H:i')}}</time>
 --}}                                    <time class="comment-time" datetime="{{ $comment->created_at }}">{{ ucfirst (utf8_encode ($comment->created_at->formatLocalized('%A %d %B %Y '))) }} @ {{$comment->created_at->format('H:i:s') }} </time>

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
                          {{$comments->links("vendor.pagination.bootstrap-4") }}
                    </li>
              </ol>

           </div>
                    <h3 id="msg" class="text-center" > </h3>

            </div>  
              
            </div> 
      
          </div>  
              
       </div>
    

     
@stop
@section('script')
@include('layouts.partials.scroll');

<script type="text/javascript">

  var popupCenter= function(url,title,width,height){
    var popupWidth= width || 640;
    var popupHeight= height || 320;
    var left= window.screenLeft || window.screenX;
    var top= window.screenTop || window.screenY;
    var windowWidth= window.innerWidth || document.documentElement.clientWidth;
    var windowHeight= window.innerHeight || document.documentElement.client.Height;
  
    var popupLeft = left + windowWidth /2 - popupWidth/2;
    var popupTop = top + windowHeight /2 - popupHeight/2;
window.open(url,title,'scrollbars=yes,width='+popupWidth+',height='+popupHeight+',top='+popupTop+',left='+popupLeft)
  };
  // Partage sur facebook
document.querySelector('.share_fb').addEventListener('click',function(e){
  e.preventDefault();
  var url="http://www.lejusteprix.ci";
  var shareUrl= 'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url);
  
  popupCenter(shareUrl,'Partager sur Facebook');
});
// Partage sur Twitter https://twitter.com/intent/tweet

document.querySelector('.share_tw').addEventListener('click',function(e){
  e.preventDefault();
  var url= document.location.href;
  var shareUrl= 'https://twitter.com/intent/tweet?text='+encodeURIComponent(document.title)+
  "&via=Le Juste Prix"+
  "&url="+ encodeURIComponent(url);
  popupCenter(shareUrl,'Partager sur Twitter');
});

// Partage sur google plus


document.querySelector('.share_gp').addEventListener('click',function(e){
  e.preventDefault();
  var url="http://www.lejusteprix.ci";
  var shareUrl= 'https://plus.google.com/share?url='+ encodeURIComponent(url);
  popupCenter(shareUrl,'Partager sur Google +');
});

//Partage sur Linkedin

document.querySelector('.share_lk').addEventListener('click',function(e){
  e.preventDefault();
  var url= document.location.href;
  var shareUrl= 'https://www.linkedin.com/shareArticle?url='+ encodeURIComponent(url);
  popupCenter(shareUrl,'Partager sur Linkedin');
});
</script>


@stop

