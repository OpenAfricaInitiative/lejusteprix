@extends('layouts.base',['title'=>"Profil"])
@section('alerte')
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalerte.css')}} ">
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
    
		<div class="col-md-4">
			<img src="{{Voyager::image(auth::user()->avatar)}}" class="img-thumbnail" width="250px">
		</div>
		<div class="col-md-8">
		<h2>{{auth::user()->name}}</h2">
		<h4 class="page-header"><i class="fa fa-clock-o"></i> Membre depuis {{auth::user()->created_at->format('D,d/m/Y')}} </h4>
		<div class="row">
			<div class="col-md-6">
				<p><i class="fa fa-user"></i> Nom utilisateur:</p>
				<p><i class="fa fa-envelope"></i>  Email :</p>
				<p><i class="fa fa-home"></i> Ville:</p>
				<p><i class="fa fa-phone"></i> Contact:</p>
			</div>
			<div class="col-md-6">
				<p> {{auth::user()->username}}</p>
				<p> {{auth::user()->email}}</p>
				<p>{{auth::user()->city}}</p>
				<p>{{auth::user()->contact}}</p>
		
			</div>
		</div>
		<a href="{{route('User.edit',auth::user()->id)}} "  class="btn btn-primary">Editer mon Profil</a>
		<a type="button" href="{{route('User.destroy',auth::user()->id)}}" data-toggle="tooltip" title="@lang('Attention!!! cette action est dangereuse pour votre compte ')" class="btn btn-danger">Supprimer Mon compte</a>
		
		</div>
	</div><br>
@endguest
</div><br>
@stop
@section('js')

<script type="text/javascript" src="{{asset('js/sweetalerte.js')}} "></script>
@stop
@section('script')
@include('layouts.partials.script')

@stop