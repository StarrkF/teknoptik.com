<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    
    <meta name="description" content="@yield('desc')">
    <meta name="keywords" content="@yield('key')">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teknoptik</title>
    <link href="{{ asset('app/img/favicon.ico') }}" rel="icon" type="image/x-icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('app/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/barfiller.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('app/css/style.css') }}" type="text/css">
</head>

<body class="bg-dark">
    
    <section class="section-404">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-404">
                        <h1 style="color: #cfaa67">404</h1>
                        <h3>Opps! Bu sayfa Mevcut Değil</h3>
                        <p>teknoptik.com</p>
                       <a href="{{route('app.home')}}" style="font-size: 24px"><i class="fa fa-home"></i>Anasayfaya Dön</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 Section End -->
     <!-- Js Plugins -->
     <script src="{{ asset('app/js/jquery-3.3.1.min.js') }}"></script>
     <script src="{{ asset('app/js/bootstrap.min.js') }}"></script>
     <script src="{{ asset('app/js/jquery.magnific-popup.min.js') }}"></script>
     <script src="{{ asset('app/js/masonry.pkgd.min.js') }}"></script>
     <script src="{{ asset('app/js/jquery.barfiller.js') }}"></script>
     <script src="{{ asset('app/js/jquery.slicknav.js') }}"></script>
     <script src="{{ asset('app/js/owl.carousel.min.js') }}"></script>
     <script src="{{ asset('app/js/main.js') }}"></script>
 
 
 
 </body>
 
 </html>

