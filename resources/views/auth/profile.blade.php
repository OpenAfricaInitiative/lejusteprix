@extends('layouts.base',['title'=>"Profil"])

@section('container')
	<div class="container top row">
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
		<a href="{{route('User.edit',auth::user()->id)}} " class="btn btn-primary">Editer mon Profil</a>
			<a href="#" class="btn btn-danger">Supprimer Mon compte</a>
		
		</div>
	</div><br>




@stop