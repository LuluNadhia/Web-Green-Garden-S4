<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Garden - Beranda</title>
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
                    <a href="/beranda" class="nav-item nav-link active">Beranda</a>
                    <a href="/hidroponik" class="nav-item nav-link">Hidroponik</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perlengkapan</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" href="/greenhouse">Greenhouse</a>
                            <a class="dropdown-item" href="/perlengkapan">Alat Perlengkapan</a>
                        </div>
                    </div>
                    <a href="/penanam/add" class="nav-item nav-link">Sistem Tanaman</a>
                    <a href="/artikel" class="nav-item nav-link">Artikel</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Tanaman Hidroponik</h3>
                            <h1 class="display-1 text-white mb-md-4">Budidaya Tanaman Hidroponik</h1>
                            <a href="/welcome" class="btn btn-primary py-md-3 px-md-5 me-3">Chat AI</a>
                            <a href="/kontak" class="btn btn-secondary py-md-3 px-md-5">Kontak</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            <h3 class="text-white">Budidaya Sayuran</h3>
                            <h1 class="display-1 text-white mb-md-4">Sayur yang Lebih Sehat</h1>
                            <a href="/welcome" class="btn btn-primary py-md-3 px-md-5 me-3">Chat Ai</a>
                            <a href="/kontak" class="btn btn-secondary py-md-3 px-md-5">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Tanaman dan Hidroponik Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-md-6">
                    <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Tanaman</h3>
                        <p class="text-white justify">Tanaman adalah suatu jenis organisme (terutama tumbuhan) yang umum ditanam oleh orang.
                            Tumbuhan yang disebut tanaman umumnya dibudidayakan di suatu ruang atau media untuk dipanen ketika sudah mencapai tahap pertumbuhan tertentu.
                        </p>
                        <a class="text-white fw-bold" href="https://id.wikipedia.org/wiki/Tanaman">Selengkapnya<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Hidroponik</h3>
                        <p class="text-white justify">Hidroponik adalah salah satu metode dalam budidaya menanam dengan memanfaatkan air tanpa 
                            menggunakan media tanah dengan menekankan pada pemenuhan kebutuhan hara nutrisi bagi tanaman.</p>
                        <a class="text-white fw-bold" href="https://id.wikipedia.org/wiki/Hidroponik">Selengkapnya<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tanaman dan Hidroponik Start -->

    <!-- Media Tanam Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Media Tanaman</h6>
                <h1 class="display-5">Media Hidroponik Yang Baik </h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Arang sekam</h4>
                        <p class="mb-0">Arang sekam juga memiliki bobot yang ringan, steril dari gangguan bakteri atau jamur, 
                            serta kandungan pH netral. Kamu dapat menggunakan media tanam arang sekam untuk menanam tomat, timun, dan paprika.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Rockwool</h4>
                        <p class="mb-0">Rockwool merupakan mineral fiber atau wool dari batuan (batu bara, kapur, dan basalt), ataupun kaca.
                            Kelebihan rockwool adalah mampu menahan air sehingga pertumbuhan akar tanaman dan penyerapan nutrisi lebih baik. 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Kerikil</h4>
                        <p class="mb-0">Bentuk kerikil memiliki banyak pori-pori, maka bisa membantu pengedaran udara dan unsur hara pada tanaman. 
                            Selain itu, pori-pori ini juga dapat membantu pertumbuhan akar agar lebih baik.  </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Hydroton</h4>
                        <p class="mb-0">Hydroton adalah pelet tanah liat yang juga sering digunakan untuk media tanam hidroponik. 
                            Kelebihan dari Hydroton adalah dapat melepaskan nutrisi ke aliran air dengan Ph netral, bobotnya cukup berat.   </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Perlite</h4>
                        <p class="mb-0">Perlite adalah kaca vulkanis dengan kandungan air yang cukup banyak. 
                            Media tanam ini terbuat dari hidrasi batuan obsidian dengan tingkat retensi oksigen terbaik daripada media tanam lainnya. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item bg-light text-center p-5">
                        <h4>Sabut kelapa</h4>
                        <p class="mb-0">Sabut kelapa sangat kaya akan nutrisi bagi tumbuhan dan bisa menghindarinya dari jamur pengganggu. 
                            Dengan menggunakan media tanam ini, tanaman hidroponik kamu akan menjadi lebih kuat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Media Tanaman End -->

