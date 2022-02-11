<!-- ======= Footer ======= -->
<footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">
    
      <div class="col-lg-3 col-md-6 footer-contact">
      <?php foreach ($footer as $key => $value){?>
        <h3>Company</h3>
        <?php
              $a= explode ("::", $value->kontak);
              for($i=0; $i<count($a); $i++){
                echo'<p><br>' .$a[$i].'</p>';
              }
              ?>
      </div>
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
        <?php
              $a= explode ("::", $value->text);
              for($i=0; $i<count($a); $i++){
                echo'<li><i class="bx bx-chevron-right"> </i>' .$a[$i].'</li>';
              }
              
              ?>
         
        </ul>
      </div>
     
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
        <?php
              $a= explode ("::", $value->texts);
              for($i=0; $i<count($a); $i++){
                echo'<li><i class="bx bx-chevron-right"> </i>' .$a[$i].'</li>';
              }
              
              ?>
        </ul>
      </div>
      
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p><?= $value->sosial_media?></p>
        <?php }?>
        <div class="social-links mt-3"> 
          <?php foreach ($media_sosial as $key => $value){?>
          <a href="<?= $value->link?>" class="<?= $value->nama_media?>"><i class="<?= $value->icon?>"></i></a>
          <?php }?>
        </div>
      
      </div>
    
    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>LRzky</span></strong>. All Rights Reserved
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