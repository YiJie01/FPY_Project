<!doctype html >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="backgroup">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>JJ Game Store</title>
    <title>{{ config('app.name', 'JJ Game Store') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--logout bar-->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Search  -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js" id="bootstrap-css"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
    

    <style>
        html, body {
            background-image:url("image/gamestorelogo3.jpg"),linear-gradient(to bottom  ,#000000, #003973, #7AA1D2);
                color: #F3F3F3;
                font-family: 'Nunito', Cursive;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                
            }

            .logo{
                position: absolute;
                top: 8px;
                left: 16px;
                width: 120px;
                height: 100px;
            }

            .backgroup{
                
                background-size: cover;
                                 
            }


            a:link {
            color:#F3F3F3;
            text-decoration:none;
            font-family: 'Nunito', Cursive;
            }

            

        </style>

</head>

<body >

    <div id="id">
        <div class="flex-center position-ref full-height">      
            <nav class="navbar fixed-top navbar-expand-md flex-nowrap navbar-new-top">
                <a href="{{ url('/') }}" class="navbar-brand"><img src="{{ asset('image/logo.png')}}" class="logo" alt=""/></a>       
            </nav>   
        </div>
        <nav class="navbar fixed-top navbar-expand-md navbar-new-bottom"style="background-color: black;opacity: 80%;left: 160px;right: 160px;">
            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">

                <ul class="navbar-nav w-100 justify-content-center px-3" >
                    <li class="nav-item active" >
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ProductCategory">Game List</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/myCart">Cart</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/myStore">Store</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/UserSupport">Support</a>
                    </li>
                <ul>
                    <div>
                        <form action="{{ route('usersearch.product') }}" method="post">
                        {{ csrf_field() }}
                        <div id="custom-search-input">
                                            <div class="input-group col-md-12">
                                                <input type="text" name="searchProduct" id="searchProduct" class=" search-query form-control" placeholder="Search" >
                                                <span >
                                                    <button class="btn btn-success" type="submit">
                                                        Search
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                        </form>
                    </div>
                </ul>                    
                </ul>

                <!-- login&register -->
                <ul class="nav navbar-nav mr-auto"></ul>
                <ul class="navbar-nav flex-row">
                @guest
                    <li class="nav-item">              
                            <a class="nav-link px-2" href="/UserLogin" onclick="showWindow('login',this.href);">Login</a>
                    </li>
                    @if(Route::has('register'))
                    <li class="nav-item" >
                        <a class="nav-link px-2" href="{{ url('/register') }}">Register</a>
                    </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="\" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

                @endguest
                </ul>
                </ul>
            
            </div>
            
        </nav>
        
       
        <main class="py-4" >
        
                @yield('content')

        </main>
    </div>
    </div>
</body>
</html>