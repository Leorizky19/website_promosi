<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
    <?php foreach($banner as $key => $value) { ?>

    <h1><?= $value->text1?></h1>>
      <h2><?= $value->text2?></h2>
      <div class="d-flex justify-content-center justify-content-lg-start">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
      <img src="<?= base_url('upload/banner/' .$value->image);?>" class="img-fluid animated" alt="">
    </div>
  </div>
  <?php } ?>
</div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Cliens Section ======= -->
    <section id="cliens" class="cliens section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">
        <?php foreach($partner as $key => $value) { ?>
          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="<?= base_url('upload/partner/' .$value->image);?>" class="img-fluid" alt="">
          </div>
          <?php } ?>
        </div>
      
      </div>
      
    </section><!-- End Cliens Section -->

     <!-- ======= About Us Section ======= -->
     <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang Aplikasi</h2>
        </div>

        <div class="row content">
          <div class="col-lg-12">
          <?php foreach($about as $key => $value) { ?>
            <p>
              <?= $value->text?>
            </p>
            <ul>
              <?php
              $a= explode (",", $value->texts);
              for($i=0; $i<count($a); $i++){
                echo'<li class="ri-check-double-line">' .$a[$i].'</li>';
              }
              ?>
            </ul>
            <?php } ?>
          </div>
          
        </div>
        
      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <?php foreach ($header_about as $key => $value) {?>
              <h3><?= $value->text?></strong></h3>
              <p><?= $value->texts?>
              </p>
              <?php }?>
            </div>

            <div class="accordion-list">
              <ul>
              <?php $no = 1; 
                  foreach ($content_about as $key => $value){?>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list<?php echo $value->id_content;?>"><span><?= $no++; ?>
                </span> <?= $value->text?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list<?php echo $value->id_content;?>" class="collapse <?php if($value->id_content == 4){echo "show";}?>" data-bs-parent=".accordion-list">
                    <p>
                    <?= $value->texts?>
                    </p>
                  </div>
                </li>
                <?php }?>
              </ul>
            </div>
          </div>
          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?= base_url();?>/front-end/assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="<?= base_url();?>/front-end/assets/img/skills.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
          <?php foreach ($header_about2 as $key => $value) {?>
            <h3><?= $value->text?></h3>
            <p class="fst-italic">
            <?= $value->texts?>
            </p>
            <?php }?>
            <div class="skills-content">
            <?php foreach ($content_about2 as $key => $value) {?>
              <div class="progress">
                <span class="skill"><?= $value->text?> <i class="val"> <?= $value->persen?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" 
                  aria-valuenow="<?= $value->persen?>" 
                  aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <?php }?>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
        </div>
        
        <div class="row">
          <?php foreach ($service as $key =>$value){?>
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx <?= $value->icon?>"></i></div>
              <h4><a href=""><?= $value->text?></a></h4>
              <p><?= $value->texts?></p>
            </div>
            
          </div>
          <?php }?>
          <br>
        </div>
        
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <?php foreach ($hub as $key => $value){?>
          <div class="col-lg-9 text-center text-lg-start">
            <h3><?= $value->text?></h3>
            <p><?= $value->texts?></p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="<?= $value->link?>">Call To Action</a>
          </div>
        </div>
          <?php }?>
      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Berikut Ini aplikasi lainnya yang telah kami buat !!</p>
        </div>
        
        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
        
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($portofolio as $key => $value){?> 
          <div class="col-lg-4 col-md-6 portfolio-item <?= $value->keys?>">
            <div class="portfolio-img"><img src="<?= base_url('upload/portofolio/' .$value->image);?>" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4><?= $value->title?></h4>
              <p><?= $value->text?></p>
              <a href="<?= base_url('upload/portofolio/' .$value->image);?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $value->title?>"><i class="bx bx-plus"></i></a>
              <a href="<?= $value->link?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <?php }?>
        </div>
        
      </div>
    </section><!-- End Portfolio Section -->



    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <?php foreach($header_pricing as $key => $value){?>
          <p><?= $value->text?></p><br>
          <?php }?>
        </div>

        <div class="row">
            <?php foreach ($pricing as $key => $value){?>
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="box featured">
              <h3><?= $value->header?></h3>
              <h4><sup>Rp.</sup><?= $value->harga?><span>per month</span></h4>
              <ul>
              <?php
              $a= explode (",", $value->text);
              for($i=0; $i<count($a); $i++){
                echo'<li><i class="bx bx-check"></i>' .$a[$i].'</li>';
              }
              ?>
              </ul>
              <a href="<?= $value->link?>" class="buy-btn">Get Started</a>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <?php
            if ($this->session->flashdata('pesan')) {

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }?>
        <div class="row">
             
          <div class="col-lg-5 d-flex align-items-stretch">
          <?php foreach ($address as $key => $value){?>
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p><?= $value->alamat?></p>
              </div>
                

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><?= $value->email?></p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p><?= $value->telepon?></p>
              </div>
              <?php }?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5425556771224!2d107.6249733143174!3d-6.945141669918667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8612c38ffff%3A0xdc238cc7cb1d24e2!2sKhazanah%20Maeru%20Sinergis!5e0!3m2!1sid!2sid!4v1639633886474!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>
         
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          
            <form action="<?= base_url('home/add')?>" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subjek" id="subjek" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="pesan" rows="10" required></textarea>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->