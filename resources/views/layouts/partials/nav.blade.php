

<nav  class="amd-menu navbar navbar-default navbar-fixed-top theme_background_color fadeInDown">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="{{route('home')}}"> LE JUSTE<span class="black">-PRIX</span></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav ">
         
	            <li><a href="{{route('home')}}" class="page-scroll"><i class="fa fa-home"></i> Accueil</a></li>
              <li><a href="{{route('price')}} " class="page-scroll"> <i class="fa fa-bullhorn"></i> Prix officiels</a></li>
	            <li><a href="{{route('blog')}} " class="page-scroll" ><i class="fa fa-wechat"></i> Reagissez !</a></li>
              <li><a href="statistique.php" class="page-scroll" ><i class="fa fa-line-chart"></i> Statistiques </a></li>
              @if(Auth::check() && Auth::user()->id ==1)
              <li><a href="{{route('maintenance.index')}} " class="page-scroll" ><i class="fa fa-wechat"></i> Maintenance !</a></li>
              @endif
            </ul>
            <span class="navbar-right">
                @guest
                <a class="btn btn-info btn-style" href="{{route('connexion')}} " >Connexion</a>
                <a class="btn btn-info btn-style" href="{{route('inscription')}}" >Inscription</a>
              	@else

                <ul>   
                    <li class="dropdown">
                        <a href="#" style="color:#0f0;" class="dropdown-toggle" data-toggle="dropdown"> 
                            <img width="50" src="{{Voyager::image(auth::user()->avatar)}}" alt="photo de profil" class=" img-circle">
                      
                           {{ auth::user()->username}} <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" style="background:#fff;">
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-envelope"></i> Message</a>
                              </li>
                              <li>
                                  <a href="/User" ><i class="fa fa-fw fa-edit"></i> Editer mon profil</a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                    <a href="{{route('logout')}} "><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
                              </li>
                        </ul>
                    </li>
                  </ul> 
                @endguest  
              </span>

          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>