<!-- Sistem Penanaman  -->
<div class="mx-auto text-center mb-5" style="max-width: 500px;">
    <h6 class="text-primary text-uppercase">Penanaman</h6>
    <h1 class="display-5">Jenis atau Sistem Penanaman</h1>
    </div>
   <div class="container-fluid bg-testimonial py-5 my-5">
       <div class="container py-5">
           <div class="row justify-content-center">
               <div class="col-lg-7">
                   <div class="owl-carousel testimonial-carousel p-5">
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://hydroponicway.com/media/images/wick-hydroponic-system_zmz9CIZ.original.jpg" alt="">
                           <p class="fs-5">Dalam sistem wick, tanaman akan ditempatkan pada sebuah wadah yang diletakkan tepat pada sebuah tempat penyimpanan air. Wadah penyimpanan air tersebut sebelumnya 
                               sudah diberikan larutan nutrisi seperti pupuk dan penyubur tanaman. Metode ini juga cocok digabungkan dengan sistem aerasi agar tanaman bisa mendapatkan oksigen lebih banyak.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Sistem Wick</h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://farmaquaponik.files.wordpress.com/2020/07/cara-kerja.jpg?w=500" alt="">
                           <p class="fs-5">Metode ini cukup sederhana karena tanaman yang akan Anda tanam cukup dimasukkan ke dalam air aerasi. Akar dari 
                               tanaman yang akan Anda tanam akan selalu berada di bawah permukaan air sehingga Anda akan membutuhkan sistem aerasi yang benar 
                               agar tanaman Anda bisa tumbuh secara normal dan cepat.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Sistem Deep Water Culture </h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://cdn-cms.pgimgs.com/static/2020/08/Foto-Aeroponik-1.jpg" alt="">
                           <p class="fs-5">Metode aeroponik ini menggunakan air yang sudah dikabutkan dan dialirkan pada akar-akar dari tanaman yang sudah disusun dengan cara sedemikian rupa.
                                Metode penanaman ini termasuk salah satu cara yang paling sulit untuk dilakukan dan mahal tetapi tidak memerlukan tempat yang banyak di rumah
                               Anda.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Sistem Aeroponik  </h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://hidroponiq.com/wp-content/uploads/2014/07/DripSystem.jpg" alt="">
                           <p class="fs-5">Metode ini menggunakan sistem aerasi untuk mengalirkan air yang sebelumnya sudah diberikan nutrisi seperti pupuk dan penyubur tanaman dan akan 
                               diteteskan pada akar dan batang tanaman secara berkala.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Sistem Drip</h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://www.trees.com/wp-content/uploads/files/inline-images/ebb-and-flow-timer-off.png" alt="">
                           <p class="fs-5"> metode ini terdapat sebuah timer yang akan mengatur waktu untuk mengaliri air yang sudah diberikan pupuk pada tanaman 
                               Anda dalam waktu yang sudah ditentukan. Metode ini juga menggunakan tabung untuk mengaliri air yang berlebih agar tidak merusak 
                               tanaman dan buah yang sudah Anda tanam.
                           </p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">EBB and Flow</h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://mitalom.com/wp-content/uploads/2015/09/Gambar-Skema-Ebb-Flow-System.jpg" alt="">
                           <p class="fs-5"> Metode ini cukup berbeda dengan cara lainnya karena akar dari tanaman Anda tidak akan terendam di dalam air dan hanya akan dialiri oleh air saja. 
                               Metode ini mengharuskan Anda agar akar dari tanaman tidak menutupi aliran air dan menjadikan tanaman lain menjadi kekurangan nutrisi.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Metode Nutrient Film (NFT)</h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://www.faunadanflora.com/wp-content/uploads/2018/11/Menanam-Cabe-Hidroponik-Sistem-Fertigasi.jpg" alt="">
                           <p class="fs-5"> Teknik ini mengharuskan Anda untuk mengalirkan air yang mengandung nutrisi dan unsur hara dengan menggunakan cara irigasi. Dalam sistem ini biaya untuk melakukan 
                               pemupukan akan berkurang karena pupuk akan langsung diberikan secara bersamaan dengan penyiraman tanaman Anda.
                               <hr class="mx-auto w-25">
                               <h4 class="text-white mb-0"> Sistem Fertigasi </h4>
                       </div>
                       <div class="testimonial-item text-center text-white">
                           <img class="img-fluid mx-auto p-2 border border-5 border-secondary rounded-circle mb-4" src="https://marlithagiofenni.files.wordpress.com/2018/06/images-166492249.jpg" alt="">
                           <p class="fs-5"> sistem hidroponik yang menggunakan kolam penampungan air, styrofoam atau sejenisnya sebagai rakit agar tetap mengapung, rockwool,
                                dan netpot sebagai wadah untuk penyangga tanaman.</p>
                           <hr class="mx-auto w-25">
                           <h4 class="text-white mb-0">Sistem Floating </h4>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- SIstem tanaman End -->

 <!-- Perlengkapan Start -->

    <div class="container-fluid py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6>Perlengkapan</h6>
            <h1 class="display-5">Alat dan Perlengkapan</h1>
        </div>
      <section id="departments" class="departments">
        <div class="container ">
  
          <div class="section-title">
            <h2 >Alat</h2>
            <p>Adanya alat dan perlengkapan  tentu saja bertujuan untuk mendukung dan mewujudkan konsep bertanaman yang baik. 
              Dengan alat dan pelengkapan yang lebih baik dan sesuai dengan kebutuhan bertanam, proses yang dilakukan akan semakin cepat dan panen yang 
              dihasilkan akan semakin berkualitas.
            </p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Gunting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Botol Semprot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Gelas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Wadah/pot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pembersih Kuas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-6">Sumbu Panel </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Benih tanaman</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-8">Intalasi hidroponik (Metode tanamannya)</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Metode/ media yang digunakan </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9">
              <div class="tab-content">
                <div class="tab-pane active show" id="tab-1">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Gunting</h3>
                      <p class="justify">Dalam teknik hidroponik, kamu perlu membuat potongan yang tepat dan hati-hati agar tanaman tetap sehat. 
                        Baik saat memanen nanti, memangkas kelebihan daunnya, menyiapkan klon (memperbanyak), atau memotong pertumbuhan tanaman lama. 
                        Perhatikan seberapa besar gunting yang dipakai. Pertimbangkan pula seberapa padat pertumbuhan dedaunan, kesegaran vegetasi, dan 
                        kehalusan potongan. Jika gunting terlalu besar, kamu akan kesulitan mengarahkan tanaman dalam ruangan dan di antara dedaunan yang lebat.
                      </p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://down-id.img.susercontent.com/file/5fba18838f9a33ee212438ced008d674_tn" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-2">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Botol Semprot</h3>
                      <p class="justify">Saat kamu sudah mencampur konsentrat pengendali hama, fungisida, dan larutan lainnya, kamu membutuhkan botol semprot. 
                        Sebagian besar botol semprot menawarkan nozzle yang dapat disesuaikan. Jadi kamu dapat dengan mudah beralih dari semprotan 
                        kabut (kecil) ke besar.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//1252/master_master-botol-sprayer-atau-penyemprot-tanaman---1-liter_full04.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-3">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Gelas</h3>
                      <p class="justify">Hidroponik membutuhkan pengukuran yang tepat, terutama saat kamu akan mencampur nutrisi cair. 
                        Sebagian besar tanaman mengharuskan kamu mengukur nutrisi yang dibutuhkan dengan mililiter (ml). 
                        Jadi, alangkah baiknya kamu memiliki gelas yang sudah tersedia ukuran takarnya. Pastikan untuk membilas gelas 
                        dengan bersih setelah selesai dipakai.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//103/MTA-48852634/no_brand_terrarium_kaktus_sukulen_gelas_medium_hiasan_dekorasi_rumah_kamar_meja_tanaman_hias_asli_cactuse_succulent_hawortia_full02_tqwlh4aa.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-4">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3 class="justify">Wadah/pot</h3>
                      <p>Semakin besar sistem hidroponik yang ingin kamu tanam, semakin banyak wadah yang harus kamu miliki. 
                        Kamu bisa memanfaatkan beberapa wadah, seperti botol bekas, paralon, atau ember untuk digunakan sebagai pot tanam. 
                        Sediakan ember untuk pencampuran, produk limbah, hasil panen, untuk air, dan ember untuk menampung ember lain.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQC1V3EYHMGs-Ax9i6FccXjIPbcWBpp38LzTg&usqp=CAU" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-5">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Pembersih Kuas</h3>
                      <p  class="justify">Setidaknya kamu memerlukan dua atau tiga jenis kuas untuk membantu pertumbuhan hidroponik. 
                        Yang terpenting, kamu memerlukan kuas untuk membersihkan kotoran yang berkembang di dalam sistem, pipa, ember, 
                        filter, dan baki. Meskipun berkebun hidroponik lebih rapi, tapi kamu tetap perlu menjaga kebersihannya dengan baik. 
                        Supaya tumbuhan bisa tumbuh lebih sehat dan kotoran tidak semakin berkembang. Lumpur, lendir, penumpukan garam, 
                        endapan air yang dapat menampung jamur, bakteri, dan mineral tak terduga dapat memengaruhi siklus pertumbuhan tanaman. 
                        Semua kotoran ini juga dapat menyumbat pipa atau wadah lain yang dipakai. Mengatasi semua masalah ini, tidak terlalu 
                        sulit menggosoknya dengan sikat, bilas kalau sudah selesai.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw30hlbRLrj-LE2-eHp4y-rmHEwZF3xVUkfA&usqp=CAU" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-6">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Sumbu Panel </h3>
                      <p class="justify">Tanaman hidroponik membutuhkan aliran nutrisi yang cukup. Terutama jika kamu memakai wadah netpot untuk potnya. 
                        Untuk menyalurkan nutrisi ini, kamu membutuhkan sumbu panel. Kamu bisa membeli sumbu panel atau membuatnya sendiri. 
                        Cukup manfaatkan kain flanel atau sumbu kompor yang punya daya serap air tinggi.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://id-test-11.slatic.net/p/0a00bf079de9bf73798564c4e452ef63.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-7">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Benih tanaman</h3>
                      <p class="justify">Benih tanaman hidroponik merupakan salah satu faktor penentu keberhasilan saat masa panen tiba. 
                        Meski terlihat kecil dan mudah didapatkan, tetapi jika benih tidak memiliki kualitas yang bagus, maka bisa jadi panen Anda akan gagal.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4TZeXxmjeralfaB96qtYm2AdfpTEPT_723BuLsQsSjzAPZCnIgK55QXIulyt6Uysm2tY&usqp=CAU" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-8">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Intalasi hidroponik (metode tanamannya)</h3>
                      <p class="justify"> Ada berbagai macam jenis metode hidroponik. Beberapa di antaranya adalah sistem wick, nutrient fim technique (NFT), 
                        deep flow technique (DFT), dan Dutch bucket (DB). Kamu bisa memilih jenis metode hidroponik sesuai selera, entah yang 
                        paling mudah diterapkan maupun yang paling sulit.</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://laylanasutionhome.files.wordpress.com/2019/01/apa-itu-sistem-hidroponik-dft-768x431.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab-9">
                  <div class="row gy-4">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Metode/ media yang digunakan </h3>
                      <p class="justify">Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="https://1.bp.blogspot.com/-lHuE_63gFv0/X0SKz24PosI/AAAAAAAAScQ/bAGcJ41_1zU556vhvs1rUdcOUX-HQXfsQCLcBGAsYHQ/w1200-h630-p-k-no-nu/Hidroponik.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>    
