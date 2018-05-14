@extends('layouts.user',['title'=>"Inscription"])
@section('container')
    <h2><i class="fa fa-pencil"></i>Inscription</h2>
        @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @endif
    <form method="POST" action="{{route('register')}}">
        {!! csrf_field() !!}
            <div class=" col-md-12">
                <div class="form-group form-group-default  {{ $errors->has('name') ? 'has-error' : '' }}" id="nameGroup">
                    <label class="control-label" for="name"><span class="text-danger ">*</span> Nom Complet</label>
                    <input type="text" name="name" placeholder="Nom Complet" value="{{ old('name') }}" id="name" class="form-control">
                    {!! $errors->first('name', '<span class="text-danger">:message</span>') !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form-group-default {{ $errors->has('email') ? 'has-error' : '' }} " id="emailGroup">
                    <label class="control-label" for="email"><span class="text-danger">*</span>Adresse Email </label>
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                    {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
                </div>
            </div>
            <div class=" col-md-12">
                <div class="form-group form-group-default {{ $errors->has('username') ? 'has-error' : '' }} " id="usernameGroup">
                    <label class="control-label" for="username"><span class="text-danger ">*</span> Nom utilisateur</label>
                    <input type="text" name="username" placeholder="Nom utilisateur" value="{{ old('username') }}" id="username" class="form-control">
                    {!! $errors->first('username', '<span class="text-danger">:message</span>') !!}
                </div>
            </div>      
            <div class="col-md-12">
                    <div class="form-group form-group-default {{ $errors->has('password') ? 'has-error' : '' }}" id="passwordGroup">
                        <label class="control-label" for="password"><span class="text-danger">*</span>Mot de passe </label>
                        <input type="password" name="password" placeholder="Mot de passe" id="password" class="form-control">
                        {!! $errors->first('password', '<span class="text-danger">:message</span>') !!}
                    </div>
            </div>
            <button type="submit" class="btn btn-success btn-block ">
                <span class="signingin hidden"><span class="voyager-refresh"></span> Enregistrement en cours...</span>
                <span class="signin"><i class="fa fa-send"></i> s'incrire</span>
            </button>
    </form>
<p class="color">Vous avez déjà un compte ? <a href="{{ route('login') }}" class="btn btn-primary">Se connecter</a></p>

@endsection

@section('script')
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var nom = document.querySelector('[name="name"]');
    var email = document.querySelector('[name="email"]');
    var username = document.querySelector('[name="username"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    nom.focus();
    document.getElementById('nameGroup').classList.add("focused");
    
    // Focus events for email and password fields
       nom.addEventListener('focusin', function(e){
        document.getElementById('nameGroup').classList.add("focused");
    });
    nom.addEventListener('focusout', function(e){
       document.getElementById('nameGroup').classList.remove("focused");
    });

    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

   username.addEventListener('focusin', function(e){
        document.getElementById('usernameGroup').classList.add("focused");
    });
    username.addEventListener('focusout', function(e){
       document.getElementById('usernameGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>
@stop
{{-- <div class="col-md-12">
                                    <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                                        <label class="control-label" for="Ville"><span class="text-danger">*</span>Ville de Residence </label>
                                        <input type="text" name="city" id="Ville" placeholder="ex: Abigjan" value="{{ old('city') }}" class="form-control">
                                        {!! $errors->first('city', '<span class="text-danger">:message</span>') !!}
                                    </div>
                                </div> --}}