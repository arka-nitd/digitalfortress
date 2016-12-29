<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Digital Fortress</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    
      <style type="text/css">
        #map {
          width: 550px;
          height: 300px;
        }
      </style>
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <!-- <link rel="stylesheet" href="{{ URL::asset('public/css/app.css') }}"> -->
    <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet" type="text/css" >   

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="{{ URL::asset('js/gmaps.js') }}"></script>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout">
    <nav class="navbar navbar-default" style="background-color: #337ab7 ;">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" style="color:smokewhite;">
                    <span class="sr-only">Toggle Navigation</span>
                    
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}" style="color:white;">
                    <strong>DIGITAL FORTRESS</strong>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                
                    <li><a href="{{ url('/rules') }}" style="color:white;"><strong>RULES</strong></a></li>
                    <li><a href="{{ url('/leaderboard') }}" style="color:white;"><strong>LEADERBOARD</strong></a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right mynav">
                    <!-- Authentication Links -->
                    <?php if (!session()->has('name')){ ?>
                        <li><a href="{{ url('/login/fb') }}" style="color:white;"><strong>LOGIN</strong></a></li>
                    <?php }
                    else { ?>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:white;"><strong>
                                {{session('name') }} </strong><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out" style="color:white;"></i><strong>LOGOUT</strong></a></li>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

   
</body>
</html>
