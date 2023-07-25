@extends('layouts.main')

@section('title', 'Data Foto Progresan')

@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <form action="{{ route('foto_progresan.search') }}" method="GET">
          <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" name="query" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
    <div class="card-body">
        <a href="{{ route('foto_progresan.tambah') }}" class="btn btn-success mb-3"><i class="fas fa-plus"></i>&nbsp;&nbsp;&nbsp;Tambah Jenis Cucian</a>
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>ID Progresan</th>
              <th>Foto Progresan</th>
              <th>Tanggal Update</th>
              <th>Waktu Update</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->id_foto_progresan }}</td>
                <td>{{ $row->foto_progresan }}</td>
                <td>{{ $row->tanggal_update }}</td>
                <td>{{ $row->waktu_update }}</td>

                <td>
                    <a href="{{ route('foto_progresan.edit', $row->id) }}" class="btn btn-warning">Edit &nbsp;&nbsp;&nbsp;<i class="fas fa-pen"></i></a>
                    <a href="{{ route('foto_progresan.hapus', $row->id) }}" class="btn btn-danger">Hapus &nbsp;&nbsp;&nbsp;<i class="fas fa-trash-alt "></i></a>
            </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
