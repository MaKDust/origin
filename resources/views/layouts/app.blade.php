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
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
      
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
               <div class="container" style="width: 100%;">
                  <a class="navbar-brand" href="{{ url('/') }}">
                  <img style="max-width: 70px;" src="https://res.cloudinary.com/teepublic/image/private/s--xv3LBqHj--/t_Preview/b_rgb:fffffe,c_limit,f_jpg,h_630,q_90,w_630/v1461549475/production/designs/491862_1.jpg" alt="E-CORP">
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
                        @if ((Auth::user() != null) && (Auth::user()->role == "1"))
                        <li style="margin:8px;"><a href="{{url('/dashboard')}}"><i class="fas fa-cogs" style="color:gray;"> Dashboard</i></a></li>
                        @endif
                        @endguest
                     </ul>
                  </div>
               </div>
            </nav>
            @yield('AdminNav')
            <main class="">
               @yield('content')
            </main>
        <hr>
  <div class="container well">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5"> 
        <address>
        <strong>MyStoreFront, Inc.</strong><br>
        Indian Treasure Link<br>
        Quitman, WA, 99110-0219<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
        <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
        </address>
        </div>
    </div>
  </div>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © E-Corp. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
   </body>
</html>