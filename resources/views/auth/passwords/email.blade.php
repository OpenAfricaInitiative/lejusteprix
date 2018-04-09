@extends('layouts.base',['title'=>"Reinitialisation"])

<!-- Main Content -->
@section('container')
    <div class="container-fluid bg top">
    <div class="row">
    <form role="form" method="POST" action="{{ url('/password/email') }}">
        <div class="row thumbnail login col-md-offset-3 col-md-6 ">
            @if (session('status'))
                <div class="alert alert-success"><span> </span>{{ session('status') }}</div>
            @endif
            {{ csrf_field() }}
            <img src="{{asset('images/logonoir.png')}}" width="90">
                <p class="text-center color">Parce que vous avez le droit d'acheter au juste prix !</p>
                <hr class="">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="control-label" for="email"><span class="text-danger">*</span>Adresse Email </label>
                <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
                {!! $errors->first('email', '<span class="text-danger">:message</span>') !!}
            </div>
            <div class="form-group">
            <button class="btn btn-info btn-block"><i class="fa fa-key"></i> Réinitialisation </button>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <p class=" ">Pas encore membre <a href="{{route('inscription')}}"> s'inscrire</a> </p>
                </div>
                <div class="col-md-6">
                    <p class="">Vous avez déjà un compte ? <a href="{{route('connexion')}}">Se connecter</a></p>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
@endsection
