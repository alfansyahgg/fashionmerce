@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('title')
    {{ $data[0]->nama }}
@endsection

@push('css')
	<style>
		.cart-btn{
			background-color: #25d366 !important;
		}

		.cart-btn:hover{
			border: #25d366 1px solid;
			background-color: white !important;
			color: #25d366 !important;
		}
	</style>
	
@endpush

@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>{{ strtoupper($data[0]->nama) }}</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="owl-carousel owl-theme">
						@foreach ($data as $dt)
							<div class="single-product-img">
								<img src="{{ url('assets/img/produk/'.$dt->gambar) }}" alt="">
							</div>
						@endforeach		
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{ strtoupper($data[0]->nama) }}</h3>
						<p class="single-product-pricing"> <span>Harga</span> Rp. {{ number_format($data[0]->harga,0, '.', '.' )  }}</p>
						<p>
							{{ $data[0]->deskripsi }}
						</p>
						<div class="single-product-form">
							<a href="https://api.whatsapp.com/send?phone=6282126909916&text=Halo%21%20Saya ingin memesan {{ strtoupper($data[0]->nama) }} " class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan via WA</a>
							<p><strong>Categories: </strong> {{ $data[0]->nama_kategori }}  </p>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produk</span> Lainnya</h3>
						<p>
                            Kami menyediakan berbagai macam produk kebutuhan seragam dinas TNI - Polri.
                        </p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($datas as $dt)
				<div class="col-lg-4 col-md-6 text-center {{ $dt->nama_kategori }}">
					<div class="single-product-item">
						<div class="owl-carousel owl-theme">
							@foreach ($allData as $ad)
								@if ($dt->produk_id == $ad->produk_id)
									<div class="product-image">
										<a href="{{ route('home.produk.id', $dt->slug) }}"><img src="{{url('assets/img/produk').'/'.$ad->gambar }}" alt=""></a>
									</div>									
								@endif								
							@endforeach
						</div>
						<a href="{{ route('home.produk.id', $dt->slug) }}"><h3 class="text-uppercase">{{ strtoupper($dt->nama) }}</h3></a>
						<p class="product-price"><span>Harga</span> Rp. {{ number_format($dt->harga,0, '.', '.' )  }} </p>
						<a target="_blank" href=" https://api.whatsapp.com/send?phone=6282126909916&text=Halo%21%20Saya ingin memesan {{ strtoupper($dt->nama) }} " class="cart-btn"><i class="fas fa-shopping-cart"></i> Pesan</a>
						<a target="_blank" href="{{ route('home.produk.id', $dt->slug) }}" class="detail-btn">
							<i class="fas fa-bullseye    "></i>
							Lihat Detail
						</a>
					</div>
				</div>
				@endforeach
			</div>
            <div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{ route('home.produk') }}" class="boxed-btn">Produk Lainnya</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->


@endsection

@push('scripts')
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			})
		})
	</script>
@endpush