@extends('layouts.base',['title'=>"Mot de passe"])

@section('container')
    <div class="container-fluid bg top">
        <div class="row">
            <div class=" thumbnail login col-md-offset-3 col-md-6 ">
                 @if (session('status'))
                    <div class="alert-box success"><span>success : </span>{{ session('status') }}</div>
                @endif
                <div class="text-center">
                    <h1 class="text-primary" ><i class="fa fa-pencil size"></i>Réinitialisation</h1>
                    <hr>
                </div>
                <form method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group row">
                            <label for="email" class="col-md-3 label-control "> Adresse Email</label>
                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 label-control ">Mot de passe </label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-3 label-control">Confirmation </label>
                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong class="text-danger">{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">
                                    <i class="fa fa-key"></i> Renouvellement
                            </button>
                           
                        </div>
                </form>
            </div>
        </div>
    </div>
@endsection
