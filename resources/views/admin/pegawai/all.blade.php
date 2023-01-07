@extends('admin.layouts.base')

@section('content')
<div class="container-fluid">

    <h2>Data Seluruh User</h2>
        
    <div class="my-3 d-flex" style="justify-content: space-between">
        @if(Auth::user()->utype == 'SA')
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
        @endif
        <a href="{{ route('export_pegawai') }}" target="__blank" class="btn btn-info"><i class="fas fa-print"></i> Export Data</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jabatan</th>
                <th>NIP</th>
                <th>Nomor HP</th>
                <th>Role</th>
                <th>Surat yang dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @forelse ($data_pegawai as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>
                        @if($data->photo)
                        <img class="img-profile rounded shadow"  src="{{ asset('storage') }}/{{ $data->photo }}" width="150px">

                        @else
                        <img class="img-profile rounded-circle"  src="{{ asset('admin/img/undraw_profile.svg') }}" width="150px">
                        @endif
                    </td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>
                        {{ $data->jabatan }}
                    </td>
                    <td>
                        {{ $data->nip }}
                    </td>
                    <td>
                        {{ $data->nomor_hp }}
                    </td>
                    <td>
                            @if ( $data->utype == 'SA')
                                Admin
                            @endif
                            @if ( $data->utype == 'A')
                                Pegawai
                            @endif
                    </td>
                    <td>
                        {{ $data->barang->count() + $data->kendaraan->count() }}
                    </td>
                    <td>
                        <div class="d-flex" style="justify-content:space-around">
                            @if(Auth::user()->utype == 'SA')
                                    <a href="{{ route('pegawai.show', ['pegawai'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('pegawai.edit', ['pegawai'=>$data->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('pegawai.destroy',$data->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                           @endif
                           @if(Auth::user()->utype == 'A')
                           @if($data->utype !== 'SA')
                                <a href="{{ route('pegawai.show', ['pegawai'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('pegawai.edit', ['pegawai'=>$data->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                <form action="{{ route('pegawai.destroy',$data->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form>
                                @else
                                <a href="{{ route('pegawai.show', ['pegawai'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>

                           @endif
                           @endif
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="10" class="text-center text-warning">Data Kosong</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="9">{{ $data_pegawai->links() }}</td>
                <th>Total Data &nbsp;&nbsp;&nbsp;{{ $data_pegawai->total() }}</th>
            </tr>
         
        </tfoot>
    </table>
</div>
@endsection