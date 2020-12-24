<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('block title')
    </title>
    <link rel="shortcut icon" href="https://eccum.famnit.upr.si/en/resources/images//about-the-project/partners/iitu/iitu.png">

</head>


<body>
<style>
    li {
        list-style-type: none;
    }
</style>

<header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="/">
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="nav-menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/reception">Reception</a></li>
                        <li><a href="/bachelor">Bachelor</a></li>
                        <li><a href="/master">Master</a></li>
                        <li><a href="/phd">PHD</a></li>
                        @if( auth()->check() )
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/logout">Log Out</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="/login">Log In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/register">Register</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="top-option">
                    <div class="to-search search-switch">
                        <i class="fa fa-search"></i>
                    </div>
                    <div class="to-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="canvas-open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>


    @yield('block content')





<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="fs-about">
                    <div class="fa-logo">
                        <a href="#"><img src="img/hero/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Useful links</h4>
                    <ul>
                        <li><a href="/about-us">About IITU</a></li>
                        <li><a href="#">IITU Mission</a></li>
                        <li><a href="#">IITU Strategy</a></li>
                        <li><a href="#">3D Tour</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Cooperation</a></li>
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Academic mobility</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>For Students</h4>
                    <ul>
                        <li><a href="#">DL</a></li>
                        <li><a href="#">Internal Mail</a></li>
                        <li><a href="#">Student organizations</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="fs-widget">
                    <h4>Science and Innovation</h4>
                    <ul>
                        <li><a href="#">Faculty</a></li>
                        <li><a href="#">Alumni association</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Rector's blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="copyright-text">
                    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> | All rigths reserved by International IT University<a href="#" target="_blank"></a></p>
                </div>
            </div>
        </div>
    </div>
</section>



@include('includes.includes')

</body>

</html>