<!-- End Alat Perlengkapan Section -->

<!--  Kelebihan dan keuntungan start -->
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 500px;">
            <h6 class="text-primary text-uppercase">Tentang Hidroponik</h6>
            <h1 class="display-6">Kelebihan dan Kekurangan Hidroponik</h1>
        </div>
        <div class="row gx-0">
            <div class="col-md-6">
                <div class="bg-primary bg-vegetable d-flex flex-column justify-content-center p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Keuntungan</h3>
                    <ol class="text-white">
                        <li>Penggunaan lahan lebih efisien</li>
                        <li>Tanaman berproduksi tanpa menggunakan tanah</li>
                        <li>Kuantitas dan kualitas produksi lebih tinggi dan lebih bersih</li> 
                        <li>Penggunaan pupuk dan air lebih efisien</li>
                        <li>Pengendalian hama dan penyakit lebih mudah</li>
                    </ol>
                    <a class="text-white fw-bold" href=""></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-secondary bg-fruit d-flex flex-column justify-content-center p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Kekurangan</h3>
                    <ol class="text-white">
                        <li>Membutuhkan modal yang besar</li>
                        <li>Pada kultur substrat, kapisitas memegang air media substrat lebih kecil dari pada media tanah sehingga 
                            akan menyebabkan pelayuan tanaman yang cepat dan stres yang serius.</li>
                    </ol>
                    <a class="text-white fw-bold" href=""></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  Kelebihan dan keuntungan end -->

