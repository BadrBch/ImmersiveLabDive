<?php $content = include __DIR__ . '/data/content.php'; ?>
<!-- Section Header Default-->
<?php $index = 'about';
include('part-nav.php'); ?>
<!-- Section Swiper Slider-->
<section class="section section-swiper-absolute context-dark text-center wow fadeIn">
  <!-- Waves-->
  <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
  <!-- Swiper Content-->
  <section class="breadcrumbs-custom bg-image context-dark"
    style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <h3 class="breadcrumbs-custom-title"><?php echo htmlspecialchars($about['page_title']); ?></h3>
    </div>
  </section>
</section>
<?php /* Section About Event - Restored as general info */ ?>
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row">
      <div class="row row-30 justify-content-center">
        <h3 class="heading-lg-postfix-15"><?php echo $about["title"]; ?></h3>
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
                    <h5><?php echo $about["where_title"]; ?></h5>
                    <p><?php echo $about["where"]; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit">
                  <div class="unit-left">
                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                      <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
                    </svg>
                  </div>
                  <div class="unit-body">
                    <h5><?php echo $about["when_title"]; ?></h5>
                    <p>
                      <time datetime="<?php echo $about["when"]; ?>"><?php echo $about["when_long"]; ?></time>
                    </p>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit">
                  <div class="unit-left">
                    <svg class="svg-icon-sm svg-icon-primary" role="img">
                      <use xlink:href="images/svg/sprite.svg#puzzle"></use>
                    </svg>
                  </div>
                  <div class="unit-body">
                    <h5><?php echo $about["axes_title"]; ?></h5>
                    <?php echo $about["axis"]; ?>
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
                  <div class="unit-body">
                    <h5><?php echo $about['location_title']; ?></h5>
                    <?php echo $about["lieu"]; ?>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <p><?php echo $about["verbatim"]; ?></p>

            <!-- Custom Part 1 -->
            <?php if (!empty($about['custom_1_title']) || !empty($about['custom_1_text'])): ?>
              <div class="mt-4">
                <h4><?php echo htmlspecialchars($about['custom_1_title']); ?></h4>
                <p><?php echo $about['custom_1_text']; ?></p>
              </div>
            <?php endif; ?>

            <!-- Custom Part 2 -->
            <?php if (!empty($about['custom_2_title']) || !empty($about['custom_2_text'])): ?>
              <div class="mt-4">
                <h4><?php echo htmlspecialchars($about['custom_2_title']); ?></h4>
                <p><?php echo $about['custom_2_text']; ?></p>
              </div>
            <?php endif; ?>

            <!-- List Inline-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include('part-footer.php'); ?>
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