<?php
$content = include __DIR__ . '/data/content.php';
?>
<!-- Section Header Default-->
<?php include('part-nav.php'); ?>
<!-- Section Swiper Slider-->
<section class="section section-swiper-absoulte context-dark text-center wow fadeIn">
  <!-- Waves-->
  <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
  <!-- Swiper Content-->
  <div class="section-swiper-content">
    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-lg-10">
          <?php /* Badge removed as requested
 <div class="badge-promo wow fadeScale" data-wow-delay=".6s"><span class="badge-promo-text"><?php echo $config["event_type"];?></span>
   <svg class="badge-promo-icon" width="319" height="49" viewBox="0 0 319 49" fill="none" xmlns="http://www.w3.org/2000/svg">
     <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49H0L20 25L0 0Z" fill="url( #svg-gradient-primary )"></path>
     <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M0 0H319L299 25L319 49L0 0Z" fill="white"></path>
   </svg>
 </div>
 */ ?>
          <h2 class="wow fadeScale" data-caption-animate="fadeInUp" data-caption-delay="100" data-caption-duration="900"
            style="text-shadow: 1px 1px 2px black;"><?php echo htmlspecialchars($content['home']['hero_title']); ?></h2>
          <!-- List Inline-->
          <ul class="list-inline list-inline-md wow" data-splitting data-wow-delay="1.5s">
            <li>
              <div class="unit unit-spacing-xs align-items-center">
                <div class="unit-left line-height-reset">
                  <svg class="svg-icon-sm svg-icon-primary" role="img">
                    <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
                  </svg>
                </div>
                <div class="unit-body">
                  <h5 class="text-spacing-100"><span class="big"
                      style="text-shadow: 1px 1px 2px black;"><?php echo $about["where"]; ?></span></h5>
                </div>
              </div>
            </li>
            <!-- Date hidden as requested
                  <li>
                    <div class="unit unit-spacing-xs align-items-center">
                      <div class="unit-left line-height-reset">
                        <svg class="svg-icon-sm svg-icon-primary" role="img">
                          <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                        </svg>
                      </div>
                      <div class="unit-body">
                        <h5 class="text-spacing-100"><span class="big" style="text-shadow: 1px 1px 2px black;">
                            <a href="events.php"><time datetime="<?php echo $config["when"]; ?>"><?php echo $config["when_long"]; ?></time></a></span></h5>
                      </div>
                    </div>
                  </li>
                  -->
          </ul>

          <!--
                  <div class="logo-slider">
                  <img src="images/logo-dvrc-blanc.png" />
                  </div>
-->
        </div>
      </div>
    </div>
    <!-- Thumbnail Video Link
          <div class="video-link-wrapper">
            <div class="unit align-items-center">
              <div class="unit-body text-right">
                <h5><span class="big">Watch Promo<br> Video</span></h5>
              </div>
              <div class="unit-right"><a class="video-link" href="https://youtu.be/nbfFDnKkMvw" data-lightgallery="item">
                  <div class="video-link-bg" data-triangle=".video-link-overlay"><span class="video-link-overlay"></span></div><span class="icon fa-play"></span></a></div>
            </div>
          </div>-->
  </div>
  <!-- Swiper Slider Absolute-->
  <div class="swiper-container swiper-slider swiper-slider-1" data-loop="true" data-simulate-touch="false"
    data-autoplay="8500" data-direction="horizontal" data-effect="fade">
    <div class="swiper-wrapper">
      <?php
      for ($i = 0; $i < sizeof($config["images"]); $i++) {
        $image = $config["images"][$i];
        $background = $image[0];
        $creditLink = $image[1] ?? '';
        echo "\n\t\t<div class='swiper-slide' data-slide-bg='" . $background . "'>";
        if (!empty($creditLink)) {
          echo "\n                     <div style=\"text-align:right;\"><a href=\"" . $creditLink . "\" target=\"_blank\">\n                        <img src=\"images/CC_by.png\" alt=\"\" width=\"20\" height=\"20\"/>\n                    </a></div>";
        }
        echo "</div>";
      }
      ?>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- Section Timer -->
<section class="parallax-container section" data-parallax-img="images/bg-parallax-01-1894x778.jpg">
  <div class="parallax-content section-lg context-dark text-center parallax-overlay-gradient-primary">
    <div class="container wow fadeIn">
      <h3 class="text-uppercase"><?php echo htmlspecialchars($content['home']['registration_title']); ?></h3>
      <p><?php echo htmlspecialchars($content['home']['registration_text']); ?></p>
      <a class="btn btn-primary btn-md"
        href="events.php"><?php echo htmlspecialchars($content['home']['registration_btn']); ?></a>
    </div>
  </div>
