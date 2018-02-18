<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Album') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle
                                @isset($categorie)
                                    {{ currentRoute(route('category', $categorie->slug)) }}
                                @endisset
                                    " href="#" id="navbarDropdownCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('Catégories')
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownCat">
                                  @foreach($categories as $category)
                                    <a class="dropdown-item" href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                                @endforeach  
                               
                            </div>
                        </li>
                        @admin
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle{{ currentRoute( route('categorie.create') )}}" href="#" id="navbarDropdownGestCat" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('Administration')
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">
                                <a class="dropdown-item" href="{{ route('create') }}">
                                    <i class="fas fa-plus-circle fa-lg"></i> @lang('Ajouter une catégorie')
                                </a>
                                <a class="dropdown-item" href="{{ route('categorie.index') }}">
                                    <i class="fas fa-plus-wrench fa-lg"></i> @lang('Gerer les catégorie')
                                </a>
                            </div>
                        </li>
                        @endadmin
                        @auth
                            <li class="nav-item{{ currentRoute(route('image.create')) }}"><a class="nav-link" href="{{ route('image.create') }}">@lang('Ajouter une image')</a></li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item{{ currentRoute(route('login')) }}"><a class="nav-link btn btn-outline-success" href="{{ route('login') }}">@lang('Connexion')</a></li>|
                        <li class="nav-item{{ currentRoute(route('register')) }}"><a class="nav-link btn btn-outline-info" href="{{ route('register') }}">@lang('Inscription')</a></li>
                            @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Deconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
