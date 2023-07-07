<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Garden - Perlengkapan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content=" " name="keywords">
    <meta content=" " name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href=" {{ url('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url ('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+62904567019</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex align-items-center justify-content-center">
                    <a href="index.html" class="navbar-brand ms-lg-5">
                        <h1 class="m-0 display-4 text-primary"><span class="text-secondary">Green</span>Garden</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-5">
        <a href="index.html" class="navbar-brand d-flex d-lg-none">
            <h1 class="m-0 display-4 text-secondary"><span class="text-white">Green</span>Garden</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link">Beranda</a>
                    <a href="/hidroponik" class="nav-item nav-link ">Hidroponik</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perlengkapan</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/greenhouse">Greenhouse</a>
                            <a class="dropdown-item" href="/perlengkapan">Alat Perlengkapan</a>
                        </div>
                    </div>
                    <a href="/penanam/add" class="nav-item nav-link active">Sistem Tanaman</a>
                    <a href="/artikel" class="nav-item nav-link">Artikel</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">SPK Tanaman</h6>
            <h1 class="display-5">Sistem Pendukung Keputusan</h1>
        </div>

        <div class="col-lg-15 col-md-15 wow fadeInUp">
            <form method="POST" action="{{ url('/penanam/store') }}">
                @csrf

                <div class="row g-3">

                    <div class="col-md-15">
                        <div class="form-floating">
                            <input name="nam" id="nam" type="text" class="form-control" placeholder="Nama">
                            <label for="nam">Nama</label>
                        </div>
                    </div>
                    <div class="col-md-15">
                        <div class="form-floating">
                            <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                                <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input name="no_hp" id="no_hp" type="text" class="form-control" placeholder="No HP">
                            <label for="no_hp">Nomor Telepon</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat">
                            <label for="alamat"> Alamat</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nama Tanaman">
                            <label for="name">Nama Tanaman</label>
                            </div>
                        </div>
                    <div class="col-12">
                        <div class="form-floating">
                             <div class="form-floating">
                                    <input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tanggal Penanaman">
                                    <label for="tgl">Tanggal Penanaman</label>
                                </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c1" id="c1">
                            @foreach($phAir as $i => $ph_air)
                            <option value="{{ $ph_air->id }}" {{ "$ph_air->id" == old('c1') ? 'selected' : ''}}>{{ $ph_air->ph_air }}</option>
                            @endforeach
                            </select>
                            <label for="c1">Ph Air</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c2" id="c2">
                             @foreach($mediaTanam as $i => $media_tanam)
                            <option value="{{ $media_tanam->id }}" {{ "$media_tanam->id" == old('c2') ? 'selected' : ''}}>{{ $media_tanam->media_tanam }}</option>
                            @endforeach
                            </select>
                            <label for="c2">Jenis Air</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c3" id="c3">
                            @foreach($jenisAir as $i => $jenis_air)
                            <option value="{{ $jenis_air->id }}" {{ "$jenis_air->id" == old('c3') ? 'selected' : ''}}>{{ $jenis_air->jenis_air }}</option>
                            @endforeach
                            </select>
                            <label for="c3">Jenis Air</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c4" id="c4">
                             @foreach($tingkatPerakitan as $i => $tingkat_perakitan)
                            <option value="{{ $tingkat_perakitan->id }}" {{ "$tingkat_perakitan->id" == old('c4') ? 'selected' : ''}}>{{ $tingkat_perakitan->tingkat_perakitan }}</option>
                            @endforeach
                            </select>
                            <label for="c4">Tingkat Perakitan</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c5" id="c5">
                            @foreach($lokasiTanam as $i => $lokasi_tanam)
                            <option value="{{ $lokasi_tanam->id }}" {{ "$lokasi_tanam->id" == old('c5') ? 'selected' : ''}}>{{ $lokasi_tanam->lokasi_tanam }}</option>
                            @endforeach
                            </select>
                            <label for="c5">Lokasi Tanam</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-control" name="c6" id="c6">
                            @foreach($penggunaanListrik as $i => $penggunaan_listrik)
                            <option value="{{ $penggunaan_listrik->id }}" {{ "$penggunaan_listrik->id" == old('c6') ? 'selected' : ''}}>{{ $penggunaan_listrik->penggunaan_listrik }}</option>
                             @endforeach
                        </select>
                        <label for="c6">Penggunaan Listrik</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                    </div>
                </div>
            </form>
        </div>



    
                <!-- Comment Form End -->
            </div>
        </div>

 <!-- ======= Footer ======= -->
 <footer id="footer">
  <div class="container">
  <h3>Green Garden</h3> 
  <div class="copyright">
      &copy; Copyright <strong><span>Green Garden</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
  </div>
</footer><!-- End Footer -->

<!-- Back to Top -->
<a href="#" class="btn btn-secondary py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>


</body>

</html>