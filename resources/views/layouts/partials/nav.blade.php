

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
              <li><a href="{{route('stat')}} " class="page-scroll" ><i class="fa fa-line-chart"></i> Statistiques </a></li>
              @if(Auth::check() && Auth::user()->id ==1)
              <li><a href="{{route('maintenance.index')}} " class="page-scroll" ><i class="fa fa-wechat"></i> Maintenance !</a></li>
              @endif
          </ul>
            <span class="nav navbar-nav navbar-right">
                @guest
                  <a class="btn-gr btn btn-info btn-style" href="{{route('login')}} " >Connexion</a>
                  <a class="btn-gr btn btn-info btn-style" href="{{route('register')}}" >Inscription</a>
              	@else

                <ul>   
                    <li class="dropdown">
                        <a href="#" style="color:#0f0;" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
                            <img width="50px" src="{{Voyager::image(auth::user()->avatar)}}" alt="photo de profil" class=" img-circle">
                           {{ auth::user()->username}} <b class="caret"></b>
                        </a>
                        
                        <ul class="dropdown-menu" style="background:#fff; padding: 10px;">
                              <li class="profile-img">
                                  <img style="width: 80px;border: 2px solid #fff;" src="{{Voyager::image(auth::user()->avatar)}}" alt="photo de profil" class=" img-circle" align="left">
                                  <div class="profile-body text-info" >
                                      <h5>{{ Auth::user()->name }}</h5>
                                      <h6>{{ Auth::user()->email }}</h6>
                                  </div>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-envelope-o"></i> Message <sup class="badge danger">2</sup> </a>
                              </li>
                              <li>
                                  <a href="/User" ><i class="fa fa-fw fa-user"></i>Mon profil</a>
                              </li>
                              <li>
                                  <a href="{{route('article')}} " ><i class="fa fa-fw fa-pencil"></i>Ecrire un article</a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                    <a href="{{route('logout')}} " class="btn-gr btn-danger" style="color: #000"><i class="fa fa-fw fa-power-off"></i> Deconnexion</a>
                              </li>
                        </ul>
                    </li>
                  </ul> 
                @endguest  
              </span>

          
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>








