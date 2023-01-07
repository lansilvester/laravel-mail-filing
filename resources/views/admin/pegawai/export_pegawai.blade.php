<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Export Data Barang_{{ now()->format('d-m-Y_i_s') }}</title>
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 12 "Times";
        line-height: 1.15em;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        min-height: 210mm;
        width: 297mm;
        padding: 0mm 10mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 30px 20px;
        /* border: 5px red solid; */
        height: 257mm;
        /* outline: 2cm #FFEAEA solid; */
    }
    .cop{
        text-align: center;
        line-height: .3;
    }
    .cop h3{
        text-decoration: underline;
    }
    .top-cop{
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom:3px solid black;

    }
    .top-cop-img{
        flex:1.5;
        margin-right:1em;
    }
    .top-cop-title{
        flex:7;
        text-align:center;
        line-height: 15pt;
    }
    .container-ttd{
        display: flex;
        justify-content: space-between;
        width:100%;
    }
    .child{
        flex:1;
    }
    table{
        border-collapse: collapse;
    }
    table tr td{
        padding:5px
    }
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        @page{
            size:landscape;
        }
        html, body {
            height: 210mm;
            width: 297mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<body>
<div class="book">
    <div class="page">
        <div class="subpage">    
            <div class="top-cop">
                <div class="top-cop-img">
                    <img src="{{ asset('assets/img/logo-sulut.jpg') }}" alt="" width="60%">
                </div>
                <div class="top-cop-title">
                    <h3 style="margin:0">PEMERINTAH PROVINSI SULAWESI UTARA</h3>
                    <h1 style="line-height:1em;margin:0;padding:0">DINAS KOMUNIKASI, INFORMATIKA,
                        PERSANDIAN DAN STATISTIK DAERAH
                    </h1>
                    <h5 style="margin:0">Jl. 17 Agustus No. 69 Telp. (0431) 865559 Fax (0431) 865471 Manado 95119<br>
                        Website : http://sulutprov.go.id E-mail : dkips@sulutprov.go.id
                    </h5>
                </div>                
            </div>
            <p style="text-align: right">
            Manado, {{ showDateTime(now(),'d-F-Y') }}
            </p>
            <h3 align=center>Data Pegawai</h3>
            <table border=1 style="margin:1em 0" width="100%">
                <tr>
                    <th>No.</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Nomor HP</th>
                    <th>Level</th>
                    <th>Surat yang dibuat</th>
                </tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($data_pegawai as $data)
                    
                <tr>
                    <td align="center">{{ $no++ }}</td>
                    <td>{{ $data->nip }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->nomor_hp }}</td>
                    <td>
                        @if ( $data->utype == 'SA')
                            Super Admin
                        @endif
                        @if ( $data->utype == 'A')
                            Admin
                        @endif
                    <td>
                        {{ $data->barang->count() }}
                    </td>
                </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">window.print();</script>