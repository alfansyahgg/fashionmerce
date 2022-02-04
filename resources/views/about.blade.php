@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('title')
    Tentang
@endsection

@section('content')
    <!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>PT. BERKAH CIPTA KARYA BERSAMA</p>
						<h1>Tentang Kami</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- featured section -->
	<div class="feature-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="featured-text">
						<h2 class="pb-3">Mengapa <span class="orange-text">Kami?</span></h2>
						<div class="row">
							<div class="col-lg-6 col-md-6 mb-4 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fa fa-thumbs-up" aria-hidden="true"></i>
									</div>
									<div class="content">
										<h3>Kualitas Terjamin</h3>
										<p>
											Kami menjamin kualitas dari setiap produk dan jasa yang kami berikan.
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-money-bill-alt"></i>
									</div>
									<div class="content">
										<h3>Harga Kompetitif</h3>
										<p>Harga produk kami sesuai dengan kualitas produk kami yang terjamin.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 mb-5 mb-md-5">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-grin-beam    "></i>
									</div>
									<div class="content">
										<h3>Good Service</h3>
										<p>Kami pastikan pelayanan yang memuaskan.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="list-box d-flex">
									<div class="list-icon">
										<i class="fas fa-lightbulb    "></i>
									</div>
									<div class="content">
										<h3>Inovatif</h3>
										<p>
											Produk kami selalu selangkah lebih maju dibanding kompetitor.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end featured section -->

	<!-- shop banner -->
	{{-- <section class="shop-banner">
    	<div class="container">
        	<h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section> --}}
	<!-- end shop banner -->

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

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<h1 class="text-center">
				Mitra Kami
			</h1>
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->
@endsection