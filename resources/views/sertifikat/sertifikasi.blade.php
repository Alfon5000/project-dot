@extends('layouts.app')

@section('title', 'Sertifikat Kompetensi')

@section('sertifikat', 'active')

@section('sertifikat-sertifikasi', 'active')

@section('content')
  <div class="container my-5">
    <h2>@yield('title')</h2>
    @if ($count > 0)
      <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Nomor Sertifikasi</th>
            <th scope="col">Nama Sertifikasi</th>
            <th scope="col">Tanggal Sertifikat</th>
            <th scope="col">Tanggal Kadaluarsa</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sertifikatKompetensis as $sertifikatKompetensi)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $sertifikatKompetensi->sertifikasi->no_sertifikat }}</td>
              <td>{{ $sertifikatKompetensi->sertifikasi->nama }}</td>
              <td>{{ $sertifikatKompetensi->tanggal_terbit }}</td>
              <td>{{ $sertifikatKompetensi->tanggal_kadaluarsa }}</td>
              <td>
                @if ($sertifikatKompetensi->status == 'Berlaku')
                  <span class="badge text-bg-primary">{{ $sertifikatKompetensi->status }}</span>
                @else
                  <span class="badge text-bg-primary">{{ $sertifikatKompetensi->status }}</span>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
        <tfoot>
          {{ $sertifikatKompetensis->links() }}
        </tfoot>
      </table>
    @else
      <div class="alert alert-danger" role="alert">
        Belum Ada @yield('title')!
      </div>
    @endif
  </div>
@endsection
