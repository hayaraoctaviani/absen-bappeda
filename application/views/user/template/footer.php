<footer class="footer" data-background-color="black">
    <div class="container">
      <div class="copyright float-center">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?php echo base_url('assets/user/js/core/jquery.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/user/js/core/popper.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/user/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/user/js/plugins/moment.min.js') ?>"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?php echo base_url('assets/user/js/plugins/bootstrap-datetimepicker.js') ?>" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url('assets/user/js/plugins/nouislider.min.js') ?>" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url('assets/user/js/material-kit.js?v=2.0.7') ?>" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
</body>

</html>