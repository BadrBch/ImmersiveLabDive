      <!-- Section Header Default-->
      <?php $index = 'venue';include ('part-nav.php'); ?>
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title"><?php if($lang == "fr") echo "Comment venir à : "; else echo "How to come to ";?><i><?php echo $about["where"]; ?></i></h3>
        </div>
      </section>

    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-30">
                <h4><a href=""><b><?php echo $about["register_title"];?></b>
                          <svg class="svg-icon-sm svg-icon-primary" role="img">
                            <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                          </svg>
                        </a>
                </h4>
            </div>
                <div class="row row-30">
                    <?php echo $about["register"]; ?>
                </div>
            <div class="row row-30">
                <?php echo $about["where_long"]; ?>
            </div>
        </div>
    </section>


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
