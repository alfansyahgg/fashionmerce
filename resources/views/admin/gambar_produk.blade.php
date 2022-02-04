@extends('admin.layouts.master')

@section('title')
    Manajemen Gambar Produk
@endsection

@section('heading')
    Manajemen Gambar Produk
@endsection

@section('content')
    <div class="table-responsive">
        <table id="dataTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah Gambar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $item)
                    @foreach ($gambars as $gambar)
                        @if ($item->produk_id == $gambar->produk_id)                            
                            <tr>
                                <td> {{ $key+1 }} </td>
                                <td>  {{ $item->nama }} </td>
                                <td>{{ $gambar->jml }}</td>
                                <td>
                                    <a href="{{ route('gambar_produk.show', $gambar->produk_id) }}" class="btn btn-primary w-100">
                                        <i class="fas fa-images    "></i>
                                        Ubah
                                    </a>
                                </td>
                            </tr>
                        @endif
                    @endforeach                    
                @endforeach
            </tbody>
        </table>
    </div>  

    
@endsection

@push('scripts')
    <script>
        $(document).ready(function(){
            
        })
    </script>
@endpush