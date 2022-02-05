@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
seragam tni bandung, seragam dinas polri bandung, seragam tentara bandung, seragam pns bandung, jaket training bandung, konveksi seragam bandung, jasa pakaian bandung
@endsection

@section('title')
    Katalog Produk
@endsection

@push('css')
	
@endpush

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
					<h1 class="text-center mb-5">Kategori</h1>
                    <div class="product-filters">
                        <ul>
                            {{-- <li class="active" data-filter="*">Semua Produk</li>
                            <li data-filter=".kategori1">Kategori 1</li>
                            <li data-filter=".kategori2">Kategori 2</li>
                            <li data-filter=".kategori3">Kategori 3</li> --}}
							<li class="{{ Request::is('produk') ? 'active' : '' }}">
								<a href="{{ route('home.produk') }}">SEMUA PRODUK</a>
							</li>
							@foreach ($kategoris as $ctg)
								{{-- <li data-filter=".{{ implode('_',explode(' ', $ctg->nama)) }}">
									<a href="">
										{{ strtoupper($ctg->nama) }}
									</a>
								</li> --}}
								<li class="{{ Request::is('produk/kategori/'.$ctg->nama) ? 'active' : '' }}">
									<a href="{{ route('home.produk.kategori', $ctg->nama ) }}">
										{{ strtoupper($ctg->nama) }}
									</a>
								</li>
							@endforeach
                        </ul>
                    </div>
                </div>
            </div>

			<div class="row product-lists">
                @foreach ($data as $dt)
                    <div class="col-lg-4 col-md-6 text-center {{ implode('_',explode(' ', $dt->nama_kategori)) }}">
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
					
					{{ $data->links('vendor.pagination.custom_pag') }}
					{{-- <div class="pagination-wrap">						
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>						
					</div> --}}
				</div>
			</div>
			
		</div>
	</div>
	<!-- end products -->
@endsection

@push('scripts')
	<script>
		$(document).ready(function(){
			$('.owl-carousel').owlCarousel({
    			lazyLoad:true,
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