</section>
<?php /* Section About Event - Hidden as requested
<section class="section section-lg bg-default wow fadeIn">
<div class="container">
<div class="row">
<div class="row row-30 justify-content-center">
<h6>about event</h6>
<h3 class="heading-lg-postfix-15"><?php echo $title; ?></h3>
<div class="row row-30 flex-md-row-reverse">
 <div class="col-md-6">
   <ul class="list-inline list-inline-xl">
     <li>
       <div class="unit">
         <div class="unit-left">
           <svg class="svg-icon-sm svg-icon-primary" role="img">
             <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
           </svg>
         </div>
         <div class="unit-body">
           <h5>Where</h5>
           <p><?php echo $about["where"]; ?></p>
         </div>
       </div>
     </li>
     <!-- Date hidden as requested
     <li>
       <div class="unit">
         <div class="unit-left">
           <svg class="svg-icon-sm svg-icon-primary" role="img">
             <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
           </svg>
         </div>
         <div class="unit-body">
           <h5>When</h5>
           <p>
             <time datetime="<?php echo $config["when"]; ?>"><?php echo $config["when_long"]; ?></time>
           </p>
         </div>
       </div>
     </li>
     -->
     <li>
       <div class="unit">
         <div class="unit-left">
           <svg class="svg-icon-sm svg-icon-primary" role="img">
             <use xlink:href="images/svg/sprite.svg#puzzle"></use>
           </svg>
         </div>
         <div class="unit-body">
           <h5>Thematic axes</h5>
       <?php
           echo $about["axis"];
       ?>
         </div>
       </div>
     </li>
     <li>
       <div class="unit">
         <div class="unit-left">
           <svg class="svg-icon-sm svg-icon-primary" role="img">
             <use xlink:href="images/svg/sprite.svg#bullseye"></use>
           </svg>
         </div>
         <div class="unit-body"><?php
             echo $about["lieu"];
         ?></div>
      </div>
    </li>
   </ul>
 </div>
 <div class="col-md-6">
 <?php echo $about["verbatim"]; ?>
 </div>
</div>
</div>
</div>
</div>
</section>
*/ ?>
<!-- Section Virtual Vinci Association -->
<?php $association = $content['association']; ?>
<section class="section section-lg bg-gray-100 wow fadeIn" id="virtual-vinci">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h4 class="text-secondary"><?php echo htmlspecialchars($content['home']['association_title']); ?></h4>
        <p class="lead text-gray-700"><?php echo htmlspecialchars($content['home']['association_tagline']); ?></p>
        <p class="text-gray-700"><?php echo htmlspecialchars($content['home']['association_summary']); ?></p>
      </div>
    </div>
    <div class="row row-30 mt-4">
      <?php foreach ($content['home']['association_pillars'] as $pillar): ?>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($pillar['title']); ?></h5>
              <p class="card-text text-gray-700"><?php echo htmlspecialchars($pillar['description']); ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php /* First-year priorities and Key contacts sections removed as requested
<div class="row row-40 align-items-start mt-4">
<div class="col-lg-7">
<h5>First-year priorities</h5>
<ul class="list-marked">
 <?php foreach ($association['first_year_actions'] as $action): ?>
 <li><?php echo htmlspecialchars($action); ?></li>
 <?php endforeach; ?>
</ul>
</div>
<div class="col-lg-5">
<h5>Key contacts</h5>
<ul class="list-unstyled text-left">
 <?php foreach ($association['contacts'] as $contact): ?>
 <li><strong><?php echo htmlspecialchars($contact['label']); ?>:</strong> <?php echo htmlspecialchars($contact['value']); ?></li>
 <?php endforeach; ?>
</ul>
<?php if (!empty($association['resources'])): ?>
<h6 class="mt-3">Association toolkit</h6>
<ul class="list-inline list-inline-md">
 <?php foreach ($association['resources'] as $resource): ?>
 <li class="list-inline-item mb-2"><a class="btn btn-outline-primary btn-sm" href="<?php echo htmlspecialchars($resource['path']); ?>" target="_blank"><?php echo htmlspecialchars($resource['label']); ?></a></li>
 <?php endforeach; ?>
</ul>
<?php endif; ?>
</div>
</div>
*/ ?>
  </div>
</section>

