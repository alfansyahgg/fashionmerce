@extends('admin.layouts.master')

@section('title')
    Manajemen Produk
@endsection

@section('heading')
    Manajemen Produk
@endsection

@section('content')
    @if (session('tambah'))
        <script>Swal.fire('Berhasil', 'Berhasil Tambah Produk', 'success')</script>
    @endif
    @if (session('update'))
        <script>Swal.fire('Berhasil', 'Berhasil Update Produk', 'success')</script>
    @endif
    @if (session('hapus'))
        <script>Swal.fire('Berhasil', 'Berhasil Hapus Produk', 'success')</script>
    @endif
    <div class="row mb-3">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <button data-toggle="modal" data-target="#modalTambah" class="btn btn-block btn-primary">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Produk
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="dataTable" class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi Produk</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $key => $item)
                    <tr>
                        <td>
                            {{ $key+1 }}
                        </td>
                        <td>
                            {{ $item['nama'] }}
                        </td>
                        <td>
                            {{ $item['nama_kategori'] }}
                        </td>
                        <td style="width: 12%">
                           Rp. {{ number_format($item['harga'], 0, 0, '.') }}
                        </td>
                        <td>
                            {{ $item['stok'] }}
                        </td>
                        <td>
                            {{ $item['deskripsi'] }}
                        </td>
                        <td>
                            {{ $item['slug'] }}
                        </td>
                        <td>
                            <a  href="{{ route('gambar_produk.show', $item['produk_id']) }}" class="btn btn-success w-100 mb-2">
                                <i class="fas fa-images    "></i>
                                Atur Gambar Produk
                            </a>
                            <a  href="{{ route('produk.edit', $item['produk_id']) }}" class="btn btn-warning btn-edit w-100 mb-2">
                                <i class="fas fa-edit    "></i>
                                Edit
                            </a>
                            <form method="post" class="d-block" onsubmit="return confirm('Hapus?')" action="{{ route('produk.destroy', $item['produk_id'])}}">
                                @csrf
                                @method("delete")                            
                                <button class="btn btn-danger w-100">
                                    <i class="fas fa-trash    "></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

    <div id="modalTambah" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Tambah Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('produk.store') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama Produk</label>
                    <input required type="text" name="nama" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kategori Produk</label>
                    <select required name="kategori_id" id="" class="form-control">
                        @foreach ($kategoris as $item)
                            <option value="{{ $item['kategori_id'] }}">{{ $item['nama'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Harga Produk</label>
                    <input required type="number" name="harga" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Stok Produk</label>
                    <input required type="number" name="stok" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Produk</label>
                    <textarea required name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
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

@push('scripts')
    <script>
        $(document).ready(function(){
            
        })
    </script>
@endpush