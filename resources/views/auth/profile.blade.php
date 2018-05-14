@extends('layouts.base',['title'=>"Profil"])
@section('alerte')
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalerte.css')}} ">
<style>
        .user-email {
            font-size: .85rem;
            margin-bottom: 1.5em;
        }
    </style>
@stop
@section('container')
	<div class="container top ">
   @guest
            <div class="row col-md-12 text-center">
                <img src="{{asset('profile.png')}}" width="250px">
                <h2>Désolé ce compte a été supprimer veuillez en creér un autre </h2><br>
                <div>
                	<a href="{{route('home')}} " class="btn btn-primary">Aller à l'Accueil</a>
                    <a href="{{route('inscription')}}" class="btn btn-success">Creer un compte</a>
            	</div>
             </div>
                    
    @else
<div class="row">
	<div style="background-size:cover; background-image: url({{ Voyager::image( Voyager::setting('admin.bg_image'), config('voyager.assets_path') . '/images/bg.jpg') }}); background-position: center center;position:absolute; top:0; left:0; width:100%; height:300px;"></div>
    <div style="height:100px; display:block; width:100%"></div>
    <div style="position:relative; z-index:9;">
        <img src="@if( !filter_var(Auth::user()->avatar, FILTER_VALIDATE_URL)){{ Voyager::image( Auth::user()->avatar ) }}@else{{ Auth::user()->avatar }}@endif"
             class="avatar"
             style="border-radius:50%; width:150px; height:150px; border:5px solid #fff;"
             alt="{{ Auth::user()->name }} avatar" align="left">
        <h2 class="size" style="color: #fff;text-transform: uppercase;">{{ Auth::user()->username }}</h2>
    </div>
</div>
		<div class="row">
			<div class="col-md-4">
				<div class="list-group ">
	                 <a href="#" style="background-color: #257525;color: #fff;" class="list-group-item disabled">
	                        Mes actions sur le blog 
	                 </a>
	                <a href="#" class="border list-group-item" title="Articles"><i class=" fa fa-file-o" ></i> Articles <span class="badge danger">{{$count}} </span></a>
	                <a href="#" class="border list-group-item" title="Commenatires"><i class=" fa fa-comments-o" ></i> Commenatires <span class="badge danger">{{$comments->count()}} </span></a>
	                <a href="#" class="border list-group-item" title="Formulaire de contact"><i class=" fa fa-envelope-o" ></i> Formulaire de contact <span class="danger badge">{{$messages->count()}} </span></a>
	         </div>
			</div>
		<div class="col-md-8">
			<h2>{{auth::user()->name}}</h2">
			<h4 class="page-header"><i class="fa fa-clock-o"></i> Membre depuis {{ ucfirst (utf8_encode (auth::user()->created_at->formatLocalized('%A %d %B %Y '))) }} à {{auth::user()->created_at->format('H:i:s') }} </h4>
				<div class="row">
				<div class="col-md-12  well">
					<p><i class="fa fa-user btn-outline-rounded"></i> <strong> Nom utilisateur: </strong>{{auth::user()->username}}</p>
					<p><i class="fa fa-envelope btn-outline-rounded"></i> <strong> Email: </strong>{{auth::user()->email}}</p>
					<p><i class="fa fa-home btn-outline-rounded"></i> <strong> Ville: </strong>{{auth::user()->city}}</p>
					<p><i class="fa fa-phone btn-outline-rounded"></i> <strong> Contact: </strong>{{auth::user()->contact}}</p>
				</div>
				
			</div><br>
			<a href="{{route('User.edit',auth::user()->id)}} "  class="btn-gr btn-primary">Editer mon Profil</a>
			<a id="compte" type="button" href="{{route('User.destroy',auth::user()->id)}}" data-toggle="tooltip" title="@lang('Attention!!! cette action est dangereuse pour votre compte ')" class="btn-gr btn-danger ">Supprimer Mon compte</a>
			
		</div>
	</div><br>
	<div class="row">
		<div class="row">
			<div class="col-md-8">
				<h2><i class="fa fa-list-alt"></i> La liste de mes derniers articles </h2>
			</div>
			<div class="col-md-4">
				<a href="{{route('article')}} " class="btn-gr btn btn-color"><i class="fa fa-pencil"></i> Proposer un nouvel article </a>
			</div>
		</div>
		
	<div class="infinite-scroll">
		<div class="panel panel-success table-responsive ">
		<table class="table table-condensed table-responsive ">
			<tr>
				<th>Titre</th>
				<th>Status</th>
				<th>Categorie</th>
				<th>Créé</th>
				<th>Image à la une</th>
				<th>Action</th>
			</tr>
	
           	@foreach($articles as $article)
           	<tr class="text-center">
                    <td>{{$article->title}} </td>
                    <td>
                    	@if($article->status=="PUBLISHED")
                    		Publié 
                    	@elseif($article->status=="PENDING")
							En attente
                    	@else
                    		{{$article->title}}
                    	@endif
                    </td>
                    <td>{{$article->category->name}}</td>
                    <td>{{ ucfirst (utf8_encode ($article->created_at->formatLocalized('%A %d %B %Y '))) }} à {{$article->created_at->format('H:i:s') }} </td>
                    <td><img src="{{Voyager::image($article->image)}}" width="80px"> </td>
                    <td>
                    	<a class="btn btn-primary" href="{{route('edit', $article->id)}}"><i class="fa fa-edit"></i>Editer</a>
                    	<a class="btn btn-default" href="{{route('slug',[$article->id,$article->slug])}}"><i class="fa fa-eye"></i>Voir</a>
                    	<form  style="display: inline-block;" method="POST" action="{{route('destroy',$article->id) }}" onsubmit=" return confirm('Voulez-vous supprimer definitivement cet article  ?') ">
							{{ method_field("DELETE") }}
							{{ csrf_field() }}   
					        <button type="submit" class="btn btn-danger"  data-toggle="tooltip" title="Attention!!! cette action est dangereuse, vous perdrez l'article definitivement !" ><i class="fa fa-trash"></i>Supprimer</button>
						</form>
                    </td>
            	@endforeach
            </tr>

	</table>
	{{$articles->links('vendor.pagination.bootstrap-4')}}
	</div>
</div>
	   <h3 id="msg" class="text-center" > </h3>
	</div>
@endguest
</div><br>
@stop
@section('js')
@include('layouts.partials.scroll');

<script type="text/javascript" src="{{asset('js/sweetalerte.js')}} "></script>
@stop
@section('script')

@include('layouts.partials.script')

@stop