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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

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

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <!-- Custom Style -->
    <style>
        .property_title{
            color: black;
        }

        .property_title:hover{
            color: grey;
        }
    </style>
 

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
                                <li class="active"><a href="<?php echo site_url('web/index'); ?>">Home</a></li>
                                <li><a href="<?php echo site_url('web/property'); ?>">Properti</a></li>
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

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[0]['foto_1']); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text" onclick="<?php echo base_url('application/views/property-details.php'); ?>">
                                <p class="room-location"><i class="icon_pin"></i> <?php echo $properti[0]['alamat_properti']; ?></p>
                                <h2><a class="property_title text-light" href="<?php echo site_url('web/property_details/'.$properti[0]['id_properti']); ?>"><?php echo $properti[0]['nama_properti']; ?></a></h2>
                                <div class="room-price">
                                    <span>Mulai Dari:</span>
                                    <p>Rp. <?php echo $properti[0]['harga_min']; ?> jt</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[0]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[0]['kamar_tidur']; ?> Kamar Tidur</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[0]['kamar_mandi']; ?> Kamar Mandi</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[0]['garasi']; ?> Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[1]['foto_1']); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text" onclick="<?php echo base_url('application/views/property-details.php'); ?>">
                                <p class="room-location"><i class="icon_pin"></i> <?php echo $properti[1]['alamat_properti']; ?></p>
                                <h2><a class="property_title text-light" href="<?php echo site_url('web/property_details/'.$properti[1]['id_properti']); ?>"><?php echo $properti[1]['nama_properti']; ?></a></h2>
                                <div class="room-price">
                                    <span>Mulai Dari:</span>
                                    <p>Rp. <?php echo $properti[1]['harga_min']; ?> jt</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[1]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[1]['kamar_tidur']; ?> Kamar Tidur</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[1]['kamar_mandi']; ?> Kamar Mandi</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[1]['garasi']; ?> Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[7]['foto_1']); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="hero-text" onclick="<?php echo base_url('application/views/property-details.php'); ?>">
                                <p class="room-location"><i class="icon_pin"></i> <?php echo $properti[7]['alamat_properti']; ?></p>
                                <h2><a class="property_title text-light" href="<?php echo site_url('web/property_details/'.$properti[7]['id_properti']); ?>"><?php echo $properti[7]['nama_properti']; ?></a></h2>
                                <div class="room-price">
                                    <span>Mulai Dari:</span>
                                    <p>Rp. <?php echo $properti[7]['harga_min']; ?> jt</p>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[7]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[7]['kamar_tidur']; ?> Kamar Tidur</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[7]['kamar_mandi']; ?> Kamar Mandi</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[7]['garasi']; ?> Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail-pic">
            <div class="thumbs owl-carousel">
                <div class="item">
                    <img src="<?php echo base_url('assets/img/property/'.$properti[0]['foto_1']); ?>" style="width: 164px; height: 94px">
                </div>
                <div class="item">
                    <img src="<?php echo base_url('assets/img/property/'.$properti[1]['foto_1']); ?>" style="width: 164px; height: 94px">
                </div>
                <div class="item">
                    <img src="<?php echo base_url('assets/img/property/'.$properti[7]['foto_1']); ?>" style="width: 164px; height: 94px">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Search Form Section Begin -->
    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="search-form-text">
                        <div class="search-text">
                            <i class="fa fa-search"></i>
                            Temukan Rumah Anda
                        </div>
                    </div>
                    <form action="#" class="filter-form"> 
                        <div class="form-group row mb-4">
                            <div class="col">
                                    <select id="cari_belisewa" class="form-control">
                                      <option disabled selected>Beli / Sewa</option>
                                    </select>
                                </div>
                            <div class="col">
                                <select id="cari_kota" class="form-control">
                                  <option disabled selected>Kota</option>
                                </select>
                            </div>
                            <div class="col">
                                <select id="cari_kamartidur" class="form-control">
                                  <option disabled selected>Kamar Tidur</option>
                                </select>
                            </div>
                            <div class="col">
                                <select id="cari_kamarmandi" class="form-control">
                                  <option disabled selected>Kamar Mandi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col">
                                <select id="cari_garasi" class="form-control">
                                  <option disabled selected>Garasi</option>
                                </select>
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <select id="cari_harga" class="form-control">
                                      <option disabled selected>Harga</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-row">
                                    <select id="cari_luas" class="form-control">
                                      <option disabled selected>Luas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary" style="width: 100%; height: 100%">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Form Section End -->

    <!-- How It Works Section Begin -->
    <section class="howit-works spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Temukan Rumah Impian Anda</span>
                        <h2>Cara Kerja</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo base_url('assets/img/howit-works/howit-works-1.png'); ?>" alt="">
                        <h4>Cari dan Temukan Hunian</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo base_url('assets/img/howit-works/howit-works-2.png'); ?>" alt="">
                        <h4>Temukan Ruang</h4>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-howit-works">
                        <img src="<?php echo base_url('assets/img/howit-works/howit-works-3.png'); ?>" alt="">
                        <h4>Hubungi Agen</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- How It Works Section End -->

    <!-- Feature Section Begin -->
    <section class="feature-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Properti Pilihan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="feature-carousel owl-carousel">
                    <!-- satu features -->
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[2]['foto_1']); ?>" style="width: 360px; height: 220px">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">Untuk <?php echo $properti[2]['dijual_disewa']; ?></div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="<?php echo base_url('assets/img/agent/'.$agen[0]['foto']); ?>" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span> <?php echo $agen[0]['nama_agen']; ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4><a class="property_title" href="<?php echo site_url('web/property_details/'.$properti[2]['id_properti']); ?>"><?php echo $properti[2]['nama_properti']; ?></a></h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> <?php echo $properti[2]['alamat_properti']; ?></li>
                                        <li><i class="fa fa-tag"></i> <?php echo $properti[2]['jenis_properti']; ?></li>
                                    </ul>
                                    <h5 class="price">Rp. <?php echo $properti[2]['harga_min']; ?> jt</h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[2]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[2]['kamar_tidur']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[2]['kamar_mandi']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[2]['garasi']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- satu features -->

                    <!-- satu features -->
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[3]['foto_1']); ?>" style="width: 360px; height: 220px">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">Untuk <?php echo $properti[3]['dijual_disewa']; ?></div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="<?php echo base_url('assets/img/agent/'.$agen[1]['foto']); ?>" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span> <?php echo $agen[1]['nama_agen']; ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4><a class="property_title" href="<?php echo site_url('web/property_details/'.$properti[3]['id_properti']); ?>"><?php echo $properti[3]['nama_properti']; ?></a></h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> <?php echo $properti[3]['alamat_properti']; ?></li>
                                        <li><i class="fa fa-tag"></i> <?php echo $properti[3]['jenis_properti']; ?></li>
                                    </ul>
                                    <h5 class="price">Rp. <?php echo $properti[3]['harga_min']; ?> jt</h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[3]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[3]['kamar_tidur']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[3]['kamar_mandi']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[3]['garasi']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- satu features -->

                    <!-- satu features -->
                    <div class="col-lg-4">
                        <div class="feature-item">
                            <div class="fi-pic set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti[8]['foto_1']); ?>" style="width: 360px; height: 220px">
                                <div class="pic-tag">
                                    <div class="f-text">feauture</div>
                                    <div class="s-text">Untuk <?php echo $properti[8]['dijual_disewa']; ?></div>
                                </div>
                                <div class="feature-author">
                                    <div class="fa-pic">
                                        <img src="<?php echo base_url('assets/img/agent/'.$agen[2]['foto']); ?>" alt="">
                                    </div>
                                    <div class="fa-text">
                                        <span> <?php echo $agen[2]['nama_agen']; ?> </span>
                                    </div>
                                </div>
                            </div>
                            <div class="fi-text">
                                <div class="inside-text">
                                    <h4><a class="property_title" href="<?php echo site_url('web/property_details/'.$properti[8]['id_properti']); ?>"><?php echo $properti[8]['nama_properti']; ?></a></h4>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i> <?php echo $properti[8]['alamat_properti']; ?></li>
                                        <li><i class="fa fa-tag"></i> <?php echo $properti[8]['jenis_properti']; ?></li>
                                    </ul>
                                    <h5 class="price">Rp. <?php echo $properti[8]['harga_min']; ?> jt</h5>
                                </div>
                                <ul class="room-features">
                                    <li>
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[8]['luas_max']; ?> m2</p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[8]['kamar_tidur']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[8]['kamar_mandi']; ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[8]['garasi']; ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- satu features -->
                </div>
            </div>
        </div>
    </section>
    <!-- Feature Section End -->

    <!-- Top Properties Section Begin -->
    <div class="top-properties-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-title">
                        <div class="section-title">
                            <span>Properti Terbaik Untuk Anda</span>
                            <h2>Properti Terbaik</h2>
                        </div>
                        <a href="<?php echo base_url('web/property'); ?>" class="top-property-all">Tampilkan Semua Properti</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="top-properties-carousel owl-carousel">
                <div class="single-top-properties">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="stp-pic">
                                <img src="<?php echo base_url('assets/img/property/'.$properti[0]['foto_1']); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stp-text">
                                <div class="s-text">Untuk <?php echo $properti[0]['dijual_disewa']; ?></div>
                                <h2><a class="property_title" href="<?php echo site_url('web/property_details/'.$properti[0]['id_properti']); ?>"><?php echo $properti[0]['nama_properti']; ?></a></h2>
                                <div class="room-price">
                                    <span>Mulai Dari:</span>
                                    <h4>Rp. <?php echo $properti[0]['harga_min']; ?> Jt</h4>
                                </div>
                                <div class="properties-location"><i class="icon_pin"></i> <?php echo $properti[0]['alamat_properti']; ?></div>
                                <p><?php echo $properti[0]['deskripsi_properti']; ?></p>
                                <ul class="room-features d-flex justify-content-between">
                                    <li class="m-0">
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[0]['luas_max']; ?> m2</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[0]['kamar_tidur']; ?> Kamar Tidur</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[0]['kamar_mandi']; ?> Kamar Mandi</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[0]['garasi']; ?> Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-top-properties">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="stp-pic">
                                <img src="<?php echo base_url('assets/img/property/'.$properti[1]['foto_1']); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="stp-text">
                                <div class="s-text">Untuk <?php echo $properti[1]['dijual_disewa']; ?></div>
                                <h2><a class="property_title" href="<?php echo site_url('web/property_details/'.$properti[1]['id_properti']); ?>"><?php echo $properti[1]['nama_properti']; ?></a></h2>
                                <div class="room-price">
                                    <span>Mulai Dari:</span>
                                    <h4>Rp. <?php echo $properti[1]['harga_min']; ?> Jt</h4>
                                </div>
                                <div class="properties-location"><i class="icon_pin"></i> <?php echo $properti[1]['alamat_properti']; ?></div>
                                <p><?php echo $properti[1]['deskripsi_properti']; ?></p>
                                <ul class="room-features d-flex justify-content-between">
                                    <li class="m-0">
                                        <i class="fa fa-arrows"></i>
                                        <p><?php echo $properti[1]['luas_max']; ?> m2</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-bed"></i>
                                        <p><?php echo $properti[1]['kamar_tidur']; ?> Kamar Tidur</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-bath"></i>
                                        <p><?php echo $properti[1]['kamar_mandi']; ?> Kamar Mandi</p>
                                    </li>
                                    <li class="m-0">
                                        <i class="fa fa-car"></i>
                                        <p><?php echo $properti[1]['garasi']; ?> Garasi</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Properties Section End -->

    <!-- Properti Di Kota Dan Provinsi Di Indonesia -->
    <section class="spad m-0 set-bg" data-setbg="https://www.qualityquotesolutions.com/newsletter/footer-background.png">
        <div class="container mx-auto" background-m>
            <div class="section-title">
                <h2>Temukan Properti Pada Kota Anda</h2>
            </div>
            <div class="d-flex justify-content-center">
                <button class="col-2 mx-2 bg-light btn">
                    <h4>Makassar</h4>
                </button>
                <button class="col-2 mx-2 bg-light btn">
                    <h4>Bandung</h4>
                </button>
                <button class="col-2  mx-2 bg-light btn">
                    <h4>Surabaya</h4>
                </button>
            </div>
        </div>
    </section>

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

    <script type="text/javascript">
        $(document).ready(function() {

          const $valueSpan = $('.valueSpan');
          const $value = $('#slider11');
          $valueSpan.html($value.val());
          $value.on('input change', () => {

            $valueSpan.html($value.val());
          });
        });
    </script>

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