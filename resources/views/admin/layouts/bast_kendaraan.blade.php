<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BAST Kendaraan_{{ now()->format('d-m-Y_i_s') }}</title>
</head>
<style type="text/css">
/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        font: 12pt "Times";
        line-height: 1.15em;
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 0mm 10mm;
        margin: 20mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 50px 20px;
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
    .container-ttd{
        display: flex;
        justify-content: space-between;
        width:100%;
    }
    .child{
        flex:1;
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
    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;        
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
                    <img src="{{ asset('assets/img/logo-sulut.jpg') }}" alt="" width="100%">
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
            <div class="cop">

                <h3>BERITA ACARA SERAH TERIMA</h3>
                <b>Nomor : {{ $data->id }} /BAST-BMD/@if(now()->format('n') == 1)
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
            </div>
            <p style="text-indent: 1.5em; text-align: justify;">Pada hari ini {{ showDateTime($data->created_at,'l') }} Tanggal {{ showDateTime($data->created_at,'d') }} Bulan {{ showDateTime($data->created_at,'F') }} Tahun {{ showDateTime($data->created_at,'Y') }} bertempat di Dinas Komunikasi Informatika Persandian dan Statistik Daerah Provinsi Sulawesi Utara, yang bertanda tangan dibawah ini :</p>

            <ol type="I">
                <li>
                    <table style="border: none; margin-left:1em; margin-bottom:1em; width:100%">
                        <tr>
                            <td style="width:20%; vertical-align:top"">Nama</td>
                            <td>:</td>
                            <td><b>Dr. PRASENO HADI, MM.Ak</b></td>
                        </tr>
                        <tr>
                            <td style="width:20%; vertical-align:top"">NIP</td>
                            <td>:</td>
                            <td>19630620 198403 1 002</td>
                        </tr>
                        <tr>
                            <td style="width:20%; vertical-align:top"">Jabatan</td>
                            <td style="vertical-align: top">:</td>
                            <td>Kepala Dinas Komunikasi, Informatika, Persandian dan Statistik Daerah Provinsi Sulawesi Utara Selaku Pengguna Barang/Kuasa Pengguna Barang</td>
                        </tr>
                        <tr>
                            <td colspan=3>Selanjutnya disebut <b><u>PIHAK KESATU</u></b></td>
                        </tr>
                    </table>
                </li>
                <li>
                    <table style="border: none; margin-left:1em;width:100%">
                        <tr>
                            <td style="width:20%; vertical-align:top"">Nama</td>
                            <td>:</td>
                            <td style="width:80%">
                                <b>
                                    {{-- Disini nama dari variabel --}}
                                    {{ $data->user->name }}
                                </b>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:20%; vertical-align:top"">NIP</td>
                            <td>:</td>
                            <td style="width:80%">
                                    {{-- Disini NIP dari variabel --}}
                                    {{ $data->user->nip }}

                            </td>
                        </tr>
                        <tr>
                            <td style="width:20%; vertical-align:top"">Jabatan</td>
                            <td style="vertical-align: top">:</td>
                            <td style="width:80%">
                                    {{-- Disini jabatan dari variabel --}}
                                    {{ $data->user->jabatan }}

                            </td>
                        </tr>
                        <tr>
                            <td colspan=3>Selanjutnya disebut <b><u>PIHAK KEDUA</u></b></td>
                        </tr>
                    </table>
                </li>
            </ol>
            <p><b>PIHAK KESATU</b> telah menyerahkan kepada <b>PIHAK KEDUA</b>, 1 (satu) unit Kendaraan Dinas dengan spesifikasi :</p>

            <table style="border: none; margin-left:2em; margin-bottom:1em; width: 100%;padding:0">
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Nama Kendaraan</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->nama_kendaraan }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Merk/Type</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->merk_type }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Warna KB / TNKB</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->warna }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Nomor Polisi</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->nomor_polisi }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Tahun Pembuatan</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->tahun_pembuatan }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Tahun Pengadaan</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->tahun_pengadaan }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Nomor Rangka</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->nomor_rangka }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Nomor Mesin</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->nomor_mesin }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:30%;">Nomor BPKB</td>
                    <td>:</td>
                    <td style="width: 70%">{{ $data->nomor_bpkb }}</td>
                </tr>
                <tr style="vertical-align:top;">
                    <td style="width:20%;">Nama Pemilik</td>
                    <td>:</td>
                    <td>Dinas Komunikasi, Informatika, Persandian dan Statistika Daerah Provinsi Sulawesi Utara</td>
                </tr>
            </table>
            {{-- End tabel deskripsi barang --}}

            <p style="text-align: justify">Untuk kelancaran pelaksanaan tugas-tugas kedinasan pada unit kerja.<br>
                                            Selanjutnya <b>PIHAK KEDUA</b> menyatakan :</p>
            <ol type="a" style="margin:0px">
                <li>Bertanggungjawab atas penggunaan Kendaraan Dinas dengan seluruh resiko yang melekat atas barang milik daerah tersebut</li>
                <li>Akan mengembalikan Kendaraan Dinas setelah berakhirnya jangka waktu penggunaan atau masa jabatan telah berakhir kepada pengguna Barang/Kuasa Pengguna Barang.</li>
            </ol>
           

        </div>    
    
    </div>
    <div class="page">
        <div class="subpage">
            <p>Dengan ditandatanganinya Berita Acara Serah Terima barang milik daerah Pemerintah Provinsi Sulawesi Utara ini, maka <b>PIHAK KEDUA</b> bertanggung jawab sepenuhnya atas segala resiko yang terjadi atas barang milik daerah sesuai dengan ketentuan perundang-undangan.<p>
                <p style="text-align: center">Demikian Berita Acara Penerimaan ini dibuat dengan digunakan sebagaimana mestinya.</p>
                <div class="container-ttd">
                    <div class="child">
                        <table style="width:100%; text-align:center; font-size:12pt;line-height:1em; margin-bottom:2em">
                            <tr>
                                <td>PIHAK KESATU</td>
                            </tr>
                            <tr style="height:5em">
                                <td></td>
                            </tr>
                            <tr>
                                <td><U>Dr. PRASENO HADI, MM.Ak</U></td>
                            </tr>
                            <tr>
                                <td>PEMBINA UTAMA MADYA</td>
                            </tr>
                            <tr>
                            <td>NIP : 19630620 198403 1 002</td>
                            </tr>
                        </table>
                       
                    </div>
                    <div class="child">
                        <table style="width:100%; text-align:center; font-size:12pt;line-height:1em; margin-bottom:2em">
                            <tr>
                                <td>PIHAK KEDUA</td>
                            </tr>
                            <tr style="height:5em">
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <U>
                                        {{-- Nama pihak kedua variabel --}}
                                        {{ $data->user->name }}
                                    </U>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-transform: uppercase">
                                    {{-- Jabatan pihak kedua variabel --}}
                                    {{ $data->user->jabatan }}
                                </td>
                            </tr>
                            <tr>
                                <td>NIP : {{ $data->user->nip }}
                                    {{-- NIP pihak kedua variabel --}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">window.print();</script>