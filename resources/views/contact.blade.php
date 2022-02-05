@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang, SERAGAM TNI, POLRI, SATPOL PP, JAKET TRAINING diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Cimahi Bandung
@endsection

@section('keywords')
seragam tni cimahi bandung,seragam dinas polri cimahi bandung,seragam tentara cimahi bandung,seragam militer cimahi bandung,seragam pns cimahi bandung,jaket training cimahi bandung,konveksi seragam cimahi bandung,jasa pakaian cimahi bandung,pabrik seragam cimahi bandung,
@endsection

@section('title')
    Kontak Kami
@endsection

@section('content')
    <!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>PT. BERKAH CIPTA KARYA BERSAMA</p>
						<h1>Kontak Kami</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

    <!-- kontak section -->

    <div class="kontak-sect mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>
                        Maps
                    </h3>
					{!! $informasis->gmaps_iframe !!}
				</div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat</h4>
							<p>
								{{ $informasis->alamat }}
							</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fab fa-whatsapp"></i> Whatsapp</h4>
							<p>+62{{ $informasis->no_hp }}</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-envelope    "></i> Email</h4>
							<p>Email: {{ $informasis->email }}</p>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>

    <!-- end kontak section -->


@endsection