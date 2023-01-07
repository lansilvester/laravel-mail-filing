@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h2>Tambah Kendaraan</h2>
    <hr>
    <form action="{{ route('kendaraan.store') }}" method="POST">
    @csrf
        <div class="form-group mb-3">
            <label for="nama_pegawai">Pegawai <small><sub>Pihak Kedua</sub></small></label>
            <select name="user_id" id="" class="form-control">
                <option value="">--Pilih Pegawai--</option>
                @foreach ($data_pegawai as $data)
                <option value="{{ $data->id }}">{{ $data->name }} / {{ $data->nip }}</option>
                @endforeach
            </select>
            @error('nama_pegawai')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nama_kendaraan">Nama Kendaraan</label>
            <input type="text" class="@error('nama_kendaraan') is-invalid @enderror form-control" value="{{ old('nama_kendaraan') }}" placeholder="Nama Kendaraan" id="nama_kendaraan" name="nama_kendaraan">
            @error('nama_kendaraan')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="merk_type">Merk/Type</label>
            <input type="text" class="@error('merk_type') is-invalid @enderror form-control" value="{{ old('merk_type') }}" placeholder="Merk/Type" id="merk_type" name="merk_type">
            @error('merk_type')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="warna">Warna</label>
            <input type="text" class="@error('warna') is-invalid @enderror form-control" value="{{ old('warna') }}" placeholder="Warna" id="warna" name="warna">
            @error('warna')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nomor_polisi">Nomor Polisi</label>
            <input type="text" class="@error('nomor_polisi') is-invalid @enderror form-control" value="{{ old('nomor_polisi') }}" placeholder="Nomor Polisi" id="nomor_polisi" name="nomor_polisi">
            @error('nomor_polisi')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="row"> 
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="tahun_pembuatan">Tahun Pembuatan</label>
                    <input type="text" class="@error('tahun_pembuatan') is-invalid @enderror form-control" value="{{ old('tahun_pembuatan') }}" placeholder="Tahun Pembuatan" id="tahun_pembuatan" name="tahun_pembuatan">
                    @error('tahun_pembuatan')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="tahun_pengadaan">Tahun pengadaan</label>
                    <input type="text" class="@error('tahun_pengadaan') is-invalid @enderror form-control" value="{{ old('tahun_pengadaan') }}" placeholder="Tahun pengadaan" id="tahun_pengadaan" name="tahun_pengadaan">
                    @error('tahun_pengadaan')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="nomor_rangka">Nomor Rangka</label>
                    <input type="text" class="@error('nomor_rangka') is-invalid @enderror form-control" value="{{ old('nomor_rangka') }}" placeholder="Nomor Rangka" id="nomor_rangka" name="nomor_rangka">
                    @error('nomor_rangka')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="nomor_mesin">Nomor Mesin</label>
                    <input type="text" class="@error('nomor_mesin') is-invalid @enderror form-control" value="{{ old('nomor_mesin') }}" placeholder="Nomor Mesin" id="nomor_mesin" name="nomor_mesin">
                    @error('nomor_mesin')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group mb-3">
                    <label for="nomor_bpkb">Nomor BPKB</label>
                    <input type="text" class="@error('nomor_bpkb') is-invalid @enderror form-control" value="{{ old('nomor_bpkb') }}" placeholder="Nomor BPKB" id="nomor_bpkb" name="nomor_bpkb">
                    @error('nomor_bpkb')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            
        </div>
    
        <button type="submit" class="btn btn-success btn-block mt-5"><i class="fas fa-check"></i> Submit</button>
    </form>
</div>
@endsection