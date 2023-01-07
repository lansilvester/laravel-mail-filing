@extends('admin.layouts.base')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            Dashboard
        </h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        @if(Auth::user()->utype == 'SA')
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('pegawai.index') }}">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Pegawai</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $data_pegawai->count() }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <a href="{{ route('barang.index') }}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Surat Berita Acara Barang</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $data_barang->count() }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                    <a href="{{ route('kendaraan.index') }}">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Jumlah Surat Berita Acara Kendaraan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    {{ $data_kendaraan->count() }}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-envelope fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </a>
                </div>
        </div>

    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-6">
            <a href="{{ asset('assets/BAST Kendaraan.pdf') }}" target="__blank" class="btn btn-success mb-4 mr-3"><i class="fas fa-file"></i> Template Berita Acara Kendaraan</a>
            <a href="{{ asset('assets/BAST Barang.pdf') }}" target="__blank" class="btn btn-success mb-4"><i class="fas fa-file"></i> Template Berita Acara Barang</a>
        </div>
    </div>

</div>
<style>
    .card a:hover{
        text-decoration: none;
    }
</style>
@endsection