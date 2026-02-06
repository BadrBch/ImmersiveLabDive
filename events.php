<?php $content = include __DIR__ . '/data/content.php'; ?>
<?php $index = 'events';
include('part-nav.php'); ?>

<!-- Hero Section -->
<section class="section section-swiper-absolute context-dark text-center wow fadeIn">
  <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
  <section class="breadcrumbs-custom bg-image context-dark"
    style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <h3 class="breadcrumbs-custom-title">Events & Workshops</h3>
    </div>
  </section>
</section>

<?php $event = $content['events']['featured']; ?>

<!-- Featured Event - Immersive LAB -->
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <span class="badge badge-primary mb-3" style="font-size: 14px; padding: 8px 20px;">FLAGSHIP EVENT</span>
        <h2 class="text-secondary"><?php echo htmlspecialchars($event['title']); ?></h2>
        <p class="lead text-gray-700"><?php echo htmlspecialchars($event['tagline']); ?></p>
      </div>
    </div>

    <!-- Event Details Cards -->
    <div class="row row-30 justify-content-center mb-5">
      <div class="col-md-4">
        <div class="event-info-card text-center">
          <div class="event-icon">
            <svg class="svg-icon svg-icon-primary" role="img" style="width: 48px; height: 48px;">
              <use xlink:href="images/svg/sprite.svg#small-calendar"></use>
            </svg>
          </div>
          <h5>Date</h5>
          <p class="text-gray-700"><?php echo htmlspecialchars($event['date_label']); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-info-card text-center">
          <div class="event-icon">
            <svg class="svg-icon svg-icon-primary" role="img" style="width: 48px; height: 48px;">
              <use xlink:href="images/svg/sprite.svg#earth-globe"></use>
            </svg>
          </div>
          <h5>Location</h5>
          <p class="text-gray-700"><?php echo htmlspecialchars($event['location']); ?></p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="event-info-card text-center">
          <div class="event-icon">
            <svg class="svg-icon svg-icon-primary" role="img" style="width: 48px; height: 48px;">
              <use xlink:href="images/svg/sprite.svg#puzzle"></use>
            </svg>
          </div>
          <h5><?php echo htmlspecialchars($event['organizer_label'] ?? 'Organized By'); ?></h5>
          <p class="text-gray-700">
            <?php echo htmlspecialchars($event['organizer_value'] ?? 'DVRC, De Vinci Immersive Lab & IVI Group'); ?>
          </p>
        </div>
      </div>
    </div>

    <!-- Event Description -->
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="event-description-box">
          <p class="text-gray-700" style="font-size: 18px; line-height: 1.8;">
            <?php echo htmlspecialchars($event['summary']); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Attend & How to Participate -->
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row row-50">
      <!-- Why Attend -->
      <div class="col-lg-6">
        <h4 class="text-secondary mb-4">
          <svg class="svg-icon-sm svg-icon-primary mr-2" role="img" style="width: 28px; height: 28px;">
            <use xlink:href="images/svg/sprite.svg#bullseye"></use>
          </svg>
          <?php echo htmlspecialchars($event['why_attend_title'] ?? 'Why Attend Our Events?'); ?>
        </h4>
        <div class="why-attend-list">
          <?php if (!empty($event['why_attend'])): ?>
            <?php foreach (array_slice($event['why_attend'], 0, 6) as $idx => $item): ?>
              <div class="why-item">
                <span class="why-number"><?php echo $idx + 1; ?></span>
                <span class="why-text"><?php echo htmlspecialchars($item); ?></span>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <!-- How to Participate -->
      <div class="col-lg-6">
        <h4 class="text-secondary mb-4">
          <svg class="svg-icon-sm svg-icon-primary mr-2" role="img" style="width: 28px; height: 28px;">
            <use xlink:href="images/svg/sprite.svg#puzzle"></use>
          </svg>
          <?php echo htmlspecialchars($event['participation_title'] ?? 'How to Participate'); ?>
        </h4>
        <div class="participation-steps">
          <?php if (!empty($event['participation_steps'])): ?>
            <?php foreach ($event['participation_steps'] as $idx => $step): ?>
              <div class="step-item">
                <div class="step-number"><?php echo $idx + 1; ?></div>
                <div class="step-content">
                  <strong><?php echo htmlspecialchars($step['text']); ?></strong>
                  <?php if (!empty($step['link']) && !empty($step['link_label'])): ?>
                    <br><a href="<?php echo htmlspecialchars($step['link']); ?>"
                      class="btn btn-sm btn-outline-primary mt-2"><?php echo htmlspecialchars($step['link_label']); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contacts Section -->
<section class="section section-lg bg-gray-100 wow fadeIn">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-8">
        <h4 class="text-secondary"><?php echo htmlspecialchars($event['contacts_title'] ?? 'Event Contacts'); ?></h4>
        <p class="text-gray-700">
          <?php echo htmlspecialchars($event['contacts_intro'] ?? 'Get in touch with our team for inquiries and collaboration'); ?>
        </p>
      </div>
    </div>
    <div class="row row-30 justify-content-center">
      <?php if (!empty($event['contacts'])): ?>
        <?php foreach (array_slice($event['contacts'], 0, 4) as $contact): ?>
          <div class="col-lg-3 col-md-6">
            <div class="contact-card text-center">
              <div class="contact-icon">
                <svg class="svg-icon svg-icon-primary" role="img" style="width: 32px; height: 32px;">
                  <use xlink:href="images/svg/sprite.svg#user"></use>
                </svg>
              </div>
              <h6><?php echo htmlspecialchars($contact['label']); ?></h6>
              <p class="text-gray-700 small"><?php echo htmlspecialchars($contact['value']); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="cta-box text-center">
          <h3 class="text-white mb-3">
            <?php echo htmlspecialchars($event['cta_title'] ?? 'Follow Our Immersive Lab Journey'); ?>
          </h3>
          <p class="text-white-50 mb-4"><?php echo htmlspecialchars($event['cta_text'] ?? ''); ?></p>
          <a class="btn btn-light btn-lg" href="<?php echo htmlspecialchars($event['cta_link'] ?? '#'); ?>"
            target="_blank">
            <svg style="width: 24px; height: 24px; fill: #e74c3c; margin-right: 8px; vertical-align: middle;">
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
            </svg>
            <?php echo htmlspecialchars($event['cta_btn_text'] ?? 'Visit Our YouTube Channel'); ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom Styles -->
<style>
  /* Event Info Cards */
  .event-info-card {
    padding: 30px 20px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    transition: transform 0.3s ease;
  }

  .event-info-card:hover {
    transform: translateY(-5px);
  }

  .event-icon {
    margin-bottom: 15px;
  }

  .event-description-box {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 40px;
    border-radius: 12px;
    border-left: 4px solid #6859a3;
  }

  /* Event Cards */
  .event-card {
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
  }

  .event-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
  }

  .event-card.featured {
    border: 2px solid #e74c3c;
  }

  .event-card-header {
    padding: 25px;
    color: white;
    text-align: center;
    position: relative;
  }

  .event-date {
    display: block;
    font-size: 32px;
    font-weight: 700;
  }

  .event-year {
    display: block;
    font-size: 18px;
    opacity: 0.9;
  }

  .event-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #fff;
    color: #e74c3c;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
  }

  .event-card-body {
    padding: 25px;
  }

  .event-card-body h5 {
    color: #333;
    margin-bottom: 10px;
  }

  .event-location {
    color: #6859a3;
    font-size: 14px;
    margin-bottom: 15px;
  }

  .event-features {
    list-style: none;
    padding: 0;
    margin-top: 15px;
  }

  .event-features li {
    padding: 5px 0;
    padding-left: 20px;
    position: relative;
    color: #666;
    font-size: 14px;
  }

  .event-features li::before {
    content: "✓";
    position: absolute;
    left: 0;
    color: #27ae60;
    font-weight: bold;
  }

  /* Why Attend */
  .why-item {
    display: flex;
    align-items: center;
    padding: 12px 0;
    border-bottom: 1px solid #eee;
  }

  .why-number {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #6859a3, #003e66);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 600;
    font-size: 14px;
    margin-right: 15px;
    flex-shrink: 0;
  }

  .why-text {
    color: #555;
  }

  /* Participation Steps */
  .step-item {
    display: flex;
    margin-bottom: 20px;
  }

  .step-number {
    width: 40px;
    height: 40px;
    background: #6859a3;
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    margin-right: 20px;
    flex-shrink: 0;
  }

  .step-content {
    flex: 1;
    padding-top: 8px;
  }

  /* Contact Cards */
  .contact-card {
    background: #fff;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  }

  .contact-icon {
    margin-bottom: 15px;
  }

  /* CTA Box */
  .cta-box {
    background: linear-gradient(135deg, #6859a3 0%, #003e66 100%);
    padding: 60px 40px;
    border-radius: 16px;
    box-shadow: 0 10px 40px rgba(104, 89, 163, 0.3);
  }
</style>

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