@extends('layouts.master')

@section('description')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('keywords')
PT BERKAH CIPTA KARYA BERSAMA adalah perusahaan yang bergerak di bidang penyedia Barang diantara nya untuk keperluan Militer Pegawai Negeri maupun Swasta di Bandung
@endsection

@section('title')
    Profile Saya
@endsection

@push('css')
    <style>
        .main{
            height: 100%;
        }

        .main .wrapper{
            background-color: white;
            padding: 50px;
        }
        
        .breadcrumb-section{
            padding-top: 150px !important;
        }
    </style>
@endpush

@section('content')
    <div class="main breadcrumb-section breadcrumb-bg">
        <div class="container wrapper mb-5">
            <div class="row mb-4">
                <div class="col-lg-12">
                    <h2 class="text-center">
                        Profil Saya
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="formMyProfile" action="{{ route('home.updateprofile', $datas->id) }}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-row mb-1">
                            <div class="col">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control" name="name" value="{{ $datas->name }}">
                            </div>
                            <div class="col">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $datas->email }}">
                            </div>
                        </div>
                        <div class="form-row mb-1">
                            <div class="col">
                                <label for="">Nomor HP</label>
                                <input type="number" class="form-control w-100" name="phone_number" value="{{ $datas->phone_number }}">
                            </div>
                            <div class="col">
                                <label for="">Kota Asal</label>
                                <input type="text" class="form-control " name="city" value="{{ $datas->city }}">
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col">
                                <label for="">Kode Pos</label>
                                <input type="number" class="form-control w-100" name="zip_code" value="{{ $datas->zip_code }}">
                            </div>
                            <div class="col">
                                <label for="">Alamat Lengkap</label>
                                <textarea name="address" cols="30" rows="3" class="form-control">{{ $datas->address }}</textarea>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">
                            <i class="fas fa-server    "></i>
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection