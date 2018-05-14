@extends('layouts.user',['title'=>"Nouveau Mot de passe"])

@section('container')
                 @if (session('status'))
                    <div class="alert-box success"><span>success : </span>{{ session('status') }}</div>
                @endif
                
                <form method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group form-group-default row col-md-12" id="emailGroup">
                            <label for="email" class=" label-control "> Adresse Email</label>
                                <input id="email" type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-group-default row col-md-12" id="passwordGroup">
                            <label for="password" class="label-control ">Mot de passe </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group form-group-default row col-md-12" id="passconfimGroup">
                            <label for="password-confirm" class="label-control">Confirmation </label>
                            
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block ">
                                <span class="signingin hidden"><span class="voyager-refresh"></span> Reinitialisation en cours...</span>
                                <span class="signin"><i class="fa fa-key"></i> Nouveau mot de passe</span>
                            </button>
                           
                        </div>
                </form>
@endsection
@section('script')
<script>
    var btn = document.querySelector('button[type="submit"]');
    var form = document.forms[0];
    var email = document.querySelector('[name="email"]');
    var password = document.querySelector('[name="password"]');
    var passconfirm = document.querySelector('[name="password_confirmation"]');
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

passconfirm.addEventListener('focusin', function(e){
        document.getElementById('passconfimGroup').classList.add("focused");
    });
    passconfirm.addEventListener('focusout', function(e){
       document.getElementById('passconfimGroup').classList.remove("focused");
    });
</script>

@stop