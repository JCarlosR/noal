<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('images/favicon.png') }}">

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Noal.us | Futuro financiero</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/coming-sssoon.css') }}" rel="stylesheet" />

    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet'>
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="images/flags/ES.png"/> Español
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        {{--<li><a href="#"><img src="images/flags/DE.png"/> Deutsch</a></li>--}}
                        <li>
                            <a href="#">
                                <img src="images/flags/ES.png"/> Español
                            </a>
                        </li>
                        {{--<li><a href="#"><img src="images/flags/FR.png"/> Français</a></li>--}}
                        {{--<li><a href="#"><img src="images/flags/RO.png"/> Română</a></li>--}}
                        {{--<li><a href="#"><img src="images/flags/IT.png"/> Italiano</a></li>--}}
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <img src="images/flags/GB.png"/> English(UK)
                                <span class="label label-default">soon</span>
                            </a>
                        </li>
                        {{--<li><a href="#"><img src="images/flags/BR.png"/> Português <span class="label label-default">soon</span></a></li>--}}
                        {{--<li><a href="#"><img src="images/flags/JP.png"/> 日本語 <span class="label label-default">soon</span></a></li>--}}
                        {{--<li><a href="#"><img src="images/flags/TR.png"/> Türkçe <span class="label label-default">soon</span></a></li>--}}
                    </ul>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus-square"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>

<div class="main" style="background-image: url('{{ asset('images/video_bg.jpg') }}')">
    <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="{{ asset('video/time.webm') }}" type="video/webm">
        <source src="{{ asset('video/time.mp4') }}" type="video/mp4">
        Video not supported
    </video>
    {{-- Change the image source '/images/video_bg.jpg')" with your favourite image --}}

    <div class="cover black" data-color="black"></div>
    {{--   You can change the black color for the filter with those colors: blue, green, red, orange --}}

    <div class="container">
        <h1 class="logo cursive">
            NOAL
        </h1>
        {{--  H1 can have 2 designs: "logo" and "logo cursive" --}}

        <div class="content">
            <h4 class="motto">Caminamos a tu lado para crear un futuro mejor.</h4>
            <p class="text-center text-white">
                En NOAL estamos desarrolando una app  que te permitir[a tener mayor control de tu situación financiera.<br>
                Rápido, seguro, al alcance de todos, fácil de usar e inclusivo.<br>
                En NOAL creemos que construyendo mejores e inteligentes productos para todos,
                podemos aportar a que puedas crear positivos y sostenidos hábitos financieros.<br>
                Una iniciativa solo pensada en ti.
            </p>
            <div class="subscribe">
                <h5 class="info-text">
                    Suscríbete y recibe novedades de todo lo que está pasando en NOAL:
                </h5>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <form class="form-inline text-center" role="form" id="formSubscribe"
                              action="{{ url('/api/subscribers') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="sr-only" for="name">Nombre</label>
                                <input type="text" name="name" id="name" required
                                       class="form-control transparent" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="email" name="email" id="email" required
                                       class="form-control transparent" placeholder="Correo">
                            </div>
                            <button type="submit" class="btn btn-warning btn-fill">Notifícame</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            info@noal.us
            {{--Dardo Gimenez. Teléfono: +18587059455.--}}
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/subscribe.js') }}"></script>
</html>
