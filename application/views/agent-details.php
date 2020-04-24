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
                                <li><a href="<?php echo site_url('web/property'); ?>">Properti</a></li>
                                <li class="active"><a href="<?php echo site_url('web/agent'); ?>">Agent</a></li>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section contact-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Agent</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section Begin -->

    <!-- Contact Section Begin -->
    <section class="contact-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-5">                   

                    	<div class="row bg-light p-5">
                            <div>
                            	<img src="<?php echo base_url('assets/img/agent/'.$agen['foto']); ?>" style="height: 270px" rounded">
                            </div>
                            <div class="offset-md-1 my-auto">
                            	<h4><?php echo $agen['nama_agen']; ?></h4>
                            	<h6><?php echo $agen['agensi']; ?></h6><br>
                                <div class="btn btn-success"><?php echo $agen['no_hp']; ?></div>
                            </div>
                        </div>

                        <div class="row bg-light mt-3 p-5">
                            <h4>Perkenalan</h4><br><br>
                        	<p>
                        		<?php echo $agen['perkenalan']; ?>
							</p>
                        </div>

                        <div class="row bg-light my-3 p-5">
                            <h4>List Property</h4><br><br>
                            <div class="feature-carousel owl-carousel">
                                
                                <?php foreach ($properti as $row) { ?>

                                <div class="col-lg-4">
                                    <div class="feature-item">
                                        <div class="fi-pic set-bg" data-setbg="<?php echo base_url('assets/img/property/'.$row['foto_1']); ?>">
                                            <div class="pic-tag">
                                                <div class="s-text"><?php echo $row['dijual_disewa']; ?></div>
                                            </div>
                                            <div class="feature-author">
                                                <div class="fa-pic">
                                                    <img src="<?php echo base_url('assets/img/agent/'.$agen['foto']); ?>" alt="">
                                                </div>
                                                <div class="fa-text">
                                                    <span><?php echo $agen['nama_agen']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fi-text">
                                            <div class="inside-text">
                                                <h4><a class="text-dark" href="<?php echo site_url('web/property_details/'.$row['id_properti']); ?>"><?php echo $row['nama_properti']; ?></a></h4>
                                                <ul>
                                                    <li><i class="fa fa-map-marker"></i> <?php echo $row['alamat_properti']; ?></li>
                                                    <li><i class="fa fa-tag"></i> <?php echo $row['jenis_properti']; ?></li>
                                                </ul>
                                                <h5 class="price">Rp. <?php echo $row['harga_min']; ?> jt</h5>
                                            </div>
                                            <ul class="room-features">
                                                <li>
                                                    <i class="fa fa-arrows"></i>
                                                    <p><?php echo $row['luas_min']; ?> m2</p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bed"></i>
                                                    <p><?php echo $row['kamar_tidur']; ?></p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-bath"></i>
                                                    <p><?php echo $row['kamar_mandi']; ?></p>
                                                </li>
                                                <li>
                                                    <i class="fa fa-car"></i>
                                                    <p><?php echo $row['garasi']; ?></p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>
                    
                            </div>
                        </div>
                    
                </div>
                <div class="col-lg-4 pr-5">
                    <div class="col mt-5 p-5 bg-light">
                        <h4>Kirim Pesan</h4><br>
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
                                <input class="btn btn-primary" onclick="kirimPesan()" value="Kirim Pesan">
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
    <script type="text/javascript">
        function kirimPesan(){
            alert('Pesan Berhasil Dikirim');
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