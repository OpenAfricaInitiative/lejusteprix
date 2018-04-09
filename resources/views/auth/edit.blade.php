	@extends('layouts.base',['title'=>"Profil"])

@section('container')



	<div class="container top">
		<div class="row">
		<form method="POST" action="{{route('User.update',auth::user()->id)}}" enctype="multipart/form-data">
			<div class="col-md-8">
				<div class="panel panel-default">
				  <div class="panel-heading">Details Utilisateurs</div>
				  <div class="panel-body">
				  	<div class="row">
                            {!! csrf_field() !!}
                            {{ method_field('PUT') }}
                            <div class="row">
                                <div class=" col-md-6">
                                   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label class="control-label" for="name"> Nom Complet</label>
                                        <input type="text" name="name" placeholder="Nom Complet" value="{{ auth::user()->name }}" id="name" class="form-control">
                                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label class="control-label" for="email">Adresse Email </label>
                                        <input type="email" name="email" id="email" placeholder="Email" value="{{ auth::user()->email }}" class="form-control">
                                        {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-md-6">
                                   <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                        <label class="control-label" for="username"> Nom utilisateur</label>
                                        <input type="text" name="username" placeholder="Nom utilisateur" value="{{ auth::user()->username }}" id="username" class="form-control">
                                        {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <label class="control-label" for="Ville"> Ville de Residence </label>
                                        <input type="text" name="city" id="Ville" placeholder="ex: Abigjan" value="{{ auth::user()->city }}" class="form-control">
                                        {!! $errors->first('city', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('telephone') ? 'has-error' : '' }}">
                                        <label class="control-label" for="password">Téléphone </label>
                                        <input type="text" name="telephone" placeholder="Téléphone"  value="{{auth::user()->contact }}" id="telephone" class="form-control">
                                        {!! $errors->first('telephone', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('portable') ? 'has-error' : '' }}">
                                        <label class="control-label" for="portable">Portable</label>
                                        <input type="password" name="portable" placeholder="Portable" id="password" class="form-control">
                                        {!! $errors->first('portable', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block"><i class="fa fa-refresh"></i> Mettre a jour</button>
                            </div>
				  	</div>
				  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
				  <div class="panel-heading">Avatar</div>
				  <div class="panel-body">
					<img src="{{Voyager::image(auth::user()->avatar)}}" width="250px" class="img-thumbnail">
				    <input type="file" name="image">
                    <input type="hidden" name="avatar" value="{{auth::user()->avatar}}">
				  </div>
				</div>
			</div>
		</form>
	</div>
</div>
@stop