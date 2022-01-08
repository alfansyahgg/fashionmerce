<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

    <style>
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
        }

        .my-float{
            margin-top:14px;
        }
    </style>

    

    @stack('css')

    <meta name="description" content="@yield("description")"/>
    <meta name="keywords" content="@yield("keywords")"/>

    {{-- Facebook Meta  --}}

    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="CV ARMYINDO SADARDJAYA &ndash; Pabrik Seragam dinas TNI - Polri di Bandung" />
    <meta property="og:description" content="CV ARMYINDO SADARDJAYA adalah  perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta" />
    <meta property="og:url" content="https://www.armyindosadardjaya.com" />
    <meta property="og:site_name" content="Pabrik Seragam dinas TNI - Polri di Cimahi" />
    <meta property="og:image" content="./assets/img/logo-text.png" />
    <meta property="og:image:secure_url" content="./assets/img/logo-text.png" />
    {{-- <meta property="og:image:width" content="1023" />
    <meta property="og:image:height" content="576" /> --}}
    <meta property="og:image:alt" content="Pabrik Seragam dinas TNI - Polri di Bandung" />
    <meta property="og:image:type" content="image/jpeg" />

    <title>@yield('title')</title>
</head>
<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    {{-- Whatsapp Button --}}
    <a href="https://api.whatsapp.com/send?phone=6282126909916&text=Halo%21%20Saya ingin memesan barang dari anda." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    

    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')

    <!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
    @stack('scripts')
</body>
</html>