<!-- Tips Hidroponik Start -->
   <div class="container-fluid bg-primary feature py-5 pb-lg-0 my-5">
    <div class="container py-5 pb-lg-0">
        <div class="mx-auto text-center mb-3 pb-2" style="max-width: 500px;">
            <h6 class="text-uppercase text-secondary">Hidroponik</h6>
            <h1 class="display-5 text-white">Tips Memulai Berkebun di Rumah </h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-3">
                <div class="text-white mb-5">
                    <h4 class="text-white">Pertama</h4>
                    <p class="mb-0">Anda harus mengerti tentang jenis hidroponik apa yang ingin Anda coba dan pelajarilah terlebih dahulu apa saja kebutuhan yang harus Anda siapkan sebelum memulainya.</p>
                </div>
                <div class="text-white">
                    <h4 class="text-white">Kedua</h4>
                    <p class="mb-0">Dengan mengerti sistem hidroponik, otomatis akan membuat Anda menjadi lebih paham apa saja kelebihan dan kekurangan yang ada.</p>
                </div>
                <div class="text-white py-5">
                    <h4 class="text-white">Ketiga</h4>
                    <p class="mb-0">Anda juga perlu menyiapkan bibit tanaman yang akan Anda tanam, sesuaikanlah dengan ukuran dari lahan hidroponik yang Anda punya.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-block bg-white h-100 text-center p-5 pb-lg-0">
                    <p>Berkebun adalah salah satu cara terbaik untuk menyalurkan hobi sekaligus mengisi waktu luang Anda. 
                    Metode hidroponik juga merupakan cara yang paling mudah apabila Anda memiliki lahan yang terbatas. Agar Anda bisa 
                    memulai berkebun secara hidroponik dengan benar maka Anda harus mengikuti beberapa tahapan 
                    </p>
                    <img class="img-fluid" src="img/feature.png" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="text-white mb-5">
                    <h4 class="text-white">Keempat</h4>
                    <p class="mb-0">Pastikan agar sistem aerasi terus berjalan agar tanaman Anda tidak mengalami kekurangan oksigen. Selain itu juga pastikanlah agar air yang ada tidak tercemar oleh larutan pupuk yang berlebihan dan harus secara rutin diganti.</p>
                </div>
                <div class="text-white">
                    <h4 class="text-white">Kelima</h4>
                    <p class="mb-0">Konsisten dan bersabarlah karena menanam tanaman bukanlah sebuah proses yang instan.</p>
                    <p></p>
                    <p class>Itulah beberapa metode berkebun dengan sistem hidroponik. Semoga dengan membaca artikel 
                        ini bisa membuat Anda menjadi lebih tertarik untuk berkebun dengan cara hidroponik meskipun memiliki
                        keterbatasan lahan pada tempat tinggal Anda.</p> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tips end -->

