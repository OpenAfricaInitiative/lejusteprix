@extends('layouts.base',['title'=>"Connexion"])

@section('container')
    <div class="container-fluid bg top " >
        <div class="row ">
            <div class=" thumbnail login col-md-offset-3 col-md-6 ">
                <img src="images/logonoir.png" width="90">
                <p class="text-center color">Parce que vous avez le droit d'acheter au juste prix !</p>
                <hr class="">
                <form class="form-group" method="POST" action="{{url('/connexion')}} ">
                    {{ csrf_field() }}
                <div class="row col-md-offset-2 col-md-7 form-group  ">
                    <div class="form-group floating-label-form-group controls {{$errors->has('log') ?'has-error':'' }}">
                        <div class="row">
                            <label class="label-control " for="name">Identifiant</label>
                            <img src="{{asset('images/user.png')}}" width="50px" class="img-responsive"> 
                            <input type="text" id="name" name="log" class="log form-control" placeholder="Nom utilisateur ou email"  value="{{old('log')}}"  aria-describedby="basic-addon1" >
                        </div>
                       {!! $errors->first('log','<p class="help-block " style="font-size:17px"> :message</p>') !!}

                    </div>
                    <div class="form-group floating-label-form-group controls  {{$errors->has('password') ?'has-error':'' }}">
                        <div class="row">
                            <label class="label-control" for="password">Mot de Passe </label>
                            <img src="{{asset('images/lock.png')}}" width="50px" class="img-responsive"> 
                            <input type="password" id="password" name="password" class="log form-control" placeholder="Mot de passe"  value="{{old('password')}}" aria-describedby="basic-addon2" >
                        </div>
                        {!! $errors->first('password','<p class="help-block" style="font-size:17px"> :message</p>') !!}
                    </div>
                    <div class="form-group">
                        <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : ''}}>
                        <label for="remember">Se Souvenir de moi</label>
                    </div>            
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn btn-block"><i class="fa fa-users"></i> Se connecter</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <p class="col-md-6 color">Pas encore membre <a href="{{route('inscription')}}"> s'inscrire</a> </p>
                <p class="col-md-6 color"><a href="{{route('password.request')}} ">Mot de passe oublié ?</a></p>
            </div>
        </div>
      
    </div>
</div>
 
@endsection
