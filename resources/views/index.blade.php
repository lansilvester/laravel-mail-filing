<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/01e60f3c97.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg shadow">
      <div class="container py-1">
        <a class="navbar-brand" href="">
          <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Coat_of_arms_of_North_Sulawesi.svg/1200px-Coat_of_arms_of_North_Sulawesi.svg.png" class="m-auto d-inline" style="width:80px; margin-right:2em" alt="">
          Sulawesi Utara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><i class="bi bi-house"></i> Home</a>
            </li>
            
          </ul>
          @auth
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hallo, {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{ route('dashboard.index') }}"><i class="bi bi-layout-text-sidebar"></i> Dashboard</a></li>
              {{-- <li><a class="dropdown-item" href="#">Another action</a></li> --}}
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method='post'>
                  @csrf
                  <button type="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
          @else
          <a href="{{ route('login') }}" class="btn btn-primary me-3"><i class="bi bi-box-arrow-right"></i> Login</a>
          <a href="{{ route('register') }}" class="btn btn-outline-primary"><i class="bi bi-box-arrow-right"></i> register</a>
          @endauth
          {{-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
        </div>
      </div>
    </nav>

    <div class="container mt-5">
        <div id="carouselExampleIndicators" class="carousel slide shadow rounded" data-bs-ride="true" style="">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://mediamanado.com/wp-content/uploads/2018/04/IMG_20180404_172828.jpg" class="d-block w-100 rounded" style="" alt="...">
               <div class="carousel-caption d-none d-md-block">
                    <h5 class="shadow">Foto Kantor Gubernur</h5>
                    <p>Provinsi Sulawesi Utara</p>
                </div>
            </div>
            <div class="carousel-item">
              <img src="https://www.pilarsulut.com/wp-content/uploads/2021/10/kantor-gubernur-sulut-2021.jpg" class="d-block w-100 rounded" style="" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="shadow">Foto Kantor Gubernur</h5>
                    <p>Provinsi Sulawesi Utara</p>
                </div>
            </div>
        
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>