<html>
<head>
    <title>Eldoret Municipality Motorcycle Revenue System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eldoret and company advocates is a legal firm located in eldoret kenya owned by wilson kiplagat eldoret, its also a commissioner of oaths and public notaries" />
    <meta name="keywords" content="legal kenya, notaries public, eldoret legal, kenya legal firms, eldoret legal, eldoret law firms, legal advice" />
    <meta name="author" content="Laban, iMond Solutions" />

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="./css/animate.css"/>
    <script src="./js/jquery-2.1.0.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/typer.js"></script>
    <script src="./js/blocs.js"></script>
    <link rel='stylesheet' href='./css/et-line.min.css'/>
    <link rel='stylesheet' href='./css/font-awesome.min.css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway&subset=Raleway,latin-ext' rel='stylesheet'
          type='text/css'>

    <link rel="shortcut icon" href="kaly.ico">

</head>
<body>
<!-- Main container -->
<!-- <div class="page-container"> -->

    <!-- Navigation Bloc -->
    <div class="bloc imond2" id="nav-bloc">
        <div class="container ">
            <nav class="navbar imondopac row">
                <div class="navbar-header">
                  	<a href="/"><img style="width: 100px; height: 70px;"src="images/uasin.png" alt="" /></a>
                    <!-- <a class="navbar-brand" href="index.html"><span class="fa fa-legal icon-sm icon-white zoomIn animated"></span> <img src="images/kal.png" alt="" /></a> -->
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation imond2  nav navbar-nav">

                        
                        <li>
                            <a class="imond2" href="#">Appointment</a>
                        </li>

                        <!-- <li>
                            <a href="/eldoretfaq">FAQ</a>
                        </li> -->
                        <li>
                            <a class="imond2" href="/eldoretcontact" class="btn btn">Contact Us</a>
                        </li>
                        @if (Auth::guest())
                            <li><a class="btn-danger" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="btn-danger" href="{{ url('/register') }}">Register</a></li>

                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle btn-danger" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>

            </nav>
            <div class="row text-center">
              <h1 class="imond2">Eldoret Municipality Motorbike Revenue System</h1>
              <em>------est 2017-------</em>
            </div>
        </div>
    </div>
    <!-- Navigation Bloc END -->

    <!-- header -->
    <div class="bloc bgc-outer-space bg-city-overlay fh5co-cover-style-2 d-bloc" id="header">
      <div class="fh5co-overlay">

      </div>
        <div class="fh5co-cover bloc-xl">

            <div class="row" style="padding-top: 20px;">
                <div class="col-sm-5 col-sm-offset-3 fh5co-cover-text fh5co-cover-intro imondopac">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- header END -->



    <div class="row imondblack">
      <div class="col-xs-12 col-md-8 col-md-offset-2 text-center mg-md"><small class="imond1">Designed by
        <a href="#" target="_blank">Ever</a></small>
      </div>
    </div>
    <!-- Footer - bloc-8 END -->

<!-- Main container END -->
</body>

<!-- Google Analytics -->

<!-- Google Analytics END -->

</html>
