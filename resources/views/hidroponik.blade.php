<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Garde - Hidroponik </title>
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
                    <a href="/hidroponik" class="nav-item nav-link active">Hidroponik</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Perlengkapan</a>
                        <div class="dropdown-menu m-0">
                            <a class="dropdown-item" {{ ($title === "Greenhouse") ? 'active' : '' }} href="/greenhouse">Greenhouse</a>
                            <a class="dropdown-item" {{ ($title === "Drip System") ? 'active' : '' }} href="/perlengkapan">Alat Perlengkapan</a>
                        </div>
                    </div>
                    <a href="/penanam/add" class="nav-item nav-link">Sistem Tanaman</a>
                    <a href="/artikel" class="nav-item nav-link">Artikel</a>
                    <a href="/kontak" class="nav-item nav-link">Kontak</a>
                </div>
        </div>
    </nav>
    <!-- Navbar End -->


     <!-- ======= HIDROPONIK DAN SEJARAH Section ======= -->
     <section id="about-us" class="about-us">
        <div class="container py-5" >
              <h3 class="text-primary text-uppercase">Apa itu Hidroponik?</h3>
              <p class="justify">Hidroponik atau tirta tani adalah salah satu metode dalam budidaya menanam dengan memanfaatkan air tanpa menggunakan media tanah
                 dengan menekankan pada pemenuhan kebutuhan hara nutrisi bagi tanaman. Kebutuhan air pada hidroponik lebih sedikit daripada
                 kebutuhan air pada budidaya dengan tanah.Hidroponik menggunakan air yang lebih efisien, jadi cocok diterapkan pada daerah 
                 yang memiliki pasokan air yang terbatas. Dalam kajian bahasa, hidroponik berasal dari kata hydro yang berarti air dan ponos 
                 yang berarti kerja. Jadi, hidroponik memiliki pengertian secara bebas teknik bercocok tanam dengan menekankan pada pemenuhan
                 kebutuhan nutrisi bagi tanaman, atau dalam pengertian sehari-hari bercocok tanam tanpa tanah. Dari pengertian ini terlihat 
                 bahwa munculnya teknik bertanam secara hidroponik diawali oleh semakin tingginya perhatian manusia akan pentingnya kebutuhan
                 pupuk bagi tanaman. 
        </div>
    </section>
        <div class="container ">
            <div class="row gx-4">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="d-flex h-90 border border-5 border-primary border-bottom-0 pt-0">
                        <img class="img-fluid mt-auto mx-auto" src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2022/08/20/2377868920.jpg">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <div class="mb-3 pb-2">
                        <h3 class="text-primary text-uppercase"> Sejarah Adanya Tanaman Hidroponik</h3>
                        <p class="justify"> Pada Awalnya tercatat dalam sejarah, kegiatan membudidayakan tanaman yang daratan tanpa tanah ditulis pada 
                            buku Sylva Sylvarum oleh Francis Bacon dibuat pada tahun 1627, dicetak setahun setelah kematiannya. Teknik 
                            budidaya pada air menjadi penelitian yang populer setelah itu. Pada tahun 1699, John Woodward menerbitkan 
                            percobaan budidaya air dengan spearmint. Ia menemukan bahwa tanaman dalam sumber-sumber air yang kurang murni
                            tumbuh lebih baik dari tanaman dengan air murni.
                        </p>
                        <p class="justify">
                            Pada tahun 1842 telah disusun daftar sembilan elemen diyakini penting untuk pertumbuhan tanaman, 
                            dan penemuan dari ahli botani Jerman Julius von Sachs dan Wilhelm Knop, pada tahun-tahun 1859-1865, 
                            memicu pengembangan teknik budidaya tanpa tanah. Pertumbuhan tanaman darat tanpa tanah dengan larutan 
                            yang menekankan pada pemenuhan kebutuhan nutrisi mineral bagi tanaman. Dengan cepat menjadi standar penelitian 
                            dan teknik pembelajaran, dan masih banyak digunakan saat ini. Metode ini menjadi sebuah riset standar serta teknik 
                            mengajar yang tentunya masih digunakan hingga sekarang. Pada masa ini pun, teknik ini tersebut dinamakan dengan 
                            ‘solution culture’ maupun budaya solusi.
                        </p>
                    </div>
                </div>
                <p class="justify"> Di tahun 1930-an, seorang ahli botani menginvestigasi dengan adanya beberapa wabah penyakit pada 
                    sebuah tanaman, sehingga dilakukan sebuah penelitian terhadap kondisi media tanah. Dari penelitian itu menghasilkan 
                    sebuah kesimpulan bahwa dalam menanam dengan air akan mengurangi risiko wabah penyakit. Pada tahun 1929, William 
                    Frederick Gericke dari Universitas California di Berkeley mulai mempromosikan secara terbuka tentang Solution 
                    culture yang digunakan untuk menghasilkan tanaman pertanian. Pada mulanya dia menyebutnya dengan istilah aquaculture 
                    (perairan), namun kemudian mengetahui aquaculture telah diterapkan pada budidaya hewan air. Gericke menciptakan 
                    sensasi dengan menumbuhkan tomat yang menjalar setinggi duapuluh lima kaki atau kisaran 7,6 meter, di halaman 
                    belakang rumahnya dengan larutan nutrien mineral selain tanah. Teknik Gericke ini menimbulkan rasa ingin tahu serta 
                    penasaran, sehingga dia mendapat permintaan untuk bisa memberi informasi lanjutan tentang hidroponik. Gericke menolak 
                    sebuah permintaan melakukan penelitian lebih lanjut di rumah kaca milik universitasnya, karena Gericke sendiri merasa 
                    pemerintah skeptis terhadap sistem yang sedang ia kembangkan.</p>
                <p class="justify">Akhirnya Gericke diberi sarana rumah kaca serta waktu yang cukup untuk bisa melakukan penelitian yang lebih 
                    lanjut. Namun di waktu yang sama, Universitas California juga menugaskan 2 ahli lain, yaitu Hoagland serta Arnon untuk bisa 
                    mengevaluasi penemuan Gericke. Keduanya menyatakan bahwa teknik yang dijalankan Gericke tidak membawa keuntungan untuk bagi 
                    tanaman. Pada akhirnya, Gericke akhirnya melepas jabatannya di universitas karena sebuah perbedaan pendapat tersebut. 
                    Perseteruan keduanya justru menghasilkan dampak positif, karena Hoagland kemudian menemukan sebuah cara pemberian nutrisi 
                    untuk bagi tanaman yang dibudidayakan dengan cara hidroponik. Sehingga teknik awal milik Gericke bisa dikombinasikan dengan 
                    teknik Hoagland untuk dapat menghasilkan tanaman yang berkualitas. Teknik hidroponik banyak dilakukan dalam skala kecil sebagai 
                    hobi di kalangan masyarakat Indonesia. Pemilihan jenis tanaman yang akan dibudidayakan untuk skala usaha komersial harus diperhatikan, 
                    karena tidak semua hasil pertanian bernilai ekonomis.
                    Perkembangan Hidroponik di Indonesia
                    
                </p>
            </div>
        </div>
    <!-- HIDROPONIK DAN SEJARAH  End -->

     <!-- Media Tanam Start -->
 <h2 class="text-primary text-uppercase center py-5" >Media Tanaman Hidroponik  </h2>
 <div class="container-fluid">
    <div class="container">
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

