<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Garden - Perlengkapan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
                    <h2 class="mb-0"> </h2>
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

    <div class="mx-auto text-center py-5" style="max-width: 500px;">
      <h6 class="text-primary text-uppercase">Hasil Perhitungan</h6>
      <h1 class="display-5">Kesesuaian Sistem Penanaman</h1>
  </div>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">

              <div class="card-body">
                <table id="tblTanaman" class="table table-bordered table-striped">

                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Sistem</th>
                    <th>Nilai Preferensi</th>
                    <th>Presentase kecocokan </th>
                  
                  </tr>
                  </thead>
                    <tbody>
                      @foreach($hasil as $i => $listHasil)
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $listHasil['nama'] }}</td>
                        <td>{{ $listHasil['total'] }}</td>
                        <td>{{ $listHasil['persentase'] }}</td>
                      </tr>
                      @endforeach
                      </tbody>  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
 

</div>
</div>
</div>
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