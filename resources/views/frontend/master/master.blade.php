<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <base href="{{ asset('frontend') }}/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- header -->
    <header>
        <div id="content-head">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <img src="img/logo-dtp.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 align-self-center">
                        <p>Hotline: 0908.57.02.02</p>
                        <p>Email: sales@dtpvietnam.com</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Menu</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Trang chủ</a>
                    </li>
                    @foreach ($categories as $cate)
                    @if ($cate->id_parent==0)
                    <li class="nav-item">
                        <a class="nav-link" href="/{{ $cate->slug }}">{{ $cate->name }}</a>
                    </li>
                    @endif
                    @endforeach
                   
                </ul>
            </div>
        </div>
    </nav>
    <!-- slide -->
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/slider_3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider_4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/slider_5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    @yield('content')
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row info">
                <div class="col-lg-4 col-md-6">
                    <h5>CÔNG TY TNHH ĐẠI THỊNH PHÁT VIỆT NAM</h5>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                    <p>MST: 031.320.7845</p>
                    <p>Tel: 028 62862446</p>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>CÔNG TY TNHH ĐẠI THỊNH PHÁT VIỆT NAM</h5>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                    <p>MST: 031.320.7845</p>
                    <p>Tel: 028 62862446</p>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5>CÔNG TY TNHH ĐẠI THỊNH PHÁT VIỆT NAM</h5>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                    <p>MST: 031.320.7845</p>
                    <p>Tel: 028 62862446</p>
                    <p>Add: 35 đường 4A, Bình Hưng Hòa B, Q. Bình Tân, TP.HCM</p>
                </div>
            </div>
        </div>
        <div class="end-footer text-center">
            © Copyright 2016 Đại Thịnh Phát Việt Nam All right reserved. Designed by CleverMedia
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>