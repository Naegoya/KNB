@extends('layouts.main')

@section('title', 'Form Foto Progresan')

@section('contents')
<form action="{{ isset($foto_progresan) ? route('foto_progresan.tambah.update', $foto_progresan->id) : route('foto_progresan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($foto_progresan) ? 'Form Edit Foto' : 'Form Tambah Foto Progresan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="id_foto_progresan">ID Foto Progresan</label>
              <input type="text" class="form-control" id="id_foto_progresan" name="id_foto_progresan" value="{{ isset($foto_progresan) ? $foto_progresan->id_foto_progresan : '' }}">
            </div>
            <div class="form-group">
                <label for="foto_progresan">Foto Progresan</label>
                <input type="text" class="form-control" id="foto_progresan" name="foto_progresan" value="{{ isset($foto_progresan) ? $foto_progresan->foto_progresan : '' }}">
              </div>
              <div class="form-group">
                                <label for="tanggal_update">Tanggal Update</label>
                                <input name="tanggal_update" type="date"
                                    class="form-control form-control-user @error('tanggal_update')is-invalid @enderror"
                                    id="exampleInputDate" placeholder="Tanggal Update"
                                    value="{{ isset($user) ? $user->tanggal_update : '' }}">
                                @error('tanggal_update')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="waktu_update">Waktu Update</label>
                                <input name="waktu_update" type="time"
                                    class="form-control form-control-user @error('waktu_update')is-invalid @enderror"
                                    id="exampleInputTime" placeholder="Waktu Update"
                                    value="{{ isset($user) ? $user->waktu_update : '' }}">
                                @error('waktu_update')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
