<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Azenta Template">
    <meta name="keywords" content="Azenta, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONTOSO</title>

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
                                <li><a href="<?php echo site_url('web/agent'); ?>">Agent</a></li>
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
    <section class="property-section spad">
        <div class="container">
            <div class="row">
                <!-- cari properti -->
                <div class="col-lg-3 mr-5">
                        <h4 class="mb-5">Cari Property</h4>
                        <form action="<?php echo site_url('web/search_property'); ?>" method="post"> 
                        <div class="form-group mb-4">
                            <div class="form-group row">
                                    <select id="cari_belisewa" name="dijual_disewa" class="form-control">
                                      <option disabled selected>Beli / Sewa</option>
                                      <option value="Dijual">Beli</option>
                                      <option value="Disewa">Sewa</option>
                                      <option value="Semua">Semua</option>
                                    </select>
                                </div>
                            <div class="form-group row">
                                <select id="cari_kota" name="kota_properti" class="form-control">
                                  <option disabled selected>Kota</option>
                                  <option>Makassar</option>
                                  <option>Tanggerang</option>
                                  <option>Jakarta</option>
                                  <option>Bandung</option>
                                  <option>Surabaya</option>
                                  <option value="Semua">Semua</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select id="cari_kamartidur" name="kamar_tidur" class="form-control">
                                  <option disabled selected>Kamar Tidur</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="Semua">Semua</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select id="cari_kamarmandi" name="kamar_mandi" class="form-control">
                                  <option disabled selected>Kamar Mandi</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="Semua">Semua</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <select id="cari_garasi" name="garasi" class="form-control">
                                  <option disabled selected>Garasi</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="Semua">Semua</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                    <select id="cari_harga" name="harga" class="form-control">
                                      <option disabled selected>Harga</option>
                                      <option value="<100">Kurang Dari 100 Juta</option>
                                      <option value="100-200">100 - 200 Juta</option>
                                      <option value="201-300">201 - 300 Juta</option>
                                      <option value="301-400">301 - 400 Juta</option>
                                      <option value="401-500">401 - 500 Juta</option>
                                      <option value="501-600">501 - 600 Juta</option>
                                      <option value="601-700">601 - 700 Juta</option>
                                      <option value="701-800">701 - 800 Juta</option>
                                      <option value="801-900">801 - 900 Juta</option>
                                      <option value="901-1000">901 - 1000 Juta</option>
                                      <option value=">1000">Lebih Besar Dari 1 M</option>
                                      <option value="Semua">Semua</option>
                                    </select>
                            </div>
                            <div class="form-group row">
                                    <select id="cari_luas" name="luas" class="form-control">
                                      <option disabled selected>Luas</option>
                                      <option value="<100">Kurang Dari 100 m2</option>
                                      <option value="100-200">100 - 200 m2</option>
                                      <option value="201-300">201 - 300 m2</option>
                                      <option value="301-400">301 - 400 m2</option>
                                      <option value="401-500">401 - 500 m2</option>
                                      <option value=">500">Lebih Besar Dari 600 m2</option>
                                      <option value="Semua">Semua</option>
                                    </select>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-primary" style="width: 100%; height: 100%">Search</button>
                            </div>
                        </div>
                    </form>                  
                </div>

                <!-- daftar properti -->
                <div class="col-lg-8">
                    <h4 class="mb-5">Daftar Properti</h4>
                    <div class="property-list">
                        <?php foreach ($property as $row) { ?>
                            
                        <!-- satu properti -->
                        <div class="single-property-item">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="property-pic">
                                        <img src="<?php echo base_url('assets/img/property/'.$row['foto_1']); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="property-text">
                                        <div class="s-text">Untuk <?php echo $row['dijual_disewa']; ?> </div>
                                        <a href="<?php echo site_url('web/property_details/'.$row['id_properti']); ?>"><h5 class="r-title"><?php echo $row['nama_properti']; ?></h5></a>
                                        <div class="room-price">
                                            <span>Harga Mulai:</span>
                                            <h5>Rp. <?php echo $row['harga_min']; ?> Jt</h5>
                                        </div>
                                        <div class="properties-location"><i class="icon_pin"></i><?php echo $row['alamat_properti']; ?>
                                        </div>
                                        <p><?php echo $row['deskripsi_properti']; ?></p>
                                        <ul class="room-features">
                                            <li>
                                                <i class="fa fa-arrows"></i>
                                                <p><?php echo $row['luas_max']; ?> m2</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bed"></i>
                                                <p><?php echo $row['kamar_tidur']; ?> Kamar Tidur</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath"></i>
                                                <p><?php echo $row['kamar_mandi']; ?> Kamar Mandi</p>
                                            </li>
                                            <li>
                                                <i class="fa fa-car"></i>
                                                <p><?php echo $row['garasi']; ?> Garasi</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- satu property -->

                        <?php } ?>                        
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