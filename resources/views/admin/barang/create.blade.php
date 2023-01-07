@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h2>Tambah Barang</h2>
    <hr>
    <form action="{{ route('barang.store') }}" method="POST">
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
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="@error('nama_barang') is-invalid @enderror form-control" value="{{ old('nama_barang') }}" placeholder="Nama Barang" id="nama_barang" name="nama_barang">
            @error('nama_barang')
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
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="nomor_seri">Nomor Seri</label>
                    <input type="text" class="@error('nomor_seri') is-invalid @enderror form-control" value="{{ old('nomor_seri') }}" placeholder="Nomor Seri" id="nomor_seri" name="nomor_seri">
                    @error('nomor_seri')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="tahun_pembuatan">Tahun Pembuatan</label>
                    <input type="text" class="@error('tahun_pembuatan') is-invalid @enderror form-control" value="{{ old('tahun_pembuatan') }}" placeholder="Tahun Pembuatan" id="tahun_pembuatan" name="tahun_pembuatan">
                    @error('tahun_pembuatan')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group mb-3">
            <label for="warna">Warna</label>
            <input type="text" class="@error('warna') is-invalid @enderror form-control" value="{{ old('warna') }}" placeholder="Warna" id="warna" name="warna">
            @error('warna')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="processor">Processor</label>
            <input type="text" class="@error('processor') is-invalid @enderror form-control" value="{{ old('processor') }}" placeholder="Processor" id="processor" name="processor">
            @error('processor')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="memory">Memory <small><sub>Satuan GB</sub></small></label>
                    <input type="text" class="@error('memory') is-invalid @enderror form-control" value="{{ old('memory') }}" placeholder="Memory" id="memory" name="memory">
                    @error('memory')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
   
                <div class="form-group mb-3">
                    <label for="penyimpanan">Penyimpanan <small><sub>Satuan GB</sub></small></label>
                    <input type="text" class="@error('penyimpanan') is-invalid @enderror form-control" value="{{ old('penyimpanan') }}" placeholder="Penyimpanan" id="penyimpanan" name="penyimpanan">
                    @error('penyimpanan')
                    <p class="invalid-feedback">{{ $message }}</p>   
                    @enderror
                </div>
        
            </div>
        </div>

        <div class="form-group mb-3">
            <label for="ukuran_layar">Ukuran Layar <small><sub>Satuan Inch</sub></small></label>
            <input type="text" class="@error('ukuran_layar') is-invalid @enderror form-control" value="{{ old('ukuran_layar') }}" placeholder="Ukuran Layar" id="ukuran_layar" name="ukuran_layar">
            @error('ukuran_layar')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
    
        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check"></i> Submit</button>
    </form>
</div>
@endsection