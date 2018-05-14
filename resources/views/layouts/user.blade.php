<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="none" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Espace membre:Connexion, Inscription , Mot de passe oublié">
    <title>{{config(env('APP_NAME'),'JUSTE PRIX') }} - {{ $title }} </title>
    <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('library/font-awesome-4.3.0/css/font-awesome.min.css')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icon.png')}}">

    <style>
        body {
            background-image:url('{{ Voyager::image( Voyager::setting("admin.bg_image"), voyager_asset("images/bg.jpg") ) }}');
            background-color: {{ Voyager::setting("admin.bg_color", "#FFFFFF" ) }};
        }
        .login-sidebar{
            border-top:5px solid #257525;
            overflow: scroll;
        }
        @media (max-width: 767px) {
            .login-sidebar {
                border-top:0px !important;
                border-left:5px solid #257525;
            }
        }
        body.login .form-group-default.focused{
            border-color:orangered;
        }
       
        .login-button, .bar:before, .bar:after{
            background:#257525;
        }
        body img{
            margin: 0px auto;
            width: 200px;
        }
        h2{
            text-transform: uppercase;
            text-align: center;
        }
    </style>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
</head>
<body class="login">
<div class="container-fluid">
    <div class="row">
        <div class="faded-bg animated"></div>
           <div class="col-xs-12 col-sm-5 col-md-4 login-sidebar">
            <a href="{{route('home')}} "><img src="{{asset('images/logonoir.png')}}" class="img-responsive"></a>

            <div class="login-container">

                @yield('container')
                <div class="text-center">
                    <a href="{{route('home')}}" class="btn btn-primary btn-block">Aller à l'Accueil</a>
                </div>
              <div style="clear:both"></div>

              @if(!$errors->isEmpty())
              <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                    @endforeach
                </ul>
              </div>
              @endif

            </div> <!-- .login-container -->

        </div>
        

      <!-- .login-sidebar -->
    </div> <!-- .row -->
</div> <!-- .container-fluid -->
@include('flashy::message')

@yield('script')


</body>
</html>
