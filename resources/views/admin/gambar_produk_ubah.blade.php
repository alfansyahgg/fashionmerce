@extends('admin.layouts.master')

@section('title')
    Manajemen Gambar Produk
@endsection

@section('heading')
    Manajemen Gambar Produk
@endsection

@push('css')
    <style>
        .gallery .wrap{
            margin: 10px 20px;
        }
        .wrap .imgwrapper{
            justify-content: center;
            height: 250px;
        }
        .gallery img{
            margin: 20px 10px;
        }
    </style>
@endpush

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            <div class="row mb-4">
                <div class="col">
                    <h3>
                        {{ $produk->nama }}
                    </h3>
                </div>

                <div class="col">
                    <button data-target="#modalTambah" data-toggle="modal" class="btn btn-success d-block ml-auto">
                        <i class="fas fa-plus-circle    "></i>
                        Tambah Gambar
                    </button>
                </div>
            </div>
            <div class="gallery d-flex justify-content-center flex-wrap">
                @if (sizeof($datas) < 1)                    
                    <h1>
                        Belum ada gambar.
                    </h1>
                @else
                @foreach ($datas as $item)
                    <div class="wrap d-flex flex-column">
                        <div class="imgwrapper d-flex flex-column">
                            <img src="{{ url('assets/img/produk') }}/{{ $item->gambar }}" alt="" style="width: 200px">
                        </div>
                        <form method="post" class="d-block" onsubmit="return confirm('Hapus?')" action="{{ route('gambar_produk.destroy', $item->id)}}">
                            @csrf
                            @method("delete") 
                            <button class="btn btn-danger w-100">
                                <i class="fas fa-trash    "></i>
                                Delete
                            </button>
                        </form>
                    </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <div id="modalTambah" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Gambar Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form enctype="multipart/form-data" action="{{ route('gambar_produk.store') }}" method="post">
                @csrf
            <div class="modal-body">
                <input type="hidden" name="produk_id" value="{{ $produk->produk_id }}">
                <div class="form-group">
                    <label for="">File</label>
                    <input type="file" name="file" id="" class="form-control-file">
                    <small style="color: red">
                        Maximum Size 5MB
                    </small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>

@endsection