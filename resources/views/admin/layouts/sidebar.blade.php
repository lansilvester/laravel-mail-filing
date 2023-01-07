<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" style="background: rgb(144, 9, 9)">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/Coat_of_arms_of_North_Sulawesi.svg/1200px-Coat_of_arms_of_North_Sulawesi.svg.png" alt="" class="img-fluid" style="width:80px">
        </div>
        <div class="sidebar-brand-text mx-3">Sulawesi Utara</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Operation
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if(Auth::user()->utype == 'SA')
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user"
            aria-expanded="true" aria-controls="user">
            <i class="fas fa-user fa-cog"></i>
            <span>User</span>
        </a>
        <div id="user" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Opsi:</h6>
                <a class="collapse-item" href="{{ route('pegawai.index') }}"><i class="fa fa-eye"></i> Lihat Semua Data</a>
                <a class="collapse-item" href="{{ route('pegawai.create') }}"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
        </div>
    </li>
    @endif
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#barang"
            aria-expanded="true" aria-controls="barang">
            <i class="fas fa-envelope fa-cog"></i>
            <span>Surat Barang</span>
        </a>
        <div id="barang" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Opsi:</h6>
                <a class="collapse-item" href="{{ route('barang.index') }}"><i class="fa fa-eye"></i> Lihat Semua Data</a>
                <a class="collapse-item" href="{{ route('barang.create') }}"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kendaraan"
            aria-expanded="true" aria-controls="kendaraan">
            <i class="fas fa-envelope fa-cog"></i>
            <span>Surat Kendaraan</span>
        </a>
        <div id="kendaraan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pilih Opsi:</h6>
                <a class="collapse-item" href="{{ route('kendaraan.index') }}"><i class="fa fa-eye"></i> Lihat Semua Data</a>
                <a class="collapse-item" href="{{ route('kendaraan.create') }}"><i class="fas fa-plus"></i> Tambah Data</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>