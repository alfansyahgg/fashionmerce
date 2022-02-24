<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="{{ url('') }}/assets/img/favicon.ico">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ url('') }}/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ url('') }}/assets/css/responsive.css">
    
	<link rel="stylesheet" href="{{ url('assets/sweet-alert') }}/sweetalert2.min.css">
	<script src="{{ url('assets/sweet-alert') }}/sweetalert2.all.min.js"></script>

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

    <meta content="Pabrik Seragam dinas TNI - Polri di Cimahi Bandung &ndash; PT BERKAH CIPTA KARYA BERSAMA" name="title">
    <meta name="description" content="@yield("description")"/>
    <meta name="keywords" content="@yield("keywords")"/>
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url('') }}" />
    <meta name="google-site-verification" content="QrOz1KutIerF89yqa6cafO2iORNKLyHdsFalrzRZ7d8" />

    {{-- Facebook Meta  --}}

    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pabrik Seragam dinas TNI - Polri di Cimahi Bandung &ndash; PT BERKAH CIPTA KARYA BERSAMA" />
    <meta property="og:description" content="PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang, SERAGAM TNI, POLRI, SATPOL PP, JAKET TRAINING diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Cimahi Bandung" />
    <meta property="og:url" content="https://www.armyindosadardjaya.com" />
    <meta property="og:site_name" content="Pabrik Seragam dinas TNI - Polri di Cimahi Bandung" />
    <meta property="og:image" content="{{ url('assets/img/bckb-2.png') }}" />
    <meta property="og:image:secure_url" content="./assets/img/logo-text.png" />
    {{-- <meta property="og:image:width" content="1023" />
    <meta property="og:image:height" content="576" /> --}}
    <meta property="og:image:alt" content="Pabrik Seragam dinas TNI - Polri di Cimahi Bandung" />
    <meta property="og:image:type" content="image/jpeg" />

    {{-- Twitter Meta  --}}
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Pabrik Seragam dinas TNI - Polri di Cimahi Bandung &ndash; PT BERKAH CIPTA KARYA BERSAMA" />
    <meta name="twitter:description" content="PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang, SERAGAM TNI, POLRI, SATPOL PP, JAKET TRAINING diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Cimahi Bandung" />
    <meta name="twitter:image" content="{{ url('assets/img/bckb-2.png') }}" />
    <meta name="twitter:label1" content="Written by" />
    <meta name="twitter:data1" content="admin" />
    <meta name="twitter:label2" content="Time to read" />
    <meta name="twitter:data2" content="2 minutes" />

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
    <a href="https://api.whatsapp.com/send?phone=62{{ $informasis->no_hp }}&text=Halo%21%20Saya ingin memesan barang dari anda." class="float" target="_blank">
        <i class="fab fa-whatsapp my-float"></i>
    </a>
    

    @include('layouts.header')
    
    @yield('content')

    @include('layouts.footer')

    <!-- jquery -->
	<script src="{{ url('') }}/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="{{ url('') }}/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="{{ url('') }}/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="{{ url('') }}/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="{{ url('') }}/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="{{ url('') }}/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="{{ url('') }}/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="{{ url('') }}/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="{{ url('') }}/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="{{ url('') }}/assets/js/main.js"></script>

    @stack('scripts')
</body>
</html>