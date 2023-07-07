<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Garden- Artikel</title>
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
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0"></h2>
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
                    <a href="/hidroponik" class="nav-item nav-link">Hidroponik</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perlengkapan</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" {{ ($title === "Greenhouse") ? 'active' : '' }} href="/greenhouse">Greenhouse</a>
                            <a class="dropdown-item" {{ ($title === "Drip System") ? 'active' : '' }} href="/perlengkapan">Alat Perlengkapan</a>
                        </div>
                    </div>
                    <a href="/penanam/add" class="nav-item nav-link">Sistem Tanaman</a>
                    <a href="/artikel" class="nav-item nav-link active">Artikel</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Blog Start -->
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Artikel</h6>
            <h1 class="display-5">Artikel Seputar Tanaman Hidroponik</h1>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="img/service-5.jpg" alt="">
                            <a class="blog-overlay" href="https://www.kompas.com/food/read/2020/07/02/091800675/tips-tanam-sayuran-dengan-metode-hidroponik-di-ruangan-tertutup-cocok-untuk">
                                <h4 class="text-white">Tips Tanam Sayuran dengan Metode Hidroponik di Ruangan Tertutup, Cocok untuk Anak Kos</h4>
                                <span class="text-white fw-bold">27 Mei 2023</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2018/03/sayur-mayur-Cropped-1.jpg?fit=500%2C500&ssl=1" alt="">
                            <a class="blog-overlay" href="https://www.liputan6.com/news/read/4314751/budidaya-hidroponik-digandrungi-warga-bekasi-selama-pandemi-covid-19">
                                <h4 class="text-white">Budidaya Hidroponik Digandrungi Warga Bekasi Selama Pandemi Covid-19</h4>
                                <span class="text-white fw-bold">10 Maret 2023</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://markusyon.files.wordpress.com/2019/05/hidroponik-1-mesinpertanian.jpg?w=500" alt="">
                            <a class="blog-overlay" href="https://www.idntimes.com/life/diy/dian-arthasalina/8-langkah-mudah-bikin-kebun-hidroponik-sendiri-di-rumah">
                                <h4 class="text-white">8 Cara Membuat Kebun Tanaman Hidroponik Sendiri di Rumah</h4>
                                <span class="text-white fw-bold">4 Januari 2023</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://images.tokopedia.net/img/cache/500-square/product-1/2019/11/15/81316716/81316716_897b11a7-b4db-46c3-9b38-b0c360f83b64_1000_1000.jpg" alt="">
                            <a class="blog-overlay" href="https://id.quora.com/Apakah-air-pada-tanaman-hidroponik-harus-mengalir">
                                <h4 class="text-white">Apakah air pada tanaman hidroponik harus mengalir?</h4>
                                <span class="text-white fw-bold">Desember 15 2023</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://i0.wp.com/blogidn.com/wp-content/uploads/2020/09/busa-sebagai-pengganti-media-tanam-rockwool.jpg?fit=500%2C500&ssl=1" alt="">
                            <a class="blog-overlay" href="https://banten.inews.id/read/97792/tanaman-hidroponik-salah-satu-cara-alternatif-mempercantik-rumah">
                                <h4 class="text-white">Tanaman Hidroponik Salah Satu Cara Alternatif Mempercantik Rumah</h4>
                                <span class="text-white fw-bold">2 Desember 2022</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://brdsg.com/img/800/bsob0d3ebsoftpszou_2/hyMljitM8vdpfXkhyQIsqnD9qIMbX6SuqI6bg82U5RCg.jpg" alt="">
                            <a class="blog-overlay" href="https://www.idntimes.com/science/experiment/sari-magfirah-1/budidaya-tanaman-hidroponik-c1c2">
                                <h4 class="text-white">5 Hal yang Diperhatikan Saat Budidaya Tanaman Hidroponik</h4>
                                <span class="text-white fw-bold">18 November 2022</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://i.pinimg.com/564x/a7/d9/5e/a7d95e3271a8e7958ddfdc00f8ed652d.jpg" alt="">
                            <a class="blog-overlay" href="https://www.atmago.com/berita-warga/tips-agar-akar-tanaman-hidroponik-putih-bersih_33148c8c-005e-47b2-9f0c-3f2fd35c7204">
                                <h4 class="text-white">Tips agar akar tanaman hidroponik putih bersih</h4>
                                <span class="text-white fw-bold">1 November 2022</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                            <img class="img-fluid" src="https://i.pinimg.com/564x/80/16/83/8016833ea4ed3a9e79752bbb1e3e2021.jpg" alt="">
                            <a class="blog-overlay" href="https://paragram.id/berita/hidroponik-untuk-pemula-pakai-plastik-uv-gampang-kok-gengs-13898">
                                <h4 class="text-white">Hidroponik Untuk Pemula Pakai Plastik UV, Gampang Kok Gengs</h4>
                                <span class="text-white fw-bold">23 sepetember 2022</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-item position-relative overflow-hidden">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog list End -->

            <!-- Sidebar Start -->
            <div class="col-lg-4">
                <!-- Category Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Kategori</h2>
                    <div class="d-flex flex-column justify-content-start bg-primary p-4">
                        <a class="fs-5 fw-bold text-white mb-2" href="https://prakerja.zenpro.id/sistem-hidroponik-wick/"><i class="bi bi-arrow-right me-2"></i>Sistem Wick System</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="https://prakerja.zenpro.id/mengenal-hidroponik-deep-water-culture/"><i class="bi bi-arrow-right me-2"></i>Sistem Deep Water Culture</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="https://www.rumah.com/panduan-properti/aeroponik-31765"><i class="bi bi-arrow-right me-2"></i>Sistem Aeroponik</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="https://bibitonline.com/artikel/sistem-drip-atau-irigasi-tetes-hidroponik"><i class="bi bi-arrow-right me-2"></i>Sistem Drip</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="https://sites.google.com/site/berkebun160/pengertian-hidroponik-ebb-and-flow-system"><i class="bi bi-arrow-right me-2"></i>Sistem EBB dan Flow</a>
                        <a class="fs-5 fw-bold text-white mb-2" href="https://kebunpintar.id/blog/mengenal-hidroponik-dengan-sistem-nft/"><i class="bi bi-arrow-right me-2"></i>Sistem Nutrient Film</a>
                    </div>
                </div>
                <!-- Category End -->

                <!-- Recent Post Start -->
                <div class="mb-5">
                    <h2 class="mb-4">Postingan Terbaru</h2>
                    <div class="bg-primary p-4">
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/hidro 1.png" style="width: 75px;" alt="">
                            <a href="https://gardenculturemagazine.com/what-is-closed-system-hydroponics/" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Penanaman tertutup hidroponik
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/hidro 2.jpg" style="width: 75px;" alt="">
                            <a href="https://www.swadayaonline.com/artikel/3271/Budidaya-Tanaman-Sayuran-Daun-dengan-Hidroponik/" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Budidaya sayur sayuran hidroponik
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/blog-3.jpg" style="width: 75px;" alt="">
                            <a href="https://kabar24.bisnis.com/read/20131102/78/184338/panen-tomat-berlimpah-ini-tips-petani-desa-sukaratu-tasikm" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Hasil Panen Tomat Merah yang siap jual
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="img/hidro 3.jpg" style="width: 75px;" alt="">
                            <a href="https://www.anakku.id/artikel/detil/selada-air-si-hijau-yang-kaya-nutrisi" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Selada Hijau dengan hasil yang sehat
                            </a>
                        </div>
                        <div class="d-flex overflow-hidden mb-3">
                            <img class="img-fluid flex-shrink-0" src="https://belirus.com/wp-content/uploads/2020/02/Tutorial-Tanaman-Hidroponik-1200px-x-675px.jpg" style="width: 75px;" alt="">
                            <a href="https://www.finansialku.com/bisnis-tanaman-hidroponik/" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Bisnin dengan Tanaman Hidroponik
                            </a>
                        </div>

                        <div class="d-flex overflow-hidden">
                            <img class="img-fluid flex-shrink-0" src="https://img.iproperty.com.my/angel-legacy/1110x624-crop/static/2020/07/Sistem-Hidroponik-1.png" style="width: 75px;" alt="">
                            <a href="https://www.rumah.com/panduan-properti/sistem-hidroponik-29659" class="d-flex align-items-center bg-white text-dark fs-5 fw-bold px-3 mb-0">Sistem Hidroponik yang populer
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post End -->

                <!-- Plain Text Start -->
                
                <div>
                    <h2 class="mb-4">Metode menanam hidroponik yang banyak digunakan oleh masyarakat</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p>Rockwool adalah salah satu media tanam yang berasal dari bebatuan kombinasi dari batuan basalt,
                        batu kapur dan batu bara yang dipanaskan hingga suhu 1.600 oC hingga meleleh.</p>
                        <a href="https://id.wikipedia.org/wiki/Rockwool" class="btn btn-secondary py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
                <!-- Plain Text End -->

                 <!-- Plain Text Start -->
                 <div class=" py-4" >
                    <h2 class="mb-4">Keuntungan Hidroponik</h2>
                    <div class="bg-primary text-center text-white" style="padding: 30px;">
                        <p>Penggunaan air jauh lebih sedikit, Karena dalam penerapannya air adalah sumber media utama dalam menanam hidroponik.
                        Lingkungan budidaya tanaman jadi lebih besar karena tidak menggunakan media tanah. </p>
                        <a href="https://distan.sukabumikota.go.id/kelebihan-dan-kekurangan-bercocok-tanam-hidroponik/" class="btn btn-secondary py-2 px-4">Selengkapnya</a>
                    </div>
                </div>
                <!-- Plain Text End -->

            </div>
            <!-- Sidebar End -->
        </div>
    </div>
    <!-- Blog End -->

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