<?php
    $index = 'sponsors';include ('part-nav.php');
?>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title"><?php echo ($lang=="fr"?"Nos sponsors":"Our Sponsors");?></h3>
        </div>
      </section>
      <!-- Section Grid Gallery-->
        <div class="parallax-content section-lg context-dark text-center">
          <div class="container">
            <div class="row row-30">
            <?php
                $sponsors = json_decode(file_get_contents("_sponsors.json"), true);
                foreach($sponsors as $key => $value){
                    echo '                    
                <div class="col-md-20 col-lg-3">
                <div>
                  <!-- Speaker-->
                  <div class="speaker">
                    <div class="speaker-img" data-triangle=".speaker-overlay">
                      <div class="speaker-overlay"></div><a href="#"><img src="'.$value["logo"].'" alt="" width="400" height="400"/></a>
                      <ul class="speaker-social-list">
                        <li><a class="icon icon-xs fa-link" href="'.$value["lien"].'" target="new"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                </div>';
            }
            ?>
            </div>
          </div>
        </div>
    </section>
     <div class="divider divider-gray-900 text-center"></div>
      <!-- Footer Classic-->
      <?php $index = 1;include('part-footer.php'); ?>
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