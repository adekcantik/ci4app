<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Pengaduan</title>
    <link rel="icon" href="assets/img/favicon.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/aos.css" rel="stylesheet">
    <link href="assets/css/lity.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <link href="assets/css/main.css" rel="stylesheet">
    <link id="themes_colors" href="assets/css/color-1.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#main_menu" data-offset="70">
    <div class="preloader">
        <div class="loader-wrapper">
            <div class="loader"></div>
        </div>
    </div>

    <header class="foxapp-header">
        <nav class="navbar navbar-expand-lg navbar-light" id="foxapp_menu">
            <div class="container">
                <a class="navbar-brand" href="#slide">
                    <img src="assets/img/logoheader.png" class="img-fluid" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_menu" aria-controls="main_menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_menu">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link anchor active" href="#slide">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="#main_features">Informasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="#git_in_touch">Pengaduan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link anchor" href="<?= base_url('/admin') ?>">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="slide" class="slide background-withcolor">
        <div class="content-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <p class="mb-0">Sekarang telah ada</p>
                        <h2>Pelayanan Pengaduan</h2>
                        <p>Telah disediakan layanan pengaduan dalam bentuk web, yang dapat diakses masyarakat Tebing Tinggi
                        </p>
                    </div>
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                        <img src="assets/img/mobile-3.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="boxes" class="boxes padding-100">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up">
                        <div class="icon">
                            <span class="lnr lnr lnr-pencil"></span>
                        </div>
                        <div class="space-20"></div>
                        <h4>Keluhan</h4>
                        <div class="space-15"></div>
                        <p>Menyediakan wadah untuk Menuliskan keluhan yang dialami masyarakat</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon">
                            <span class="lnr lnr-cog"></span>
                        </div>
                        <div class="space-20"></div>
                        <h4>Proses</h4>
                        <div class="space-15"></div>
                        <p>Memproses pengaduan masyarakat di bagian masing masing</p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon">
                            <span class="lnr lnr-checkmark-circle"></span>
                        </div>
                        <div class="space-20"></div>
                        <h4>Done</h4>
                        <div class="space-15"></div>
                        <p>Pengaduan masyrakat telah selesai di proses pada dinas masing masing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="main_features" class="other-features padding-100 background-withcolor">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Step
                        <span class="white"> Step </span> Pengaduan
                    </h3>
                    <div class="space-25"></div>
                    <p>Pengaduan hanya dapat dilakukan oleh masyarakat Tebing Tinggi dan sedang Berada di Tebing Tinggi, Terima Kasih :)</p>
                    <div class="space-50"></div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="other-features-slider" data-aos="fade-up">

                        <div class="item text-center">
                            <span class="lnr lnr-rocket"></span>
                            <h4>Akses Web</h4>
                            <p>Anda telah berada di web pengaduan, dan pastikan KTP anda berdomisili Tebing Tinggi.
                            </p>
                        </div>
                        <div class="item text-center">
                            <span class="lnr lnr-cog"></span>
                            <h4>Menu Pengaduan</h4>
                            <p>Silahkan pilih menu pengaduan, atau bisa scroll ke bawah untuk mengisi form.
                            </p>
                        </div>
                        <div class="item text-center">
                            <span class="lnr lnr-database"></span>
                            <h4>Tersimpan</h4>
                            <p>setelah mengisi form, pastikan anda klik kirim. Pengaduan anda akan tersimpan ke database.
                            </p>
                        </div>
                        <div class="item text-center">
                            <span class="lnr lnr-cloud"></span>
                            <h4>Email</h4>
                            <p>Setelah menyelesaikan pengaduan, Anda akan menerima email bahwa pengaduan telah diterima.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="watch_video" class="watch-video padding-100">
        <div class="container-fluid">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Watch
                        <span> Video</span>
                    </h3>
                    <div class="space-25"></div>
                    <p>Pengaduan hanya dapat dilakukan oleh masyarakat Tebing Tinggi dan sedang Berada di Tebing Tinggi, Terima Kasih :)</p>
                    <div class="space-50"></div>
                </div>
                <div class="col-md-6 offset-md-3" data-aos="fade-up">
                    <div class="video" style="background-image: url('assets/img/people.jpg')">
                        <img src="assets/img/mobile-4-4.png" class="img-fluid d-block mx-auto" alt="">
                        <a href="http://youtube.com/watch?v=YZyF5esW9pI" data-lity></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="git_in_touch" class="git-in-touch padding-100 pb-0 background-fullwidth background-fixed" style="background-image: url(assets/img/gray-bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="text-center col-12 section-title" data-aos="fade-zoom-in">
                    <h3>Form
                        <span> Pengaduan </span>masyarakat
                    </h3>
                    <div class="space-25"></div>
                    <p>Silahkan Isi form Di bawah ini:</p>
                    <div class="space-50"></div>
                </div>
            </div>

            <?php if ($validation->getErrors()) : ?>
                <div class="alert alert-danger mt-2" role="alert">
                    <?= $validation->listerrors(); ?>
                </div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-success mt-2" role="alert">
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php endif; ?>
            <form data-aos="fade-up" action="<?= base_url('/lapor') ?>" method="POST">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="number" name="nik" placeholder="Enter Your NIK" required value="<?= old('nik') ?>"></input>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="text" name="nama" placeholder="Enter Your Name" value="<?= old('nama') ?>" required></input>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your email" value="<?= old('email') ?>" required>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Enter Your phone" value="<?= old('phone') ?>" required>
                            <span class="focus-border"></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" name="message" placeholder="Enter Your Message" required><?= old('message') ?></textarea>
                            <span class="focus-border"></span>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="space-25"></div>
                        <button type="submit" class="btn btn-primary shadow btn-colord btn-theme"><span>Send
                                complaint</span></button>
                    </div>
                </div>
            </form>
            <div class="space-50"></div>
            <div class="row contact-info">
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-right" data-aos-delay="400">
                        <span class="lnr lnr-map-marker"></span>
                        <h5>28 Green Tower, Street Name New York City, USA</h5>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-up" data-aos-delay="800">
                        <span class="lnr lnr-phone"></span>
                        <h5>+2 012 345 6789</h5>
                        <h5>+2 02 345 6789</h5>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <div class="info-box" data-aos="fade-left" data-aos-delay="1200">
                        <span class="lnr lnr-envelope"></span>
                        <a href="mailto:info@yourcompany.com">info@yourcompany.com</a>
                        <a href="mailto:sales@yourcompany.com">sales@yourcompany.com</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63729.431807688925!2d99.11910688942835!3d3.3280663797566588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303161afa64fb9a7%3A0x83c2d37addf7fbfc!2sKota%20Tebing%20Tinggi%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1607944346563!5m2!1sid!2sid" style="border:0" allowfullscreen></iframe>
    </section>

    <footer class="padding-10 pb-0">

        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <p>All rights reserved © <a href="#">KOMINFO</a>, 2020</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/lity.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>