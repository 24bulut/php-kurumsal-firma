<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">


        <?php $i = 0;
        foreach ($sliders as $slider) :
          $i++;
        ?>
          <!-- Slide 1 -->
          <div class="carousel-item <?php echo $i == 1 ? 'active' : ' '; ?>" style="background-image: url('<?php echo publicUrl('img/slider/' . $slider["image_url"]) ?>');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown"><?php echo $slider["title"]?></h2>
                <p class="animate__animated animate__fadeInUp"><?php echo $slider["content"]?></p>
                <a href="#hakkimizda" class="btn-get-started animate__animated animate__fadeInUp scrollto">Hakkımızda</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>



        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
</section><!-- End Hero -->
<main id="main">
  <section id="hizmetlerimiz" class="faq section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Hizmetlerimiz</h2>
      </div>

      <div class="row d-flex align-items-stretch">
        <?php foreach ($services as $service) : ?>
          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4><?php echo $service["title"]  ?></h4>
            <p>
              <?php echo $service["content"]  ?>
            </p>
          </div>

        <?php endforeach; ?>


      </div>

    </div>
  </section><!-- End Frequently Asked Questions Section -->
  <!-- ======= Contact Us Section ======= -->
  <section id="iletisim" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>İletişim</h2>
      </div>

      <div class="row">

        <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Adres</h3>
            <p><?php echo $config["address"] ?></p>
          </div>
        </div>

        <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email</h3>
            <p><?php echo $config["email"] ?></p>
          </div>
        </div>

        <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="info-box ">
            <i class="bx bx-phone-call"></i>
            <h3>Telefon</h3>
            <p><?php echo $config["phone1"] ?><br><?php echo $config["phone2"] ?></p>
          </div>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
          <iframe src="<?php echo $config["google_maps_code"] ?>" width="100%" height="300px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

      </div>

    </div>
  </section><!-- End Contact Us Section -->


  <section id="hakkimizda" class="portfolio section-bg">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="section-title">
        <h2>Hakkımızda</h2>
        <p>
          <?php echo  $config["about_us"] ?>
        </p>
      </div>


    </div>
  </section><!-- End Our Portfolio Section -->


  <section id="galeri" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Galeri</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-2">

        <?php foreach ($galery as  $image) : ?>
          <div class="col">
            <img src="<?php echo publicUrl("img/galery/".$image["image_url"]) ?>" class="card-img" alt="...">
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </section>

</main>