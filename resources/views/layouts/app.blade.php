<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf_token" content="{{csrf_token()}}">
    <title>Digital Fortress</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }} " rel="stylesheet" />

    
    <!-- Material Dashboard CSS -->
    <link href="{{ url('assets/css/material-dashboard.css') }}" rel="stylesheet" />

    
    <!-- Fonts And Icons -->
    <link href="{{ url('assets/css/font-awesome.min.css') }} " rel="stylesheet" />
    <link href="{{ url('assets/css/matico.css') }} " rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.min.css" />
    @yield('externcss')

</head>
<body style="overflow: hidden;">

    <div class="wrapper">
        <div class="sidebar" data-color="red" data-image="{{ url('assets/img/sd2.jpg') }}">

            <div class="logo">
                <h4 class="simple-text">
                    <strong>Digital Fortress</strong>
                </h4>
            </div>

            <div class="sidebar-wrapper">
                <ul class="nav">

                    @if (session()->has('email'))
                        <li class="{{ (isset($tab)&&$tab==1)?'active':''}}">
                            <a href="dashboard">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="{{ (isset($tab)&&$tab==2)?'active':''}}">
                            <a href="round_overview">
                                <i class="material-icons">lock</i>
                                <p>Round Overview</p>
                            </a>
                        </li>
                    @else
                        <li class="{{ (isset($tab)&&$tab==1)?'active':''}}">
                            <a href="dashboard">
                                <i class="material-icons">play_arrow</i>
                                <p>Login</p>
                            </a>
                        </li>
                    @endif
                    
                    <li class="{{ (isset($tab)&&$tab==3)?'active':''}}">
                        <a href="/rules">
                            <i class="material-icons">next_week</i>
                            <p>Rules and Regulation</p>
                        </a>
                    </li>

                    <li class="{{ (isset($tab)&&$tab==4)?'active':''}}">
                        <a href="/leaderboard">
                            <i class="material-icons">list</i>
                            <p>Leaderboard</p>
                        </a>
                    </li>

                    <li class="{{ (isset($tab)&&$tab==5)?'active':''}}">
                        <a href="/hints">
                            <i class="material-icons">list</i>
                            <p>Hints</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">{{ $dashname or '' }}</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            @if (session()->has('name'))
                                <li class="dropdown" style="">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding: 0px;">
                                       <i class="material-icons"  style="font-size: 20px;">person</i>
                                   </a>
                                
                                    <ul class="dropdown-menu">
                                        <li><a href="/myprofile">My Profile</a></li>
                                        <li><a href="/logout">Logout</a></li>
                                     </ul>
                                </li>
                            @endif
                        </ul>
                    </div>

                </div>
            </nav>

            <div class="content" style="background-image: url('{{ url('assets/img/hp.png')}}'); background-repeat:no-repeat; background-position: right center; ">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
             <a href="https://github.com/arka-nitd/digitalfortress"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/652c5b9acfaddf3a9c326fa6bde407b87f7be0f4/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6f72616e67655f6666373630302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png"></a>
        </div>
    </div>
</body>

@yield('modal')
   
<!-- Core JS Files -->
    <script src="{{ url('assets/js/jquery-3.1.0.min.js') }} " type="text/javascript"></script>
    <script src="{{ url('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/js/material.min.js') }}" type="text/javascript"></script>


   
    <!-- Material Dashboard javascript methods -->
    <script src="{{ url('assets/js/material-dashboard.js') }}"></script>
    
    @yield('myjs')

</html>
