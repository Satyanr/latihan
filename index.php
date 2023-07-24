<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Dasar Dasar</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />
</head>

<body>
    <!--Main Navigation-->
    <header>
        <style>
        .special .card-body {
            flex-grow: 0;
        }

        #intro {
            background-image: url("asset/DSCF1749.jpg");
            height: 100vh;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
            #intro {
                margin-top: -58.59px;
            }
        }

        .navbar .nav-link {
            color: #fff !important;
        }

        .ml15 {
            text-transform: uppercase;
            letter-spacing: 0.5em;
        }

        .ml15 .word {
            display: inline-block;
            line-height: 1em;
        }
        </style>



        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                    <strong>SECURE</strong>
                </a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#intro">Home</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav d-flex flex-row">
                        <!-- Icons -->
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://www.instagram.com/satya.dairenji/?hl=en" rel="nofollow"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://web.facebook.com/profile.php?id=100010694021366"
                                rel="nofollow" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="https://github.com/Satyanr" rel="nofollow" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Background image -->
        <div id="intro" class="bg-image shadow-2-strong">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.8);">
                <div class="container d-flex align-items-center justify-content-center text-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Project-Project Latihan Kelas XII</h1>
                        <h5 class="mb-4">Tidak ada keahlian yang datang tanpa di pelajari.</h5>
                        <h5 class="mb-4">Ayo Belajar</h5>
                        <h3 class="ml15">
                            <span class="word">Mulai</span>
                            <span class="word">Dari</span><br>
                            <span class="word">Sekarang</span>
                        </h3>

                    </div>
                </div>
            </div>
        </div>
        <!-- Background image -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">
            <!--Section: Content-->
            <section>
                <div class="row">
                    <div class="col-md-6 gx-5 mb-4">
                        <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5"
                            data-mdb-ripple-color="light">
                            <img src="asset/securebg.jpg" class="img-fluid" />
                            <a href="https://www.instagram.com/officialsecure_/?hl=en">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6 gx-5 mb-4">
                        <h4><strong>Tentang Saya</strong></h4>
                        <p class="text-muted">
                            Hallo nama saya satya nurfadillah rabbani, saya adalah seorang pelajar di SMK Negeri 1
                            Ciamis.
                            Saya sekarang berada di kelas XII dan saya mengambil jurusan Rekayasa Perangkat Lunak.
                            Saya sangat tertarik dengan dunia IT, saya juga sangat tertarik dengan dunia desain grafis.
                            Di web ini saya akan menampilkan project-project yang saya buat selama saya belajar di SMK
                            Negeri 1 Ciamis khususnya pada saat kelas XII.
                            Saya adalah angkatan ke 8 jurusan RPL di SMK Negeri 1 Ciamis, dan nama angkatan saya adalah
                            <b>"SECURE"</b>.
                        </p>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

            <hr class="my-5" />

            <!--Section: Content-->
            <section class="text-center">
                <h4 class="mb-5"><strong>Project & Latihan Saya</strong></h4>

                <div class="row special">
                    <div class="col mb-4 d-flex align-items-stretch">
                        <div class="card h-100">
                            <div class="row h-50">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="https://images.crunchbase.com/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/tnf9spxmoowjfjmtl0i3"
                                        class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <h5 class="card-title">Grafik</h5>
                                    <p class="card-text">
                                        Di Latihan kali ini kita membuat Grafik dengan menggunakan chartjs.
                                    </p>
                                    <a href="grafik/" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4 d-flex align-items-stretch">
                        <div class="card h-100">
                            <div class="row h-50">
                                <div class="bg-image hover-overlay ripple-surface" data-mdb-ripple-color="light">
                                    <img src="https://miro.medium.com/v2/resize:fit:480/1*YTnIluRNB5WWn-HhPIkoWQ.png"
                                        class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <h5 class="card-title">Membuat Map dengan Leaflet</h5>
                                    <p class="card-text text-wrap ">
                                        Di Latihan kali ini kita membuat map dengan menggunakan leaflet.
                                        Tantangan di latihan kali ini adalah kita harus bisa membuat map dengan leaflet
                                        dan
                                        menampilkan custom marker di map tersebut.
                                        Juga kita di tuntut untuk bisa menambahkan marker secara langsung yang masuk ke
                                        dalam database dan menampilkan marker tersebut di map.
                                    </p>
                                    <a href="map/" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col mb-4">
                        <div class="card h-100">
                            <div class="row h-50">
                                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                    <img src="http://www.fpdf.org/title.png" class="img-fluid" />
                                    <a href="#!">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body">
                                    <h5 class="card-title">Membuat Laporan PDF dengan php</h5>
                                    <p class="card-text">
                                        Di Latihan kali ini kita membuat map dengan menggunakan libary dari
                                        http://www.fpdf.org/.
                                    </p>
                                    <a href="laporan_pdf/" class="btn btn-primary">Lihat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Section: Content-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">

        <div class="text-center py-4 align-items-center">
            <p>Ikuti Saya di social media</p>
            <a class="btn btn-primary m-1" role="button" href="https://www.instagram.com/satya.dairenji/?hl=en"
                rel="nofollow" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="btn btn-primary m-1" role="button" href="https://web.facebook.com/profile.php?id=100010694021366"
                rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/Satyanr" class="btn btn-primary m-1" role="button" rel="nofollow"
                target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">Satyanr</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script>
    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml15 .word',
            scale: [14, 1],
            opacity: [0, 1],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
        }).add({
            targets: '.ml15',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    </script>
</body>

</html>