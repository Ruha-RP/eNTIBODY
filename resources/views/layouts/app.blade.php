<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" id="token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'eNTIBODY') }}</title>

    <!-- STYLES -->
    <!-- Bulma CSS Framework -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css";>
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js";></script>
    <!-- In-built Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>

    <div id="app">



        <!-- THE NAVIGATION BAR -->
        <nav class="navbar is-primary navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <span class="icon">
                    <i class="fas fa-dna is-size-2" style="color:#26547C;"></i>
                 </span>
                <a class="navbar-item has-text-white is-size-3" href="{{ url('/') }}">
                    {{ config('app.name', 'LabTest') }}
                </a>
                
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <li>
                                <a class="nav-link has-text-white is-size-4" href="{{ route('login') }}"><span class="icon">
                                    <i class="fas fa-user-md" style="color:#26547C;"></i>
                                </span> Login</a>
                            </li>

                            <li>
                                <a class="nav-link has-text-white is-size-4" href="{{ route('register') }}"><span class="icon">
                                    <i class="far fa-clipboard" style="color:#26547C;"></i>
                                 </span> Register</a>
                            </li>

                        @else
                            <li class="nav-item dropdown has-text-white is-size-4">

                                <a class="nav-link dropdown-toggle has-text-white is-size-4" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-md" style="color:#26547C;"></i>
                                      {{ Auth::user()->name }} 
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="navbar-item is-size-4" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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



        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- SCRIPTS -->
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- External Javascript File -->
    <script src="/js/interpret.js"></script>

</body>
</html>
