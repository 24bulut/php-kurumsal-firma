
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><?php echo $config["company_name"] ?></h3>
            <p>
              <?php echo $config["address"] ?>
              <br>
              <strong>tel:</strong> <?php echo $config["phone1"] ?><br>
              <strong>tel::</strong> <?php echo $config["phone2"] ?><br>
            </p>

          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Bağlantılar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#body">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#iletisim">İletişim</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#hakkimizda">Hakkımızda</a></li>
            </ul>
          </div>

    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $config["company_name"] ?></span></strong>. 
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo  publicUrl('assets/vendor/jquery/jquery.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/php-email-form/validate.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/jquery-sticky/jquery.sticky.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/venobox/venobox.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/waypoints/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/counterup/counterup.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
  <script src="<?php echo  publicUrl('assets/vendor/aos/aos.js')?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo  publicUrl('assets/js/main.js')?>"></script>

</body>

</html>