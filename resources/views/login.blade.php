@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('title')
    Admin Login
@endsection

@push('css')
    <style>
        .box-login{
            width: 300px;
            height: 60% !important;
            background-color: white;
            margin: 30px 0;
            border-radius: 2em;
        }

        .form-login{
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 30px 0;
        }
    </style>
@endpush

@section('content')
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
                                <form class="form-login" method="POST" action="">
                                    <div class="form-group">
                                        <label for="">E-Mail</label>
                                        <input type="text" name="email" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="text" name="email" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block">
                                            Login
                                        </button>
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