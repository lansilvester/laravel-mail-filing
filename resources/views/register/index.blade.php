<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01e60f3c97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,900&display=swap" rel="stylesheet">
</head>
  <body>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card shadow border-0 mt-5">
                    <div class="card-header border-0">
                        <a href="/" class="btn btn-outline-secondary">Back</a>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Coat_of_arms_of_North_Sulawesi.svg/1200px-Coat_of_arms_of_North_Sulawesi.svg.png" class="m-auto mb-2 d-flex" style="width:150px" alt="">

                        <h3 class="fw-thin text-center">Please {{ $title }}</h3>
                    </div>
                    <div class="card-body">
                    <form action="/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="photo"><i class="bi bi-image"></i> Picture :</label>
                            <img class="img-preview img-fluid">
                            <input type="file" name="photo" value="" id="photo" class="@error('photo') is-invalid @enderror form-control" onchange="previewImage()">
                            @error('photo')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name"><i class="bi bi-person"></i> Nama :</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Ketikan Nama" class="@error('name') is-invalid @enderror form-control">
                            @error('name')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nip"><i class="bi bi-person"></i> NIP :</label>
                            <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Ketikan NIP Anda" class="@error('nip') is-invalid @enderror form-control">
                            @error('nip')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor_hp"><i class="bi bi-person"></i> Nomor HP :</label>
                            <input type="text" name="nomor_hp" value="{{ old('nomor_hp') }}" placeholder="Masukan Nomor HP Anda" class="@error('nomor_hp') is-invalid @enderror form-control">
                            @error('nomor_hp')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="jabatan"><i class="bi bi-person"></i> Jabatan :</label>
                            <input type="text" name="jabatan" value="{{ old('jabatan') }}" placeholder="Ketikan Jabatan" class="@error('jabatan') is-invalid @enderror form-control">
                            @error('jabatan')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                       
                        <div class="form-group mb-3">
                            <label for="email"><i class="bi bi-envelope"></i> Email :</label>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="Ketikan email" class="@error('email') is-invalid @enderror form-control">
                            @error('email')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <label for="password"><i class="bi bi-key"></i> Password :</label>
                            <input type="password" name="password" value="{{ old('password') }}" placeholder="Ketikan password" class="@error('password') is-invalid @enderror form-control">
                            @error('password')
                                <p class="invalid-feedback">{{ $message }}</p>   
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary w-100 mb-3" type="submit">Daftar</button>
                            <p>Sudah mendaftar? <a href="{{ route('login') }}">Login Sekarang</a></p>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
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
  </body>
</html>