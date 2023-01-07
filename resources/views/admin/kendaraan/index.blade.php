@extends('admin.layouts.base')

@section('content')
<div class="container-fluid">

    <h2>Data Kendaraan</h2>
        
    <div class="my-3 d-flex" style="justify-content: space-between">
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        @if(Auth::user()->utype == 'SA')
        <a href="{{ route('export_kendaraan') }}" target="__blank" class="btn btn-info"><i class="fas fa-print"></i> Export Data</a>
        @endif
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <table class="table table-bordered table-hover" style="text-transform: capitalize">
        <thead>
            <tr>
                <th>#</th>
                <th>Nomor Surat</th>
                <th>Pegawai <small>Pihak Kedua</small></th>
                <th>Nama Kendaraan</th>
                <th>Merk/Type</th>
                <th>Nomor Polisi</th>
                <th>Tahun Pembuatan</th>
                <th>Tahun Pengadaan</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($data_kendaraan as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id }}/BAST-BMD/@if(now()->format('n') == 1)
                    I
                    @elseif(now()->format('n') == 2)
                    II
                    @elseif(now()->format('n') == 3)
                    III
                    @elseif(now()->format('n') == 4)
                    IV
                    @elseif(now()->format('n') == 5)
                    V
                    @elseif(now()->format('n') == 6)
                    VI
                    @elseif(now()->format('n') == 7)
                    VII
                    @elseif(now()->format('n') == 8)
                    VIII
                    @elseif(now()->format('n') == 9)
                    IX
                    @elseif(now()->format('n') == 10)
                    X
                    @elseif(now()->format('n') == 11)
                    XI
                    @elseif(now()->format('n') == 12)
                    XII
                    @else
                    @endif/DKIPS/2022</b></td>
                <td>{{ $data->user->name }}</td>
                <td>{{ $data->nama_kendaraan }}</td>
                <td>{{ $data->merk_type }}</td>
                <td>{{ $data->nomor_polisi }}</td>
                <td>{{ $data->tahun_pembuatan }}</td>
                <td>{{ $data->tahun_pengadaan }}</td>
                <td>{{ showDateTime($data->created_at,'l, d-F-Y') }}</td>
                <td>
                    <div class="d-flex" style="justify-content:space-around">
                        <a href="{{ route('kendaraan.show', ['kendaraan'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="{{ route('kendaraan.edit', ['kendaraan'=>$data->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <form action="{{ route('kendaraan.destroy',$data->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                       
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="text-center text-warning">
                    Data Kosong
                </td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">{{ $data_kendaraan->links() }}</td>
                <th>Total Data &nbsp;&nbsp;&nbsp;{{ $data_kendaraan->total() }}</th>
            </tr>
         
        </tfoot>
    </table>
    <hr>
    <div class="row">

        <table class="table table-bordered">
            <tr>
                <th>Pihak Kesatu</th>
                <td>Dr. PRASENO HADI, MM.Ak</td>
            </tr>
            <tr>
                <th>NIP</th>
                <td>19630620 198403 1 002</td>
            </tr>
            <tr>
                <th>Jabatan</th>
                <td>Kepala Dinas Komunikasi, Informatika, Persandian dan Statistik Daerah Provinsi Sulawesi Utara Selaku Pengguna Barang/Kuasa Pengguna Barang</td>
            </tr>
        </table>
    </div>
</div>
@endsection