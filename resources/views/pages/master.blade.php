
<!DOCTYPE HTML>
<html lang="{{ app()->getlocale()}} ">
    <head>
        <title>{{config(env('APP_NAME'),'JUSTE PRIX') }} | {{ $title }} </title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Juste prix est une plaque forme en partenariat avec le Ministère du Commerce qui traite les cas de corruption dans le milieu du commerce. Elle permet de dénoncer les acteurs qui s'adonne a des pratiques condané par la loi... " />
        <meta name="keywords" content="JUSTE PRIX,transparence, prix, commerce, ivoirien, cote d'ivoire"/>
    
        <link rel="stylesheet" type="text/css" href="{{asset('library/font-awesome-4.3.0/css/font-awesome.min.css')}}">

        <!-- [ PLUGIN STYLESHEET ]
            =========================================================================================================================-->
         
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icon.png')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
        <link rel ="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
        <!-- [ Boot STYLESHEET ]
            =========================================================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{ asset('library/bootstrap/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('library/bootstrap/css/bootstrap.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('library/font-awesome-4.3.0/css/font-awesome.min.css')}}">
            @yield('alerte')
            <!-- [ DEFAULT STYLESHEET ] 
            =========================================================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/green.css')}}">
          
    </head>
    <body>
        <!-- [ LOADERs ]
        ===============--> 
        <div class="preloader">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- [ /PRELOADER ]
        =============================-->

<<<<<<< HEAD
        
    <!-- [WRAPPER ]
    =============================================================================================================================-->
    <div class="wrapper">
        
     <!-- [NAV]
     ============================================================================================================================-->    
       <!-- Navigation
        ==========================================-->
       @include('layouts.partials/nav')
=======
      <p>Prix Officiels de la semaine <strong> {{setting('site.source')}}</strong></p>
>>>>>>> d9412d38df9a940c44f53010f15071eaf6780ef1

       <!-- [/NAV]
     ============================================================================================================================-->    
        <!-- Body
        ==========================================-->
        @yield('content')


<!-- Footer
        ==========================================-->

    @include('layouts.partials/footer')
    @yield('js')
    @yield('Modal')
</div>
    @yield('script')
@include('flashy::message')

    </body>
</html>