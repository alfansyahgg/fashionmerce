@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('title')
    Katalog Produk
@endsection

@section('content')

    <!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>PT. BERKAH CIPTA KARYA BERSAMA</p>
						<h1>Katalog Produk</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">Semua Produk</li>
                            <li data-filter=".kategori1">Kategori 1</li>
                            <li data-filter=".kategori2">Kategori 2</li>
                            <li data-filter=".kategori3">Kategori 3</li>
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
                @foreach ($data as $dt)
                    <div class="col-lg-4 col-md-6 text-center {{ $dt['kategori'] }}">
                        <div class="single-product-item">
                            <div class="product-image">
                                <a href="single-product.html"><img src="assets/img/produk/{{ $dt['image'] }}.png" alt=""></a>
                            </div>
                            <h3 class="text-uppercase">{{ $dt['nama'] }}</h3>
                            <p class="product-price"><span>Harga</span> Rp. {{ number_format($dt['harga'],0, '.', '.' )  }} </p>
                            <a href=" https://api.whatsapp.com/send?phone=6282126909916&text=Halo%21%20Saya ingin memesan {{ strtoupper($dt['nama']) }} " class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan</a>
                        </div>
                    </div>
                @endforeach
				               
			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->
@endsection