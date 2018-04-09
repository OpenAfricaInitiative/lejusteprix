@extends('layouts.base',['title'=>"Inscription"])


@section('container')
    <div class="container-fluid bg top">
            <div class="row">
            <div class=" thumbnail register col-md-offset-3 col-md-6 ">
                <div class="text-center">
                    <h1 class="text-primary" ><i class="fa fa-user size"></i>Inscription</h1>
                    <hr>
                </div>
                
                        <form method="POST" action="{{url('/inscription')}}">
                            {!! csrf_field() !!}
                            <div class="row">
                                <div class=" col-md-6">
                                   <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                        <label class="control-label" for="name"><span class="text-danger ">*</span> Nom Complet</label>
                                        <input type="text" name="name" placeholder="Nom Complet" value="{{ old('name') }}" id="name" class="form-control">
                                        {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                        <label class="control-label" for="email"><span class="text-danger">*</span>Adresse Email </label>
                                        <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                                        {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class=" col-md-6">
                                   <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                                        <label class="control-label" for="username"><span class="text-danger ">*</span> Nom utilisateur</label>
                                        <input type="text" name="username" placeholder="Nom utilisateur" value="{{ old('username') }}" id="username" class="form-control">
                                        {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                   <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <label class="control-label" for="Ville"><span class="text-danger">*</span>Ville de Residence </label>
                                        <input type="text" name="city" id="Ville" placeholder="ex: Abigjan" value="{{ old('city') }}" class="form-control">
                                        {!! $errors->first('city', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                        <label class="control-label" for="password"><span class="text-danger">*</span>Mot de passe </label>
                                        <input type="password" name="password" placeholder="Mot de passe" id="password" class="form-control">
                                        {!! $errors->first('password', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                        <label class="control-label" for="password_confirmation"><span class="text-danger">*</span>Confirmation du mot de passe</label>
                                        <input type="password" name="password_confirmation" placeholder=" Confirmation mot de passe" id="password_confirmation" class="form-control">
                                        {!! $errors->first('password_confirmation', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block"><i class="fa fa-send"></i> S'inscrire</button>
                            </div>
                        </form>
                        <p class="color">Vous avez déjà un compte ? <a href="{{ route('connexion') }}" class="btn btn-primary">Se connecter</a></p>
                    </div>
</div>
   </div>
@endsection
