@extends('layouts.user',['title'=>"Reinitialisation"])

<!-- Main Content -->
@section('container')
<h2><i class="fa fa-key"></i> Renouvellement du mot de pass</h2>
    @if (session('status'))
        <div class="alert alert-success"><span> </span>{{ session('status') }}</div>
    @endif
    <form role="form" method="POST" action="{{ url('/password/email') }}">
           
            {{ csrf_field() }}
            <div class="form-group form-group-default {{ $errors->has('email') ? 'has-error' : '' }}" id="emailGroup">
                <label class="control-label" for="email"><span class="text-danger">*</span>Adresse Email </label>
                <input type="email" name="email" id="email" placeholder="Votre Adresse Email" value="{{ old('email') }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-info btn-block ">
                <span class="signingin hidden"><span class="voyager-refresh"></span> Envoi de mail en cours...</span>
                <span class="signin"><i class="fa fa-key"></i> Reinitialisation</span>
            </button>
    </form>
    <div class="row">
        <p class="col-md-6 ">Pas encore membre <a href="{{route('register')}}"><i class="fa fa-pencil"></i> S'inscrire</a> </p>
        <p class="col-md-6 ">Déja inscris! <a href="{{route('login')}} "><i class="fa fa-user"></i> Se connecter</a></p>
    </div>
@endsection
@section('script')

<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
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

</script>
@stop
