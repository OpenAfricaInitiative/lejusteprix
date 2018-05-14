@extends('layouts.user',['title'=>'Connexion'])
@section('container')
    @if (session('confirmation-success'))
                        <div class="alert alert-success">
                            {{ session('confirmation-success') }}
                        </div>
                    @endif
                    @if (session('confirmation-danger'))
                        <div class="alert alert-danger">
                            {!! session('confirmation-danger') !!}
                        </div>
    @endif
    <h2><i class="fa fa-user"></i> Connectez-vous ci-dessous:</h2>

     <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}
        <div class="form-group form-group-default" id="emailGroup">
            <label>Adresse Email ou Nom Utilisateur</label>
            <div class="controls">
                <input type="text" name="log" id="email" value="{{ old('log') }}" placeholder="Adresse Email ou Nom Utilisateur" class="form-control" required>
            </div>
        </div>

        <div class="form-group form-group-default" id="passwordGroup">
            <label> Mot de Passe</label>
            <div class="controls">
                <input type="password" name="password" placeholder="Mot de passe" class="form-control" required>
            </div>
        </div>
        <div class="form-group">
            <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : ''}}>
            <label for="remember">Se Souvenir de moi</label>
        </div> 
        
            <button type="submit" class="btn btn-block login-button">
                <span class="signingin hidden"><span class="voyager-refresh"></span> {{ __('voyager.login.loggingin') }}...</span>
                <span class="signin">{{ __('voyager.generic.login') }}</span>
            </button>
       
    </form><br><br><br>
    <div class="row">
        <p class="col-md-6 ">Pas encore membre <a href="{{route('register')}}"> <i class="fa fa-pencil"></i> s'inscrire</a> </p>
        <p class="col-md-6 "><a href="{{route('password.request')}} "> <i class="fa fa-key"></i> Mot de passe oublié ?</a></p>
    </div>
@stop
@section('script')
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="log"]');
    var password = document.querySelector('[name="password"]');
    btn.addEventListener('click', function(ev){
        if (form.checkValidity()) {
            btn.querySelector('.signingin').className = 'signingin';
            btn.querySelector('.signin').className = 'signin hidden';
        } else {
            ev.preventDefault();
        }
    });
    email.focus();
    document.getElementById('emailGroup').classList.add("focused");
    
    // Focus events for email and password fields
    email.addEventListener('focusin', function(e){
        document.getElementById('emailGroup').classList.add("focused");
    });
    email.addEventListener('focusout', function(e){
       document.getElementById('emailGroup').classList.remove("focused");
    });

    password.addEventListener('focusin', function(e){
        document.getElementById('passwordGroup').classList.add("focused");
    });
    password.addEventListener('focusout', function(e){
       document.getElementById('passwordGroup').classList.remove("focused");
    });

</script>

@stop


