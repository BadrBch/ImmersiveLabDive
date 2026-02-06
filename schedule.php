      <!-- Section Header Default-->
      <?php $index = 'schedule';include ('part-nav.php'); ?>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title">Schedule</h3>
        </div>
      </section>
      <!-- Section Schedule-->
      <!-- Section Conference Schedule-->
    <?php include ('schedulePlan.php'); ?>
      <!-- Divider-->
      <div class="divider divider-gray-900 text-center"></div>
      <!-- Footer Classic-->
      <?php include('part-footer.php'); ?>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <div class="block-with-svg-gradients">
      <svg xmlns="http://www.w3.org/2000/svg">
        <defs>
          <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:rgb(130,46,168);stop-opacity:1"></stop>
            <stop offset="100%" style="stop-color:rgb(217,14,144);stop-opacity:1"></stop>
          </lineargradient>
        </defs>
      </svg>
    </div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
