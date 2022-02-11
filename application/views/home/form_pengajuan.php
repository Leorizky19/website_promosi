<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company | Pengajuan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url();?>/front-end/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url();?>/front-end/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url();?>/front-end/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url();?>/front-end/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url();?>/front-end/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.7.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="<?= base_url('home');?>">Company</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->

  <main id="main">
      
  <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
      <div class="section-title">
          <h2>Form</h2>
          <p>Daftarkan diri Anda untuk demo interaktif gratis.</p>
        </div>

        <?php
            if ($this->session->flashdata('pesan')) {

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }?>

         <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
          
          <form action="<?= base_url('home/add_form')?>" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" Placeholder="Nama Lengkap" id="nama" required>
              </div>
              <div class="form-group col-md-6">
              <label for="name">Perusahaan</label>
              <input type="text" class="form-control" name="perusahaan" id="perusahaan"  Placeholder="Nama Perusahaan" required>
            </div>
              <div class="form-group col-md-6">
              <label for="name">Jumlah Karyawan</label>
              <input type="text" class="form-control" name="karyawan" id="karyawan"  Placeholder="Jumlah Karyawan" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Nomor Telepon</label>
              <input type="text" class="form-control" name="telepon" id="telepon"  Placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Email</label>
              <input type="text" class="form-control" name="email" id="email"  Placeholder="Email" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="jabatan"  Placeholder="Jabatan" required>
            </div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

  <footer id="footer">

  <div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>LRizky</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?= base_url();?>/front-end/assets/vendor/aos/aos.js"></script>
<script src="<?= base_url();?>/front-end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>/front-end/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?= base_url();?>/front-end/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?= base_url();?>/front-end/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?= base_url();?>/front-end/assets/vendor/waypoints/noframework.waypoints.js"></script>


<!-- Template Main JS File -->
<script src="<?= base_url();?>/front-end/assets/js/main.js"></script>
</body>
</html>