<!-- Artikel Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase">Artikel</h6>
                <h1 class="display-5">Artikel Seputar Tanaman Hidroponik</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="img/service-5.jpg" alt="">
                        <a class="blog-overlay" href="https://www.kompas.com/food/read/2020/07/02/091800675/tips-tanam-sayuran-dengan-metode-hidroponik-di-ruangan-tertutup-cocok-untuk">
                            <h4 class="text-white">Tips Tanam Sayuran dengan Metode Hidroponik di Ruangan Tertutup, Cocok untuk Anak Kos</h4>
                            <span class="text-white fw-bold">27 Mei 2023</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="https://i0.wp.com/resepkoki.id/wp-content/uploads/2018/03/sayur-mayur-Cropped-1.jpg?fit=500%2C500&ssl=1" alt="">
                        <a class="blog-overlay" href="https://www.liputan6.com/news/read/4314751/budidaya-hidroponik-digandrungi-warga-bekasi-selama-pandemi-covid-19">
                            <h4 class="text-white">Budidaya Hidroponik Digandrungi Warga Bekasi Selama Pandemi Covid-19</h4>
                            <span class="text-white fw-bold">10 Maret 2023</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item position-relative overflow-hidden">
                        <img class="img-fluid" src="https://markusyon.files.wordpress.com/2019/05/hidroponik-1-mesinpertanian.jpg?w=500" alt="">
                        <a class="blog-overlay" href="https://www.idntimes.com/life/diy/dian-arthasalina/8-langkah-mudah-bikin-kebun-hidroponik-sendiri-di-rumah">
                            <h4 class="text-white">8 Cara Membuat Kebun Tanaman Hidroponik Sendiri di Rumah</h4>
                            <span class="text-white fw-bold">4 Januari 2023</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Artikel End -->

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
        </footer>
<!-- End Footer -->
    
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