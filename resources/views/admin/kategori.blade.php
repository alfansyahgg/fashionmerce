@extends('admin.layouts.master')

@section('title')
    Manajemen Kategori
@endsection

@section('heading')
    Manajemen Kategori
@endsection

@section('content')

    @if (session('tambah'))
        <script>Swal.fire('Berhasil', 'Berhasil Tambah Kategori', 'success')</script>
    @endif
    @if (session('update'))
        <script>Swal.fire('Berhasil', 'Berhasil Update Kategori', 'success')</script>
    @endif
    @if (session('hapus'))
        <script>Swal.fire('Berhasil', 'Berhasil Hapus Kategori', 'success')</script>
    @endif
    
<div class="row mb-3">
    <div class="col-md-9">

    </div>
    <div class="col-md-3">
        <button data-toggle="modal" data-target="#tambahModal" class="btn btn-block btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i>
            Tambah Kategori
        </button>
    </div>
</div>

<div class="table-responsive">
    <table id="dataTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategoris as $key => $item)
                <tr>
                    <td>
                        {{ $key+1 }}
                    </td>
                    <td>
                        {{ $item['nama'] }}
                    </td>
                    <td style="width: 20%">
                        <button data-id="{{ $item['kategori_id'] }}" data-kategori="{{ $item['nama'] }}" data-toggle="modal" data-target="#editModal" class="btn btn-warning btn-edit w-100">
                            <i class="fas fa-edit    "></i>
                            Edit
                        </button>
                        <form method="post" class="d-block" onsubmit="return confirm('Hapus?')" action="{{ route('kategori.destroy', $item['kategori_id'])}}">
                            @csrf
                            @method("delete")                            
                            <button class="btn btn-danger w-100 mt-2">
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

<div id="tambahModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('kategori.store') }}" method="post">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama" id="" class="form-control i_nama">
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


  <div id="editModal" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formEditKategori" action="" method="post">
            @csrf
            @method("PUT")
        <div class="modal-body">
            <div class="form-group">
                <label for="">Nama Kategori</label>
                <input type="text" name="nama" id="" class="form-control i_nama">
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


  @push('scripts')
      <script>
          $(document).ready(function(){

            $("table .btn-edit").on('click', function(){
                const kategori_id = $(this).attr('data-id')
                const nama = $(this).attr('data-kategori')

                let url =  "{{ route('kategori.update', 'id' ) }}"
                url = url.replace('id', kategori_id)
                $("#formEditKategori").attr('action', url)
                $("#formEditKategori .i_nama").val(nama)
            })

          })
      </script>
  @endpush

@endsection