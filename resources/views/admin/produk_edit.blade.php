@extends('admin.layouts.master')

@section('title')
    Edit Produk
@endsection

@section('heading')
    Edit Produk
@endsection

@section('content')
    <form action="{{ route('produk.update', $produks['produk_id']) }}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="">Nama Produk</label>
            <input type="text" name="nama" id="" class="form-control" value="{{ $produks['nama'] }}">
        </div>
        <div class="form-group">
            <label for="">Kategori Produk</label>
            <select name="kategori_id" id="" class="form-control">
                @foreach ($kategoris as $item)
                    <option @if ( $item['kategori_id'] == $produks['kategori_id']) selected @endif  value="{{ $item['kategori_id'] }}">{{ $item['nama'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="">Harga Produk</label>
            <input type="number" name="harga" id="" class="form-control" value="{{ $produks['harga'] }}">
        </div>
        <div class="form-group">
            <label for="">Stok Produk</label>
            <input type="number" name="stok" id="" class="form-control" value="{{ $produks['stok'] }}">
        </div>
        <div class="form-group">
            <label for="">Deskripsi Produk</label>
            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{ $produks['deskripsi'] }}</textarea>
        </div>
        <div class="form-group">
            <label for="">Slug <small>sebagai url</small> </label>
            <input readonly type="text" name="slug" id="" class="form-control" value="{{ $produks['slug'] }}">
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">
                <i class="fas fa-window-restore    "></i>
                Update
            </button>
        </div>
        
    </form>
@endsection