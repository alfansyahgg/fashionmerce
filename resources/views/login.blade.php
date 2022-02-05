@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
seragam tni bandung, seragam dinas polri bandung, seragam tentara bandung, seragam pns bandung, jaket training bandung, konveksi seragam bandung, jasa pakaian bandung
@endsection

@section('title')
    Login
@endsection

@push('css')
    <style>
        .box-login{
            width: 500px;
            height: auto !important;
            background-color: white;
            margin: 30px 0;
            border-radius: 2em;
        }

        .form-login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px;
        }
    </style>
@endpush

@section('content')
    @if (session('register'))
        <script>Swal.fire('Berhasil', 'Berhasil Mendaftarkan Akun', 'success')</script>
    @endif
    
    @if (session('error'))
        <script>Swal.fire('Gagal', 'Cek kembali username dan password anda!', 'error')</script>
    @endif
    <!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="login d-flex justify-content-center align-items-center">
                        <div class="box-login">
                            <div class="login-wrapper p-4">
                                <h3 class="text-center">
                                    Login
                                </h3>
                                <form class="form-login" method="POST" action="{{ route('auth') }}">
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
                                        <label for="">E-Mail</label>
                                        <input type="text" name="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">
                                            Login
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <a href="{{ route('register') }}" class="ml-auto">
                                            Belum punya akun? daftar sekarang
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->
@endsection