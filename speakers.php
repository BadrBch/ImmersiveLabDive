      <!-- Section Header Default-->
      <?php $index = 'speakers';include ('part-nav.php'); ?>
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
          <h3 class="breadcrumbs-custom-title">Speakers</h3>
        </div>
      </section>
      <!-- Section Senior Speakers-->
      <section class="parallax-container section" data-parallax-img="images/bg-parallax-02-1894x1950.jpg">
        <div class="parallax-content section-lg context-dark text-center">
          <div class="container">
            <h4 class="text-secondary">Keynote speakers</h4>
            <div class="row row-30">
            <?php
                $keynotes = json_decode(file_get_contents("_speakers.json"), true);
                $i=0;
                foreach($keynotes as $key => $value){
                    $i++;
                    echo '                    
              <div class="col-md-20 col-lg-3">
                <div>
                  <!-- Speaker-->
                  <div class="speaker">
                    <div class="speaker-img" data-triangle=".speaker-overlay">
                      <div class="speaker-overlay"></div><a href="#accordion0-card-head-title'. $i .'"><img src="'.$value["photo"].'" alt="" width="334" height="354"/></a>
                      <ul class="speaker-social-list">
                        <li><a class="icon icon-xs fa-link" href="'.$value["lien"].'" target="new"></a></li>
                        <!-- twitter link -->
                      </ul>
                    </div>
                    <h5 class="speaker-title"><a href="#accordion0-card-head-title'. $i .'">'.$value['nom'].'</a></h5>
                    <p class="speaker-position">'.$value["titre"].'<br/>'.$value["etablissement"].'</p>
                  </div>
                </div>
              </div>';
                }
            ?>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default text-center">
        <div class="container">
            <h6>Speakers Short Bios</h6>
            <div class="block-lg block-center">
                <div class="card-group-custom card-group-corporate" id="accordion0" role="tablist" aria-multiselectable="false">
            <?php
                $i = 0;
                foreach($keynotes as $key => $value){
                    $i ++;
                    echo '                    
            <article class="card card-custom card-corporate">
              <div class="card-header" role="tab">
                <div class="card-title">
                  <a class="collapsed" id="accordion0-card-head-title'. $i .'" data-toggle="collapse" data-parent="#accordion0" href="#accordion0-card-body-content'.$i.'" aria-controls="accordion0-card-body-content'.$i.'" aria-expanded="false" role="button">
                  </a>
                    <span class="schedule-classic">
                        <span class="unit unit-spacing-md align-items-start d-block d-md-flex">
                            <a href="'.$value["lien"].'" target="new">
                                <span class="unit-left"><span class="schedule-classic-img"><img src="'.$value["photo"].'" alt="" width="122" height="122"/></span></span>
                            </a>
                            <span class="unit-body">'.$value["bio"].'<a>&nbsp;</a></span>
                        </span>
                    </span>
                  </div>
              </div>
            </article>';
                }
            ?>
            </div>
        </div>
    </div>
    </section>

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
