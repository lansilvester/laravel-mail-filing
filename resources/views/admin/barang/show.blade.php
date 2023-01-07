@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h3>Data Barang</h3>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-responsive" style="text-transform: capitalize">
                <tbody>
                    <tr>
                        <th>Nomor Surat</th>
                        <td>
                            {{ $data->id }}/BAST-BMD/@if(now()->format('n') == 1)
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
                            @endif/DKIPS/2022</b>
                        </td>
                    </tr>
                   
                    <tr>
                        <th>
                            Nama Barang
                        </th>
                        <td>
                            {{ $data->nama_barang}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Merk / Type
                        </th>
                        <td>
                            {{ $data->merk_type}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Nomor Seri
                        </th>
                        <td>
                            {{ $data->nomor_seri}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                         Tahun Pembuatan
                        </th>
                        <td>
                            {{ $data->tahun_pembuatan}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Warna
                        </th>
                        <td>
                            {{ $data->warna}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Processor
                        </th>
                        <td>
                            {{ $data->processor}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Memory (GB)
                        </th>
                        <td>
                            {{ $data->memory}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Penyimpanan (GB)
                        </th>
                        <td>
                            {{ $data->penyimpanan}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                        Ukuran Layar (Inch)
                        </th>
                        <td>
                            {{ $data->ukuran_layar}}
                        </td>
                    </tr>
                    <tr>
                        <th>Dibuat Pada</th>
                        <td>{{ showDateTime($data->created_at,'l, d-F-Y')}}</td>
                    </tr>
                    <tr>
                        <th>Dibuat Oleh</th>
                        <td>{{ $data->user->name }}</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                          <td colspan="2">
                            <a href="{{ route('barang.edit', ['barang'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i> Edit Barang</a>
                            <a href="{{ route('print_bast', ['id'=>$data->id]) }}" target="__blank" class="btn btn-success"><i class="fas fa-print"></i> Generate Berita Acara</a>
                        </td>  
                    </tr>
                </tfoot>
            </table>
        </div>   
        <div class="col-md-6">
            <h3>Data Pihak Kesatu</h3>
            <table class="table table-responsive mb-5">
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
            <hr>
            <h3>Data Pihak Kedua</h3>
            <table class="table table-responsive">
                    <tr>
                        <th>
                            Nama Pegawai (Pihak Kedua)
                        </th>
                        <td>
                            {{ $data->user->name}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            NIP
                        </th>
                        <td>
                            {{ $data->user->nip}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                           Jabatan
                        </th>
                        <td>
                            {{ $data->user->jabatan}}
                        </td>
                    </tr>
            </table>
        </div>
    </div>
</div>
@endsection