<!-- Metode / Sistem Penanaman  -->
<h2 class="text-primary text-uppercase center py-5" >Jenis Atau Sistem Penanaman Hidroponik</h2>
<div class="container-fluid bg-testimonial my-5">
    <div class="container">
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
<!-- Metode/Sistem End -->
    
<!-- ======= FAKTOR HIDROPONIK  ======= -->
        <div class="container py-4" >
        <h2 class="text-primary text-uppercase" >Faktor Keberhasilan Menanam Hidroponik </h2>
          <div class="row content">
            <div class="col-lg-6 container py-3" data-aos="fade-right" >
              <h4>Faktor internal</h4>
              <h5>1. Nutrisi/Hara</h5>
              <p class="justify" > nutrisi atau hara yang dibutuhkan untuk pertumbuhan tanaman terdiri dari 13 unsur, yaitu makro seperti Nitrogen 
                (N), Fosfor (P), Kalium (K), Kalsium (Ca), Magnesium (Mg), Sulfur (S) dan mikro seperti Besi (Fe), 
                Mangan (Mn), Boron (B), Tembaga (Cu), Zinc (Zn), Molibdenum (Mo) dan Klor (Cl). Sedangkan unsur Karbon (C) 
                dan Oksigen (O) adalah terdapat di atmosfer dan Hidrogen (H) dipasok oleh air.
              </p>

              <h5>2. PH</h5>
              <p class="justify"> kadar pH larutan hara tergantung dari kemampuan tanaman dalam menyerap unsur hara. Kisaran pH optimal larutan hara
                 hidroponik adalah 5,8-6,3. Dalam hidroponik, terutama dalam sistem tertutup, akar mudah mempengaruhi pH larutan hidroponik, 
                 sehingga pH cenderung berfluktuasi.
              </p>

              <h5>3. Nilai Ec</h5>
              <p class="justify">EC tidak memberikan informasi mengenai kandungan mineral yang tepat dari larutan hara. Dalam sistem hidroponik tertutup, 
                larutan hara hidroponik diresirkulasi dan elemen yang tidak diserap dalam jumlah yang tinggi oleh tanaman (seperti natrium, 
                klorida, fluorida) atau ion yang dikeluarkan oleh tanamanakan mempengaruhi pH larutan hara hidroponik dan tekanan osmotik tanaman.
              </p>

              <h5>4. Kualitas Air</h5>
              <p class="justify" > Larutan hara hidroponik dibuat dari mineral yang dilarutkan dalam air. Pemilihan pupuk dan konsentrasi dalam larutan hara 
                hidroponik sangat tergantung pada kualitas air yang digunakan. Oleh karena itu, pengujian air baku sebelum memutuskan formula 
                pupuk sangat penting.
              </p>

              <h5>5.Oksigen</h5>
              <p class="justify" > Oksigen terlalut merupakan kondisi rendahnya kandungan oksigen dalam larutan hara yang bila terjadi akan 
                menyebabkan ganguan pada akar tanaman. salah satu yang paling penting adalah oksigen terlarut yang memiliki peran sangat penting 
                untuk kesehatan dan kekuatan sistem akar serta diperlukan untuk penyerapan hara. Oksigen memiliki peran penting untuk sistem akar 
                tanaman.
              </p>

            </div>
            <div class="col-lg-6 container py-3" data-aos="fade-left">
            <div class= " container py-2">
            <h4>Faktor Eksternal</h4>
              <h5>1. Temperatur/Suhu</h5>
              <p class="justify" > Kelarutan pupuk tergantung pada suhu air pelarut dimana kelarutan pupuk meningkat dengan suhu. 
                Oleh karena itu, pada suhu yang lebih rendah, larutan hara harus lebih diencerkan. Menurut penelitian, pada suhu yang lebih 
                tinggi, larutan hara lebih pekat. Kelarutan ini juga tergantung pada pupuk lain dalam larutan nutrisi.
              </p>

              <h5>2.Kelembaban</h5>
              <p class="justify" > Kelembaban yang tinggi (> 80%) dapat memicu perkembangan jamur patogen yang menyerang tanaman. 
                Sehingga menjaga aerasi dan sanitasi di lingkungan hidroponik menjadi syarat penting agar tanaman tumbuh baik.
              </p>

              <h5>3.Intensitas Cahaya</h5>
              <p class="justify" > Intensitas cahaya matahari digunakan tanaman untuk proses fotosintesis. 
                Fotosintesis merupakan proses tanaman untuk menghasilkan makanan. Tanaman yang tumbuh dengan cahaya 
                yang kurang akan memiliki batang yang tidak kokoh dan pertumbuhan tanaman menjadi lambat.
              </p>

              <p class="justify" > Salaha satu faktor keberhasilan menanam hidroponik adalah air baku yang digunakan. 
                Air baku untuk hidroponik harus memenuhi beberapa kriteria. Kriteria air baku yang ideal untuk hidroponik 
                adalah pH air sekitar 5,5-6,5, suhu air di kisaran 23-30 derajat celcius, dan jumlah zat padat terlarut di dalam 
                air maksimal 150 ppm. Selain itu, faktor lain yang memengaruhi keberhasilan hidroponik adalah ketersediaan sinar Matahari, 
                nutrisi yang digunakan, sanitasi lingkungan, hingga jenis sayuran yang ditana
              </p>
 
            </div>
          </div>
        </div>
<!-- End About Us Section -->

      
<!-- kelebihan dan keurangan Section -->
        <div class="container py-5">
                <h5 class="display-6 text-primary text-uppercase center">Kelebihan dan Kekurangan Hidroponik</h5>
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
                        <a class="text-white fw-bold" href="https://id.wikipedia.org/wiki/Tanaman"></a>
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
                        <a class="text-white fw-bold" href="https://id.wikipedia.org/wiki/Hidroponik"></a>
                    </div>
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