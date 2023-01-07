@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h2>Edit User</h2>
    <hr>
    <form action="{{ route('pegawai.update', $data_pegawai->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group mb-3">
            <label for="photo"><i class="bi bi-image"></i> Picture :</label>
            <input type="hidden" name="oldImage" value="{{ $data_pegawai->photo }}">
            @if($data_pegawai->photo)
                <img src="{{ asset('storage') }}/{{ $data_pegawai->photo }}" alt="Profile Photo" style="display:block;width:230px; margin:1em 0" class="img-preview img-fluid">
            @else
                <img class="img-preview img-fluid">
            @endif
            <input type="file" name="photo" value="" id="photo" class="@error('photo') is-invalid @enderror form-control" onchange="previewImage()">
            @error('photo')
                <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" class="@error('name') is-invalid @enderror form-control" value="{{ $data_pegawai->name }}" placeholder="Nama Pegawai" id="nama" name="name">
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="email">Email</label>
            <input type="email" class="@error('email') is-invalid @enderror form-control" value="{{ $data_pegawai->email }}" placeholder="Email Pegawai" id="email" name="email">
            @error('name')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nip">NIP</label>
            <input type="text" class="@error('nip') is-invalid @enderror form-control" value="{{ $data_pegawai->nip }}" placeholder="NIP Pegawai" id="nip" name="nip">
            @error('nip')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="nomor_hp">Nomor HP</label>
            <input type="text" class="@error('nomor_hp') is-invalid @enderror form-control" value="{{ $data_pegawai->nomor_hp }}" placeholder="Nomor HP Pegawai" id="nomor_hp" name="nomor_hp">
            @error('nomor_hp')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="@error('jabatan') is-invalid @enderror form-control" value="{{ $data_pegawai->jabatan }}" placeholder="Jabatan Pegawai" id="jabatan" name="jabatan">
            @error('jabatan')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        @if(Auth::user()->utype == 'SA')
        <div class="form-group mb-3">
            <label for="utype">Role</label>
            <select name="utype" class="@error('jabatan') is-invalid @enderror form-control" id="utype">
                <option value="A">Admin</option>
                <option value="SA">Super Admin</option>
            </select>
            @error('utype')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        @endif
        {{-- <div class="form-group mb-3">
            <label for="email">Photo</label>
            <input type="file" class="@error('email') is-invalid @enderror form-control" value="{{ old('email') }}" placeholder="Email Pegawai" id="email" name="email">
        </div> --}}
        <div class="form-group mb-5">
            <label for="password">Password</label>
            <input type="password" class="@error('password') is-invalid @enderror form-control" placeholder="********" id="password" name="password">
            @error('password')
            <p class="invalid-feedback">{{ $message }}</p>   
            @enderror
        </div>
        <button type="submit" class="btn btn-success btn-block"><i class="fas fa-check"></i> Submit</button>
    </form>
</div>
<script>
     function previewImage(){

        const image = document.querySelector('#photo');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        imgPreview.style.width = '200px';
        imgPreview.style.margin = '1em 0';


        const ofReader = new FileReader();
        ofReader.readAsDataURL(image.files[0]);

        ofReader.onload = function (oFREvent){
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection