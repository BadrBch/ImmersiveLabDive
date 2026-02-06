<?php
// Force load content
$content = include __DIR__ . '/data/content.php';
$index = 'contact';
include('part-nav.php');

// Robust data loading
$contact = $content['contact'] ?? [];
$page_title = $contact['page_title'] ?? 'Contact';
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image context-dark"
  style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
  <div class="container">
    <h3 class="breadcrumbs-custom-title"><?php echo htmlspecialchars($page_title); ?></h3>
  </div>
</section>
<!--Google Map-->
<section class="section">
  <!--Please, add the data attribute data-key='YOUR_API_KEY' in order to insert your own API key for the Google map.-->
  <!--Please note that YOUR_API_KEY should replaced with your key.-->
  <!--Example: <div class='google-map-container' data-key='YOUR_API_KEY'>-->
</section>
<!--Mailform-->
<section class="section section-lg bg-default">
  <div class="container">
    <div class="row row-30 justify-content-center">
      <div class="col-xs-30 col-sm-30 col-md-30 col-lg-30 col-xl-30">
        <div class="block-address">
          <div class="block-address-item">
            <p class="block-address-text"><?php echo htmlspecialchars($contact['address'] ?? ''); ?>
            </p>
          </div>
          <div class="block-address-item">
            <h4 class="block-address-title">Contacts</h4>
            <p class="block-address-text">
              <?php echo htmlspecialchars($contact['email_intro'] ?? ''); ?><br>
              <a
                href="mailto:<?php echo htmlspecialchars($contact['email'] ?? ''); ?>"><?php echo htmlspecialchars($contact['email'] ?? ''); ?></a>
            </p>
          </div>
          <div class="block-address-item">
            <h5 class="block-address-title">Follow</h5>
            <ul class="list-inline list-inline-xs">
              <?php
              // Use page-specific social if set in Excel, otherwise fallback to global config
              $socials = ['twitter', 'facebook', 'linkedIn', 'youtube'];
              $icons = ['twitter' => 'fa-twitter', 'facebook' => 'fa-facebook', 'linkedIn' => 'fa-linkedin', 'youtube' => 'fa-youtube-play'];

              foreach ($socials as $soc) {
                $p_social = $contact['social'] ?? [];
                $link = $p_social[$soc] ?? $config[$soc] ?? '';
                if (!empty($link)) {
                  echo '<li><a class="icon icon-rect icon-xs icon-white ' . $icons[$soc] . '" href="' . $link . '" data-triangle=".icon-rect-overlay" target="_blank"><div class="icon-rect-overlay"></div></a></li>';
                }
              }
              ?>
            </ul>

            <?php if (!empty($contact['team'])): ?>
              <div class="block-address-item">
                <h5 class="block-address-title">Our Team</h5>
                <div class="row row-20 justify-content-center">
                  <?php foreach ($contact['team'] as $member): ?>
                    <?php
                    $img_path = $member['image'] ?? '';
                    // Simple check if file exists (relative to web root)
                    $real_path = __DIR__ . '/' . $img_path;
                    $has_image = !empty($img_path) && file_exists($real_path);
                    // Fallback placeholder if image is missing but path is provided, or just don't show?
                    // User said "pas dimage direct", implying they want it to work.
                    // We'll use a generic placeholder if their path is bad, OR just hide it?
                    // Better to hide if invalid to avoid broken icons.
                    ?>
                    <div class="col-12" style="margin-bottom: 20px;">
                      <article class="unit align-items-center">
                        <?php if ($has_image): ?>
                          <div class="unit-left">
                            <img src="<?php echo htmlspecialchars($img_path); ?>" alt="Team Member" width="80" height="80"
                              style="border-radius: 50%; object-fit: cover; width: 80px; height: 80px;" />
                          </div>
                        <?php else: ?>
                          <!-- Placeholder/Initials could go here, but purely optional -->
                          <div class="unit-left">
                            <div
                              style="width: 80px; height: 80px; border-radius: 50%; background-color: #eee; display: flex; align-items: center; justify-content: center; color: #888;">
                              <span class="icon fa-user"></span>
                            </div>
                          </div>
                        <?php endif; ?>
                        <div class="unit-body text-left">
                          <h6 class="text-uppercase">
                            <?php echo htmlspecialchars($member['firstname'] ?? '') . ' ' . htmlspecialchars($member['lastname'] ?? ''); ?>
                          </h6>
                          <p class="text-secondary small mb-0"><?php echo htmlspecialchars($member['job'] ?? ''); ?></p>
                          <?php if (!empty($member['email'])): ?>
                            <a class="d-block small"
                              href="mailto:<?php echo htmlspecialchars($member['email']); ?>"><?php echo htmlspecialchars($member['email']); ?></a>
                          <?php endif; ?>
                        </div>
                      </article>
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
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