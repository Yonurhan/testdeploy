<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduCenter</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<style>
    .navbar .nav-link{
        position: relative;
        color: #133E87;
        transition: color 0.2s ease;
    }
    .navbar .nav-link:hover {
        color: #133E87;
    }
    .navbar .nav-link:hover::after{
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #133E87;
    }
    #ButtonDaftar{
        background-color: #133E87;
        color: #CBDCEB;
        padding: 10px 40px;
        border-radius: 50px;
        transition: background-color 0.2s ease, color 0.2s ease, transform 0.2s ease;
    }
    #ButtonDaftar:hover{
        background-color: #CBDCEB;
        color: #133E87;
    }
</style>

<body style="background-color: #F3F3E0;">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class ="col">
            <nav class="navbar fixed-top navbar-expand-lg" style="background-color: #F3F3E0;">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img src="{{asset('storage/logoEduCenter.png')}}" alt="EduCenterLogo" class="img-fluid" style="max-width: 100px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUtama" aria-controls="navbarUtama" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarUtama">
                    <div class="d-flex justify-content-center w-100">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="/">Beranda</a>
                            </li>
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="{{ route('cari-materi') }}">Akses Materi</a>
                            </li>
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="{{ route('cari-mentor') }}">Cari Mentor</a>
                            </li>
                            <!-- ini buat admin doang -->
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="{{ route('tambah-jadwal') }}">Tambah Jadwal</a>
                            </li>
                            <li class="nav-item me-4">
                            <a class="nav-link fw-bold" href="#">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>
                        <a href="{{ route('daftar') }}" class="btn ms-auto rounded-pill fw-bold" id="ButtonDaftar">Daftar</a>

                        <!-- <button class="btn ms-auto rounded-pill fw-bold" id="ButtonDaftar" href="{{route(name: 'daftar')}}">Daftar</button> -->
                    </div>
                </div>
            </nav>
            </div>
        </div>
        <div class="row pt-5" style="background-color: #CBDCEB;">
            <div class="col">@yield('content')</div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
                <ul class="navbar-nav mb-2 mb-lg-0" id="footer">
                <img src="{{asset('storage/logoEduCenter.png')}}" alt="EduCenterLogo" class="img-fluid" style="max-width: 100px;">
                <li class="nav-item me-4"><a class="nav-link" href="/" id="footer" style="color: #133E87;">Beranda</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="{{ route('tentang-kami') }}" id="footer" style="color: #133E87;">Tentang Kami</a></li>
                <li class="nav-item me-4"><a class="nav-link" href="#" id="footer" style="color: #133E87;">Hubungi Kami</a></li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">&copy;2024 EduCenter. All Right Reserved</div>
            <br>
            <br>
        </div>
        </nav>
    </div>
</body>
</html>
