@extends('admin.layouts.app')

@section('title', 'Data Karyawan')

@section('data-karyawan-active', 'active')

@section('content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @if (session()->has('tambah'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('tambah') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session()->has('perbarui'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('perbarui') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @elseif(session()->has('hapus'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('hapus') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          @endif
          <div class="card">
            <div class="card-header">
              <div class="card-tools float-left">
                <div class="input-group input-group-sm">
                  <a href="/admin/data-karyawan/create" class="btn btn-primary">Tambah</a>
                </div>
              </div>
              {{-- <div class="card-tools float-right">
                <form action="/admin/data-karyawan">
                  <div class="input-group input-group-sm" style="width: 300px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search"
                      value="{{ request('table_search') }}">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div> --}}
            </div>
            <div class="card-body">
              @if ($count <= 0)
                <h3 class="text-center">Data Karyawan Belum Ada!</h3>
              @else
                <table class="table table-bordered text-center">
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Foto</th>
                      <th>Nama</th>
                      <th>NIK</th>
                      <th>Jabatan</th>
                      <th>Divisi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                          <img src="{{ asset('storage/' . $user->foto) }}" alt="$user->nama" class="img-thumbnail"
                            style="max-height: 100px">
                        </td>
                        <td>{{ $user->nama }}</td>
                        <td>{{ $user->nik }}</td>
                        <td>{{ $user->jabatan->nama }}</td>
                        <td>{{ $user->divisi->nama }}</td>
                        <td>
                          <a href="/admin/data-karyawan/{{ $user->id }}" class="btn btn-info">Detail</a>
                          <a href="/admin/data-karyawan/{{ $user->id }}/edit" class="btn btn-warning">Ubah</a>
                          <form action="/admin/data-karyawan/{{ $user->id }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              @endif
            </div>
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 justify-content-center">
                {{ $users->links() }}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
