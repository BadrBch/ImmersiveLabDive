<!-- Section Pre Footer-->
<section class="section section-lg bg-gray-900">
  <div class="container">
    <div class="row row-30">
      <div class="col-xs-10 col-lg-4 align-self-center"><a class="brand" href="index.php"><img class="brand-logo-light"
            src="logo.png" alt="Devinci Immersive Lab"></a></div>
      <?php /* Event detail section removed as requested
       <div class="col-xs-10 col-sm-6 col-lg-4">
         <h5><span class="big font-weight-sbold">Event detail</span></h5>
         <div class="event-detail">
           <p class="event-detail-time big">
             <time data-splitting datetime="<?php echo $config["when"];?>"><?php echo $config["when_long"];?></time>
           </p>
           <p class="event-detail-address big" data-splitting><?php echo $about["where"];?></p><a class="event-detail-link" href="contact.php">View map location</a>
         </div>
       </div>
       */ ?>
      <div class="col-xs-10 col-sm-6 col-lg-4">
        <h5><span class="big font-weight-sbold"><?php echo $config["institution"]; ?></span></h5>
        <div class="event-detail">

          <ul class="list-inline list-inline-xs">
            <?php
            if (!empty($config["twitter"]))
              echo '<li><a class="icon icon-rect icon-xs icon-white fa-twitter" href="' . $config["twitter"] . '" data-triangle=".icon-rect-overlay" target="_blank"><div class="icon-rect-overlay"></div></a></li>';
            if (!empty($config["facebook"]))
              echo '<li><a class="icon icon-rect icon-xs icon-white fa-facebook" href="' . $config["facebook"] . '" data-triangle=".icon-rect-overlay" target="_blank"><div class="icon-rect-overlay"></div></a></li>';
            if (!empty($config["linkedIn"]))
              echo '<li><a class="icon icon-rect icon-xs icon-white fa-linkedin" href="' . $config["linkedIn"] . '" data-triangle=".icon-rect-overlay" target="_blank"><div class="icon-rect-overlay"></div></a></li>';
            if (!empty($config["youtube"]))
              echo '<li><a class="icon icon-rect icon-xs icon-white fa-youtube-play" href="' . $config["youtube"] . '" data-triangle=".icon-rect-overlay" target="_blank"><div class="icon-rect-overlay"></div></a></li>';
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Divider-->
<div class="divider divider-gray-900 text-center"></div>
<!-- Footer Classic-->
<footer class="section footer-classic context-dark">
  <div class="container">
    <p class="rights"><span><?php echo $config['footer_copyright']; ?></span></p>
  </div>
</footer>