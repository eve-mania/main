<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href="theme/css/bootstrap.min.css" rel="stylesheet">
    <link href="theme/css/font-awesome.min.css" rel="stylesheet">
    <link href="theme/css/animate.min.css" rel="stylesheet">
    <link href="theme/css/owl.carousel.css" rel="stylesheet">
    <link href="theme/css/owl.transitions.css" rel="stylesheet">
    <link href="theme/css/prettyPhoto.css" rel="stylesheet">
    <link href="theme/css/main.css" rel="stylesheet">
    <link href="theme/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="theme/js/html5shiv.js"></script>
    <script src="theme/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="theme/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="theme/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="theme/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="theme/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="theme/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="theme/images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="/">Home</a></li>
                        <li class="scroll"><a href="/distr">Distr</a></li>

                        @if (Auth::guest())
                             <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

   









@yield('content')
















    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2014 Your Company. Designed by <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="theme/js/jquery.js"></script>
    <script src="theme/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="theme/js/owl.carousel.min.js"></script>
    <script src="theme/js/mousescroll.js"></script>
    <script src="theme/js/smoothscroll.js"></script>
    <script src="theme/js/jquery.prettyPhoto.js"></script>
    <script src="theme/js/jquery.isotope.min.js"></script>
    <script src="theme/js/jquery.inview.min.js"></script>
    <script src="theme/js/wow.min.js"></script>
    <script src="theme/js/main.js"></script>
</body>
</html>