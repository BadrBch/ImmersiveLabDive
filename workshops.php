      <!-- Section Header Default-->
      <?php
    	$workshop = $_GET["workshop"];
        if(!$workshop)
        	exit(0);
        $doc = json_decode(file_get_contents("workshops/".$workshop.".json"), true);
        $index = 'workshops';include ('part-nav.php');
      ?>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title"><?php echo $doc["title"]; ?></h3>
          <h4><?php echo $doc["subTitle"]; ?></h4>
        </div>
      </section>
      <!-- Section Schedule-->
      <!-- Section Conference Schedule-->
    <?php 
    	include ('workshops/itemList.php');
    ?>
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
