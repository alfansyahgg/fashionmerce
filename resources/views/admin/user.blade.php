@extends('admin.layouts.master')

@section('title')
    Manajemen User
@endsection

@section('heading')
    Manajemen User
@endsection

@section('content')
    @if (session('tambah'))
        <script>Swal.fire('Berhasil', 'Berhasil Tambah User', 'success')</script>
    @endif
    @if (session('update'))
        <script>Swal.fire('Berhasil', 'Berhasil Update User', 'success')</script>
    @endif
    @if (session('hapus'))
        <script>Swal.fire('Berhasil', 'Berhasil Hapus User', 'success')</script>
    @endif
    <div class="row mb-3">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
            <button data-toggle="modal" data-target="#modalTambah" class="btn btn-block btn-primary">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Tambah User
            </button>
        </div>
    </div>

    <div class="table-responsive">
        <table id="dataTable" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    <th>Level</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            {{ $item->address." - ".$item->zip_code." - ".$item->city }}
                        </td>
                        <td>{{ $item->level }}</td>
                        <td>
                            <button 
                                data-id="{{ $item->id }}"
                                data-name="{{ $item->name }}"
                                data-email="{{ $item->email }}"
                                data-password="{{ $item->password }}"
                                data-phone="{{ $item->phone_number }}"
                                data-city="{{ $item->city }}"
                                data-zip_code="{{ $item->zip_code }}"
                                data-address="{{ $item->address }}"
                                data-level="{{ $item->level }}"
                            class="btn btn-warning btn-edit w-100 mb-2">
                                <i class="fas fa-edit    "></i>
                                Edit
                            </button>
                            <form method="post" class="d-block" onsubmit="return confirm('Hapus?')" action="{{ route('user.destroy', $item->id)}}">
                                @csrf
                                @method("delete")                            
                                <button
                                {{ $item->id == 1 ? 'disabled' : '' }}
                                class="btn btn-danger w-100">
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
              <h5 class="modal-title">Tambah User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('user.store') }}" method="post">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control ia_nama">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control ia_email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control ia_password">
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
                    <input type="number" name="zip_code"class="form-control ia_zip_code">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="address" cols="30" rows="5" class="form-control ia_address"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" class="form-control sa_level">
                        <option class="oa_admin" value="admin">Admin</option>
                        <option class="oa_common" value="common">Common</option>
                    </select>
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


    <div id="modalEdit" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="formEditUser" action="" method="post">
                @csrf
                @method("PUT")
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control ie_name">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control ie_email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" placeholder="Kosongkan jika tidak ingin mengubah password." name="epassword" class="form-control ie_password">
                </div>
                <div class="form-group">
                    <label for="">Nomor HP</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">+62</span>
                        </div>
                        <input type="number" name="phone_number" class="form-control ie_phone_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Kota</label>
                    <input type="text" name="city" class="form-control ie_city">
                </div>
                <div class="form-group">
                    <label for="">Kode Pos</label>
                    <input type="number" name="zip_code" class="form-control ie_zip_code">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <textarea name="address" cols="30" rows="5" class="form-control ie_address"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Level</label>
                    <select name="level" class="form-control se_level">
                        <option class="oe_admin" value="admin">Admin</option>
                        <option class="oe_common" value="common">Common</option>
                    </select>
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
            $("table .btn-edit").on('click', function(){
                const id = $(this).attr('data-id')
                const name = $(this).attr('data-name')
                const email = $(this).attr('data-email')
                const password = $(this).attr('data-password')
                const phone = $(this).attr('data-phone')
                const city = $(this).attr('data-city')
                const zip_code = $(this).attr('data-zip_code')
                const address = $(this).attr('data-address')
                const level = $(this).attr('data-level')

                console.log(phone);

                let url =  "{{ route('user.update', 'id' ) }}"
                url = url.replace('id', id)

                if(name == 'admin'){ $("#modalEdit .ie_name").attr('readonly','true')  }
                $("#modalEdit .ie_name").val(name)
                $("#modalEdit .ie_email").val(email)
                // $("#modalEdit .ie_password").val(password)
                $("#modalEdit .ie_phone_number").val(phone)
                $("#modalEdit .ie_city").val(city)
                $("#modalEdit .ie_zip_code").val(zip_code)
                $("#modalEdit .ie_address").val(address)
                $("#modalEdit .se_level").val(level)

                $("#modalEdit #formEditUser").attr('action', url)
                $("#modalEdit").modal('show')
                
            })
        })
    </script>
@endpush