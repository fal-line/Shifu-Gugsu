<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>

        main{
          padding:0 !important;
        }

        .nav-item{
          margin:0 10px;
        }
        @font-face{
          font-family: Head;
          src: url(font/Cream.ttf);
        }
        body, html {
          height: 100%;
          display: block;
        }
        .sec{
          background-color:#395227;
          padding: 25px 0;
          color: white; 
        }
        .sec-title{
          background-color:#bc7348;
          padding: 12.5px 0;
          color: white;
          filter: drop-shadow(0 2mm 5mm black); 
          /* font-family: Head; */
        }
        .sec-gray-oppo{
          background-color:#bc7348;
          padding: 12.5px 0;
          color: white;
          font-family: Head;
        }
        .sec-content{
          background-color:#dadada;
          padding: 12.5px 0;
          color: white; 
          
        }

        @media (min-width: 320px) { 
          .nav-item{
            font-size:0.8rem;
          }
          .banner{
            font-size:1.4rem;
          }
          .banner-2{
            font-size:2.3rem;
          }
          .parallax{
            height:449px; 
          }
        }

        @media (min-width: 768px) {
          .nav-item{
            font-size:1rem;
          }
          .banner{
            font-size:2.6rem;
          }
          .banner-2{
            font-size:4.8rem;
          }
          .parallax{
            height:449px; 
          }
        }

        @media (min-width: 992px) {
          .nav-item{
            font-size:1.2rem;
          }
          .banner{
            font-size:3.2rem;
          }
          .banner-2{
            font-size:5.6rem;
          }
          .parallax{
            height:673px; 
          }
        }

        @media (min-width: 1200px) {
          .nav-item{
            font-size:1.5rem;
          }
          .banner{
            font-size:3.8rem;
          }
          .banner-2{
            font-size:6.2rem;
          }
          .parallax{
            height:797px; 
          }
        }
        </style>
    </head>
    <body>

    <div class="row justify-content-center">
        <div class="col-md-8">
        <nav class="navbar navbar-dark justify-content-center" style="font-family: Head; font-size:18pt; border-radius:0 0 25px 25px; padding: 0 50px 0 50px; background-color:grey;">
              <ul class="navbar-nav" style="flex-direction: row;">
                <li class="nav-item active">
                  <a class="nav-link" href="http://127.0.0.1:8000/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Manage</a>
                </li>
                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
              </ul>
          </nav>
            </div>
          </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="js/bootstrap.min.js" ></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>
