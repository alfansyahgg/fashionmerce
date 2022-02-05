@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang, SERAGAM TNI, POLRI, SATPOL PP, JAKET TRAINING diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Cimahi Bandung
@endsection

@section('keywords')
seragam tni cimahi bandung,seragam dinas polri cimahi bandung,seragam tentara cimahi bandung,seragam militer cimahi bandung,seragam pns cimahi bandung,jaket training cimahi bandung,konveksi seragam cimahi bandung,jasa pakaian cimahi bandung,pabrik seragam cimahi bandung,
@endsection

@section('title')
    Register
@endsection

@push('css')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .box-login{
            width: 700px;
            margin: 20px 0;
            background-color: white;
            border-radius: 2em;
        }

        .form-login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
            min-height: 0;
        }
    </style>
@endpush

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
								<a href="#daftar" class="boxed-btn">Daftar Sekarang!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
    <div id="daftar" class="login d-flex justify-content-center align-items-center">
        <div class="box-login">
            <div class="login-wrapper p-4">
                <h3 class="text-center">
                    Register
                </h3>
                <form class="form-login" method="POST" action="{{ route('regist') }}">
                    @csrf
                    @if ($errors->any())                                        
                    <div class="form-group">
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    </div>                                            
                    @endif
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">E-Mail</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Nomor HP</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input type="number" name="phone_number" class="form-control ia_phone_number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" name="city" class="form-control ia_city">
                    </div>
                    <div class="form-group">
                        <label for="">Kode Pos</label>
                        <input type="number" name="zip_code" class="form-control ia_zip_code w-100">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="address" cols="30" rows="5" class="form-control ia_address"></textarea>
                    </div>
                    <div class="form-group">
                        <hr style="font-weight: bold">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password"  class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" name="password_confirmation"  class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>        
        $(document).ready(function(){
            var $root = $('html, body');
            $('a[href^="#"]').click(function () {
                $root.animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top
                }, 500);

                return false;
            });
        })
    </script>
@endpush