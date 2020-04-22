<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ontoso</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/elegant-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/themify-icons.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slicknav.min.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav navbar-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <nav class="main-menu">
                            <ul>
                                <li class="navbar-brand">ONTOSO</li>
                                <li><a href="<?php echo site_url('web/index'); ?>">Home</a></li>
                                <li class="active"><a href="<?php echo site_url('web/property'); ?>">Properti</a></li>
                                <li><a href="<?php echo site_url('web/aboutus'); ?>">Tentang Kami</a></li>
                                <li><a href="<?php echo site_url('web/contact'); ?>">Kontak</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Property Section Begin -->
    <section class="property-section pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mr-5">
                        <h4 class="mb-5">Cari Property</h4>
                        <form action="#" method="post">
                            <div class="form-group">
                                <div class="row mb-3">
                                    <select id="cari_belisewa" class="form-control">
                                      <option disabled selected>Beli / Sewa</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <select id="cari_kota" class="form-control">
                                      <option disabled selected>Kota</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <select id="cari_kamartidur" class="form-control">
                                      <option disabled selected>Kamar Tidur</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <select id="cari_kamarmandi" class="form-control">
                                      <option disabled selected>Kamar Mandi</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <select id="cari_garasi" class="form-control">
                                      <option disabled selected>Garasi</option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <select id="cari_harga" class="form-control">
                                      <option disabled selected>Harga</option>
                                    </select>
                                </div>
                                <div class="row mb-4">
                                    <select id="cari_luas" class="form-control">
                                      <option disabled selected>Luas</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary" style="width: 100%; height: 100%">Search</button>
                                </div>
                                
                            </div>
                        </form>
                    
                </div>
                <div class="col-lg-8">
                    <h4 class="property-title">Property(10)</h4>
                    <div class="property-list">
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?php echo base_url('assets/img/properties/property-1.jpg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">Untuk Di jual</div>
                                        <h5 class="r-title">Villa Istana Bunga</h5>
                                        <div class="room-price">
                                            <span>Harga Mulai:</span>
                                            <h5>Rp.3.0000.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i>Jl. Anggrek V, Cihanjuang Rahayu, Kec. Parongpong, Kabupaten Bandung Barat, Jawa Barat 40559</div>
                                        <p>Tempat yang asri dengan depenuhi oleh tumbuh tumbuan yang membuat anda merasa nyaman untuk tinggal disana dan memiliki akses ke amanan 24 jam,akses Ke tol 5 menit dekat dengan rumah sakit,swalayan,pusat olahraga</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Kamar Tidur</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Kamar Mandi</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Bagasi</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?php echo base_url('assets/img/properties/property-2.jpg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">Untuk DI Jual</div>
                                        <h5 class="r-title">Modern villa</h5>
                                        <div class="room-price">
                                            <span>Mulai Dari:</span>
                                            <h5>Rp.10.000.800.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> Megamendung,Bogor
                                           </div>
                                        <p>modern villa terletak di Vella Hillis Bogor yang berjarak 9km daei prasasti Batutulis,serta 12km dari tugu kujang dan museum zoologi bogor.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Kamar Tidur</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Kamar Mandi</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Bagasi</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?php echo base_url('assets/img/properties/property-3.jpg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">Untuk Di Jual</div>
                                        <h5 class="r-title">Green Garden</h5>
                                        <div class="room-price">
                                            <span>Mulai Dari:</span>
                                            <h5>Rp.6.000.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i> </div>DKI Jakarta, Jakarta Barat , Green Garden
                                        <p>Rumah masih baru di bangun Bebas Banjir 5 menit dari Tol,Dekat dengan pusat pembelanjaan,pusat olah raga,dan dekat dengan bandara,MRT.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Kamar Tidur</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Kamar Mandi</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Bagasi</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?php echo base_url('assets/img/properties/property-4.jpg'); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">Untuk Di Jual</div>
                                        <h5 class="r-title">CLUSTER BAMBU APUS VILLAGE</h5>
                                        <div class="room-price">
                                            <span>Mulai Dari:</span>
                                            <h5>Rp.4.000.000.000</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i>DKI Jakarta, Jakarta Timur , Bambu Apu</div>
                                        <p>Rumah masih baru di bangun Bebas Banjir 5 menit dari Tol,Dekat dengan pusat pembelanjaan,pusat olah raga,dan dekat dengan bandara,MRT.</p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p>5201 sqft</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p>8 Kamar Tidur</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p>7 Kamar Mandi</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p>1 Bagasi</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="property-pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section">
        <div class="container">
            <div class="partner-carousel owl-carousel">
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="https://upload.wikimedia.org/wikipedia/id/thumb/c/c4/Telkom_Indonesia_2013.svg/1200px-Telkom_Indonesia_2013.svg.png">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="https://4.bp.blogspot.com/-9VTyeUD481k/UNa_6i0DaHI/AAAAAAAAIbM/rQ2loY9y5Aw/s1600/LOGO+KEMENTERIAN+PERUMAHAN+RAKYAT.png" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2013/2/logo-untuk-kompleks-perumahan-512b640d3c0aa1429700081b/normal_eaede153e8.jpg" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTBs00CT1YjYyMvYxTBLmVjnpQkHx8bGWcBk9ujO0o_5w15l3Gw&usqp=CAU" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="https://sribu-sg.s3.amazonaws.com/assets/media/contest_detail/2015/5/desain-logo-untuk-perumahan-th-residence-554c3f03e46e780fc7000002/1513d2c0e3.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Partner Carousel Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section set-bg" data-setbg="<?php echo base_url('assets/img/footer-bg.jpg'); ?>">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="#"><h3 style="color: white">ONTOSO</h3></a>
                            </div>
                            <p>Berlangganan untuk mendapatkan berita terbaru</p>
                            <form action="#" class="newslatter-form">
                                <input type="text" placeholder="Masukan Email Anda...">
                                <button type="submit"><i class="fa fa-location-arrow"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Kota Properti</h4>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Jakarta</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Bandung</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Bogor</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Medan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Sosial</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contact Us</h4>
                            <ul class="contact-option">
                                <li><i class="fa fa-map-marker"></i> Jl. Budi Kemuliaan No.13, RT.2/RW.3, Gambir.</li>
                                <li><i class="fa fa-phone"></i> (+88) 666 121 4321</li>
                                <li><i class="fa fa-envelope"></i> ontoso@gmail.com</li>
                                <li><i class="fa fa-clock-o"></i> Sen - Sab, 08 - 18</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>