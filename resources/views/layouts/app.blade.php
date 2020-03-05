<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container" style="width: 100%;">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        LOGO
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                @if ((Auth::user() != null) && (Auth::user()->role == "1"))
                                <li style="margin:8px;font-size: 1rem"><a href="{{url('/dashboard')}}"><i class="fas fa-user-cog"></i></a></li>
                                @endif
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('shoppingcart') }}">
                                    <div class="badge badge-danger">
                                        {{ Cart::session(auth()->id())->getContent()->count() }}    
                                    </div>
                                    <i class="fas fa-shopping-cart"></i>
                                </a>
                            </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{url('/user')}}">
                                        <img 
                                        src="{{asset(Auth::user()->avatar)}}" 
                                        alt="" 
                                        class="img-responsive img-fluid img-thumbnail rounded mx-auto d-block" 
                                        style="height:40px;width:40px;margin-left:15px;"
                                        >
                                    </a>
                                </li>
                            @endguest
                         </ul>
                    </div>
                </div>
            </nav>
            <main class="">
                @yield('content')
            </main>
        </div>

    </div>
{{-- @yield('footer') --}}
    
</body>
</html>