<!-- Section Vision & Immersion Research Group -->
<?php $research = $content['research']; ?>
<section class="section section-lg bg-default wow fadeIn" id="vision-immersion">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-9">
        <h4 class="text-secondary"><?php echo htmlspecialchars($content['home']['research_title']); ?></h4>
        <p class="text-gray-700"><?php echo htmlspecialchars($content['home']['research_intro']); ?></p>
        <p class="font-weight-bold"><a
            href="mailto:<?php echo htmlspecialchars($content['home']['research_contact']); ?>"><?php echo htmlspecialchars($content['home']['research_contact']); ?></a>
        </p>
      </div>
    </div>
    <div class="row row-30 mt-4">
      <?php foreach ($content['home']['research_pillars'] as $pillar): ?>
        <div class="col-md-6 col-lg-4">
          <div class="card h-100 shadow-sm border-0">
            <div class="card-body">
              <h5 class="card-title"><?php echo htmlspecialchars($pillar['name']); ?></h5>
              <ul class="list-marked">
                <?php foreach ($pillar['items'] as $item): ?>
                  <li><?php echo htmlspecialchars($item); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php if (!empty($research['resources'])): ?>
      <div class="row justify-content-center mt-4">
        <div class="col-md-8 text-center">
          <div class="button-group">
            <?php foreach ($research['resources'] as $resource): ?>
              <a class="btn btn-primary btn-sm m-1" href="<?php echo htmlspecialchars($resource['path']); ?>"
                target="_blank"><?php echo htmlspecialchars($resource['label']); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php /* Section Upcoming Event - Moved to Events page
<?php $featuredEvent = $content['events']['featured']; ?>
<section class="section section-lg bg-gray-900 context-dark wow fadeIn" id="upcoming-event">
<div class="container">
<div class="row align-items-center row-40">
<div class="col-lg-7">
<h4 class="text-secondary"><?php echo htmlspecialchars($featuredEvent['title']); ?></h4>
<p class="lead"><?php echo htmlspecialchars($featuredEvent['tagline']); ?></p>
<ul class="list-inline list-inline-lg">
 <li class="list-inline-item">
   <div class="unit unit-sm align-items-center">
     <div class="unit-left">
       <svg class="svg-icon-sm svg-icon-primary" role="img"><use xlink:href="images/svg/sprite.svg#small-calendar"></use></svg>
     </div>
     <div class="unit-body"><?php echo htmlspecialchars($featuredEvent['date_label']); ?></div>
   </div>
 </li>
 <li class="list-inline-item">
   <div class="unit unit-sm align-items-center">
     <div class="unit-left">
       <svg class="svg-icon-sm svg-icon-primary" role="img"><use xlink:href="images/svg/sprite.svg#earth-globe"></use></svg>
     </div>
     <div class="unit-body"><?php echo htmlspecialchars($featuredEvent['location']); ?></div>
   </div>
 </li>
</ul>
<p><?php echo htmlspecialchars($featuredEvent['summary']); ?></p>
<a class="btn btn-primary btn-md" href="events.php">Explore the full programme</a>
</div>
<div class="col-lg-5">
<div class="card bg-default text-left shadow-sm border-0">
 <div class="card-body">
   <h5 class="card-title text-secondary">Highlights</h5>
   <ul class="list-marked text-gray-700">
     <?php foreach ($featuredEvent['highlights'] as $highlight): ?>
     <li><?php echo htmlspecialchars($highlight); ?></li>
     <?php endforeach; ?>
   </ul>
 </div>
</div>
</div>
</div>
</div>
</section>
*/ ?>
<?php /* Section Hardware Inventory - Removed from home, available on About page
<?php $hardware = $content['hardware']; ?>
<section class="section section-lg bg-gray-100 wow fadeIn" id="hardware">
<div class="container">
<div class="row row-40">
<div class="col-lg-6">
<h4 class="text-secondary">Current immersive hardware</h4>
<div class="table-responsive-md mt-3">
 <table class="table table-striped table-bordered">
   <thead class="thead-light">
     <tr>
       <th scope="col">Equipment</th>
       <th scope="col">Quantity</th>
       <th scope="col">Entity</th>
       <th scope="col">Contact</th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($hardware['inventory'] as $item): ?>
     <tr>
       <td><?php echo htmlspecialchars($item['equipment']); ?></td>
       <td><?php echo htmlspecialchars($item['quantity']); ?></td>
       <td><?php echo $item['entity'] ? htmlspecialchars($item['entity']) : '—'; ?></td>
       <td><?php echo $item['contact'] ? htmlspecialchars($item['contact']) : '—'; ?></td>
     </tr>
     <?php endforeach; ?>
   </tbody>
 </table>
</div>
</div>
<div class="col-lg-6">
<h4 class="text-secondary">Priority investments</h4>
<div class="table-responsive-md mt-3">
 <table class="table table-striped table-bordered">
   <thead class="thead-light">
     <tr>
       <th scope="col">Item</th>
       <th scope="col">Priority</th>
       <th scope="col">Qty</th>
       <th scope="col">Unit (EUR)</th>
       <th scope="col">Total (EUR)</th>
     </tr>
   </thead>
   <tbody>
     <?php foreach ($hardware['upgrades'] as $upgrade): ?>
     <tr>
       <td><a href="<?php echo htmlspecialchars($upgrade['link']); ?>" target="_blank"><?php echo htmlspecialchars($upgrade['item']); ?></a></td>
       <td><?php echo htmlspecialchars($upgrade['priority']); ?></td>
       <td><?php echo htmlspecialchars($upgrade['quantity']); ?></td>
       <td><?php echo number_format((float)$upgrade['unit_cost'], 2, '.', ' '); ?></td>
       <td><?php echo number_format((float)$upgrade['total_cost'], 2, '.', ' '); ?></td>
     </tr>
     <?php endforeach; ?>
   </tbody>
   <tfoot>
     <tr>
       <th colspan="4" class="text-right">Projected budget</th>
       <th><?php echo number_format((float)$hardware['total_investment'], 2, '.', ' '); ?></th>
     </tr>
   </tfoot>
 </table>
</div>
</div>
</div>
</div>
</section>
*/ ?>
<?php /* Section XR Ecosystem - Moved to About page
<section class="section section-lg bg-default wow fadeIn" id="ecosystem">
<div class="container">
<div class="row justify-content-center text-center">
<div class="col-lg-9">
<h4 class="text-secondary">XR ecosystem &amp; partners</h4>
<p class="text-gray-700">A curated shortlist of vendors and studios aligned with Virtual Vinci and the Vision &amp; Immersion research focus.</p>
</div>
</div>
<div class="row row-40 mt-4">
<?php foreach ($content['vendors'] as $vendor): ?>
<div class="col-md-6 col-lg-4">
<div class="card h-100 shadow-sm border-0">
 <div class="card-body d-flex flex-column">
   <h5 class="card-title"><?php echo htmlspecialchars($vendor['name']); ?></h5>
   <p class="card-text text-gray-700"><strong>Offering:</strong> <?php echo htmlspecialchars($vendor['offering']); ?></p>
   <p class="card-text text-gray-700"><strong>Themes:</strong> <?php echo htmlspecialchars($vendor['themes']); ?></p>
   <p class="card-text text-gray-700"><strong>Technology:</strong> <?php echo htmlspecialchars($vendor['technology']); ?></p>
   <p class="card-text text-gray-700"><strong>Advantages:</strong> <?php echo htmlspecialchars($vendor['advantages']); ?></p>
   <p class="card-text text-gray-700"><strong>Limits:</strong> <?php echo htmlspecialchars($vendor['limits']); ?></p>
   <?php if (!empty($vendor['clients'])): ?>
   <p class="card-text text-gray-700"><strong>Clients:</strong> <?php echo htmlspecialchars($vendor['clients']); ?></p>
   <?php endif; ?>
   <div class="mt-auto">
     <a class="btn btn-outline-primary btn-sm" href="<?php echo htmlspecialchars($vendor['link']); ?>" target="_blank">Visit website</a>
   </div>
 </div>
</div>
</div>
<?php endforeach; ?>
</div>
</div>
</section>
*/ ?>

<!-- Section Conference Schedule-->
<?php //$short = 1;include ('schedulePlan.php'); 
?>
<?php $index = 1;
include('part-footer.php'); ?>
</div>
<div class="snackbars" id="form-output-global"></div>
<div class="block-with-svg-gradients">
  <svg xmlns="http://www.w3.org/2000/svg">
    <defs>
      <lineargradient id="svg-gradient-primary" x1="0%" y1="100%" x2="100%" y2="0%">
        <stop offset="0%" style="stop-color:rgb(104,89,163);stop-opacity:1"></stop>
        <stop offset="100%" style="stop-color:rgb(0,62,102);stop-opacity:1"></stop>
      </lineargradient>
    </defs>
  </svg>
</div>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</body>

</html>