<html>

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

    <!-- Property Details Hero Section Begin -->
    <section class="pd-hero-section set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$properti['foto_1']); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="pd-hero-text">
                        <p class="room-location"><i class="icon_pin"></i> <?php echo $properti['alamat_properti']; ?></p>
                        <h2> <?php echo $properti['nama_properti']; ?></h2>
                        <div class="room-price">
                            <span>Mulai Dari:</span>
                                <p>Rp. <?php echo $properti['harga_min']; ?> jt</p>
                            </div>
                            <ul class="room-features">
                                <li>
                                    <i class="fa fa-arrows"></i>
                                    <p><?php echo $properti['luas_max']; ?> m2</p>
                                </li>
                                <li>
                                    <i class="fa fa-bed"></i>
                                    <p><?php echo $properti['kamar_tidur']; ?> Kamar Tidur</p>
                                </li>
                                <li>
                                    <i class="fa fa-bath"></i>
                                    <p><?php echo $properti['kamar_mandi']; ?> Kamar Mandi</p>
                                </li>
                                <li>
                                    <i class="fa fa-car"></i>
                                    <p><?php echo $properti['garasi']; ?> Garasi</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Details Hero Section Begin -->

    <!-- Property Details Section Begin -->
    <section class="property-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mt-5">
                    <div class="pd-details-text">
                        <!-- image carousel -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/property/'.$properti['foto_1']); ?>" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/property/'.$properti['foto_2']); ?>" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="<?php echo base_url('assets/img/property/'.$properti['foto_3']); ?>" alt="Third slide">
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>

                        <div class="pd-desc mt-5">
                            <h4>Deskripsi</h4>
                            <p><?php echo $properti['deskripsi_properti']; ?></p>
                        </div>

                        <!-- Overview property -->
                        <div class="pd-desc mt-5">
                            <h4>Overview</h4>
                            <div class="row">
                                <div class="col-4 p-0">
                                    <ul class="list-group">
                                      <li class="list-group-item">Jenis Properti </li>
                                      <li class="list-group-item">Tipe Penjualan</li>
                                      <li class="list-group-item">Kota</li>
                                      <li class="list-group-item">Luas</li>
                                      <li class="list-group-item">Kamar Tidur</li>
                                      <li class="list-group-item">Kamar Mandi</li>
                                      <li class="list-group-item">Garasi</li>
                                    </ul>
                                </div>
                                <div class="col-8 p-0">
                                    <ul class="list-group">
                                      <li class="list-group-item"><?php echo $properti['jenis_properti']; ?> </li>
                                      <li class="list-group-item"><?php echo $properti['dijual_disewa']; ?></li>
                                      <li class="list-group-item"><?php echo $properti['kota_properti']; ?></li>
                                      <li class="list-group-item"><?php echo $properti['luas_max']; ?></li>
                                      <li class="list-group-item"><?php echo $properti['kamar_tidur']; ?></li>
                                      <li class="list-group-item"><?php echo $properti['kamar_mandi']; ?></li>
                                      <li class="list-group-item"><?php echo $properti['garasi']; ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="col-lg mt-5 ml-4 px-5 border-left">
                        <h4 style="text-align: center">Agen</h4><br>
                        <div class="card mx-auto" style="width: 17rem;">
                          <img class="card-img-top" src="<?php echo base_url('assets/img/agent/'.$agen['foto']); ?>" style="height: 270px" alt="Card image cap">
                          <div class="card-body mx-auto">
                            <a href="<?php echo site_url('web/agent_details/'.$agen['id_agen']); ?>"><h5 class="card-title"><?php echo $agen['nama_agen']; ?></h5></a>
                            <span><?php echo $agen['agensi']; ?></span><br>
                            <span><?php echo $agen['wilayah_agen']; ?></span>
                            <div class="col p-2 bg-success rounded mt-2">
                                <span class="ml-2" style="color: white">+6282182948172</span>
                            </div>
                          </div>
                        </div><br>
                        <hr>
                        <br>
                        <h4 style="text-align: center">Kirim Pesan ke Agen</h4><br>
                        <form action="#">
                            <div class="form-group row">
                                <input class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
                            </div>
                            <div class="form-group row">
                                <input class="form-control" type="text" name="email" placeholder="Masukkan Email">
                            </div>
                            <div class="form-group row">
                                <textarea class="form-control" rows="3" name="pesan" placeholder="Masukkan Pesan"></textarea> 
                            </div>
                            <div class="form-group row">
                                <input class="btn btn-primary" value="Kirim Pesan" onclick="kirimPesan()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property Details Section End -->

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

    <!-- custom script -->
    <script type="text/javascript">
        function kirimPesan(){
            alert('Pesan Berhasil Dikirim!')
        }
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