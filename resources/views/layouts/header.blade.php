<!-- header -->
<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- logo -->
                    <div class="site-logo">
                        <a href="/">
                            <img src="{{ url('') }}/assets/img/header.png" alt="">
                        </a>
                    </div>
                    <!-- logo -->

                    <!-- menu start -->
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'current-list-item' : '' }}"><a href="{{ route('home.index') }}">Home</a>
                                {{-- <ul class="sub-menu">
                                    <li><a href="index.html">Static Home</a></li>
                                    <li><a href="index_2.html">Slider Home</a></li>
                                </ul> --}}
                            </li>
                            <li class="{{ Request::is('tentang') ? 'current-list-item' : '' }}"><a href="{{ route('home.tentang') }}">Tentang</a></li>
                            {{-- <li><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="404.html">404 page</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Check Out</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="news.html">News</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                </ul>
                            </li> --}}
                            {{-- <li><a href="news.html">Produk</a></li> --}}
                            <li class="{{ Request::is('kontak') ? 'current-list-item' : '' }}"><a href="{{ route('home.kontak') }}">Kontak</a></li>
                            <li class="{{ Request::is('produk/*') ? 'current-list-item' : Request::is('produk') ? 'current-list-item' : '' }}"><a href="{{ route('home.produk') }}">Katalog Produk</a></li>     
                            {{-- <li><a href="./jasa">Jasa</a></li> --}}
                            @if ( Auth::check() )
                                <li class="d-none">
                                    <span style="color: white;font-weight: bold">|</span>
                                </li>
                                @php
                                    $user = Auth::user();
                                    $level = $user->level;
                                    $userid = $user->id;
                                @endphp
                                
                                @if ($level == 'common')
                                    <li><a href="{{ route('home.myprofile', $userid) }}">Profil Saya</a></li>
                                @endif

                                @if ($level == 'admin')
                                    <li><a href="{{ route('admin.index') }}">Admin Page</a></li>     
                                @endif
                                <form class="d-none" id="formLogout" action="{{ route('logout') }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                </form>
                                <li>
                                    <a href="javascript:void(0)" onclick="document.querySelector('#formLogout').submit()">Logout</a>
                                </li>
                            @else
                                <li class="{{ Request::is('login') ? 'current-list-item' : '' }}"><a href="./login">Login</a></li>   
                            @endif

                            <li>
                                <div class="header-icons">
                                    {{-- <a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a> --}}
                                    {{-- <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a> --}}
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- menu end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->