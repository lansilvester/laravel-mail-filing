@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h1>Data Pegawai</h1>
    <table class="table">
        <tbody>
            <tr>
                <td colspan="2" class="text-center">
                    @if($data->photo)
                        <img class="img-profile rounded shadow"  src="{{ asset('storage') }}/{{ $data->photo }}" width="200px">
                    @else
                    <img class="img-profile rounded-circle"  src="{{ asset('admin/img/undraw_profile.svg') }}">
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Nama
                </th>
                <td>
                    {{ $data->name}}
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    {{ $data->email}}
                </td>
            </tr>
            <tr>
                <th>
                    NIP
                </th>
                <td>
                    {{ $data->nip}}
                </td>
            </tr>
            <tr>
                <th>
                    Jabatan
                </th>
                <td>
                    {{ $data->jabatan}}
                </td>
            </tr>
            <tr>
                <th>
                    Nomor HP
                </th>
                <td>
                    {{ $data->nomor_hp}}
                </td>
            </tr>
            <tr>
                <th>
                    Role
                </th>
                <td>
                    @if ($data->utype == 'SA')
                        <span class="btn btn-outline-primary">Admin</span>
                    @endif
                    @if ($data->utype == 'A')
                        <span class="btn btn-outline-info">Pegawai</span>
                    @endif
                </td>
            </tr>
            <tr>
                <th>
                    Password
                </th>
                <td>
                    <b>
                       ********
                    </b>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="text-center">
                @if (Auth::user()->utype !== 'SA')
                    @if($data->utype == 'A')
                    <td colspan="2"><a href="{{ route('pegawai.edit', ['pegawai'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i> Update Profile</a></td>
                    @endif
                    @endif
                    
                @if(Auth::user()->utype == 'SA')
                    <td colspan="2"><a href="{{ route('pegawai.edit', ['pegawai'=>$data->id]) }}" class="btn btn-info"><i class="fas fa-edit"></i> Update Profile</a></td>
                @endif
            </tr>
        </tfoot>
    </table>
</div>
@endsection