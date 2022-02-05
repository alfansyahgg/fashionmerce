@extends('admin.layouts.master')

@section('title')
    Admin Dashboard
@endsection

@section('heading')
    Admin Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Produk</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $jmlProduk }} Produk
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Kategori</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $jmlKategori }} Kategori
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Total Users</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ $jmlUser }} User Terdaftar
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h2>
                Website Information
            </h2>
            <div class="myform">
                <form action="{{ route('admin.webinfo') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nomor HP</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1">+62</span>
                            </div>
                            <input type="text" value="{{ $informasis->no_hp }}" name="no_hp" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat Email</label>
                        <input type="email" name="email" value="{{ $informasis->email }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tentang Kami</label>
                        <textarea name="tentang" class="form-control" rows="5">{{ $informasis->tentang }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5">{{ $informasis->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Iframe Google Maps</label>
                        <textarea name="gmaps_iframe" class="form-control" rows="5">{{ $informasis->gmaps_iframe }}</textarea>
                    </div>
                    <div class="form-group mb-5">
                        <button type="submit" class="btn btn-success btn-block">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection