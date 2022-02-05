@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
seragam tni cimahi bandung,seragam dinas polri cimahi bandung,seragam tentara cimahi bandung,seragam militer cimahi bandung,seragam pns cimahi bandung,jaket training cimahi bandung,konveksi seragam cimahi bandung,jasa pakaian cimahi bandung,pabrik seragam cimahi bandung,
@endsection

@section('title')
PT BERKAH CIPTA KARYA BERSAMA
@endsection

@section('content')	

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							{{-- <p class="subtitle">CV Armyindo Sadarjaya</p> --}}
							<h1>PT. BERKAH CIPTA KARYA BERSAMA</h1>  
                            <p class="subtitle-bawah">
                                Penyedia barang dan jasa pakaian, seragam TNI, POLRI, SATPOL PP, Jaket Training
                            </p>
							<div class="hero-btns">
								<a href="produk" class="boxed-btn">Koleksi Produk</a>
								<a href="kontak" class="bordered-btn">Kontak Kami</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
                            <i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h3>Berkualitas</h3>
							<p>Produk kami terjamin kualitas bahannya.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
                            <i class="fas fa-money-bill    "></i>
						</div>
						<div class="content">
							<h3>Harga Kompetitif</h3>
							<p>Harga produk kami sesuai dengan kualitas produk kami yang bagus.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
                            <i class="fas fa-grin-beam    "></i>
						</div>
						<div class="content">
							<h3>Good Service</h3>
							<p>Kami pastikan pelayanan yang memuaskan.</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Produk</span> Kami</h3>
						<p>
                            Kami menyediakan berbagai macam produk kebutuhan seragam dinas TNI - Polri.
                        </p>
					</div>
				</div>
			</div>

			<div class="row">
				@foreach ($data as $dt)
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
					<a href="produk" class="boxed-btn">Produk Lainnya</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
                    <h1>Testimoni</h1>
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ url('assets/img/avaters/avatar1.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>Rismi Shafira</h3>
								<p class="testimonial-body">
									" Pelayanan bagus dan hasilnya memuaskan. Gak nyesel pesan disini "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ url('assets/img/avaters/avatar2.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>Aditya Nur Hakim</h3>
								<p class="testimonial-body">
									" Hanya disini bahan bagus, berkualitas dan harganya murah. Semoga makin sukses "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ url('assets/img/avaters/avatar3.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>Doni Firmansyah</h3>
								<p class="testimonial-body">
									" Saya bersyukur bisa menemukan website ini.Saya bisa dapat produk yang murah dan berkualitas.  "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Sejak tahun 2018</p>
						<h2><span class="orange-text">PT BERKAH CIPTA KARYA BERSAMA</span></h2>
						<p>Dengan komitmen dan konsistensi yang tinggi dalam pelayanannya selalu berusaha
                            melakukan yang terbaik untuk mewujudkan kepuasan pelanggan dan paramitra
                            secara maksimal. </p>
						<p>Selalu menganalisa permasalahan dan menggunakan kesempatan, meningkatkan
                            kualitas dan potensi sumber daya, menambah sarana dan prasarana, serta selalu
                            inisiative dan inovatif dalam kebijakan menyikapi setiap perkembangan.</p>
						{{-- <a href="about.html" class="boxed-btn mt-4">know more</a> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
    
	<!-- end shop banner -->

	<!-- logo carousel -->
	
	<!-- end logo carousel -->
	
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