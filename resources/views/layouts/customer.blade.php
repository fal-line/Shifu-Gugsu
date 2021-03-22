<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <style>
        .nav-item{
          margin:0 10px;
        }
        @font-face{
          font-family: Head;
          src: url(font/Cream.otf);
        }
        body, html {
          height: 100%;
          display: block;
        }
        .parallax {
          background-image: url("img/banner.jpg");

          height: 100%;

          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
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
        .card{
          margin: 25px;
        }
        .card-img-top{
          padding: 0;
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

        <nav class="navbar navbar-dark" style="filter: drop-shadow(1rem 3rem 4mm black);font-family: Head; padding: 0 50px 0 50px; background-color:#bc7348;">
              <ul class="navbar-nav justify-content-center" style="flex-direction: row;">
                <li class="nav-item active">
                  <a class="nav-link" href="http://127.0.0.1:8000/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Location</a>
                </li>     
              </ul>
              <ul class="navbar-nav d-inline-flex p-2" style="flex-direction: row;">
              @guest
                            <li class="nav-item justify-content-right">
                                <a class="nav-link" href="{{ route('login') }}">Membership</a>
                            </li>
                        @else
                            @can('IsAdmin')
                            <li class="nav-item">
                              <a class="nav-link" href="http://127.0.0.1:8000/home">Dashboard</a>
                            </li>
                            @endcan
                            @can('IsCustomer')
                            <li class="nav-item">
                              <a class="nav-link" href="profile/">Halo {{ Auth::user()->name }}!</a>
                            </li>
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
                            @endcan
                      @endguest
              </ul>
          </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
