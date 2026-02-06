<?php $content = include __DIR__ . '/data/content.php'; ?>
<?php $index = 'projects';
include('part-nav.php'); ?>
<section class="section section-swiper-absolute context-dark text-center wow fadeIn">
  <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
  <section class="breadcrumbs-custom bg-image context-dark"
    style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
    <div class="container">
      <h3 class="breadcrumbs-custom-title"><?php echo htmlspecialchars($projects['page_title'] ?? 'Projects'); ?></h3>
    </div>
  </section>
</section>

<!-- Section Projects Introduction -->
<?php $projects = $content['projects']; ?>
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-10">
        <h4 class="text-secondary"><?php echo htmlspecialchars($projects['title']); ?></h4>
        <p class="lead text-gray-700"><?php echo htmlspecialchars($projects['intro']); ?></p>
      </div>
    </div>
  </div>
</section>

<!-- Section Video Tabs -->
<section class="section section-lg bg-gray-100 wow fadeIn">
  <div class="container">

    <!-- Tab Navigation -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10">
        <ul class="nav nav-tabs nav-tabs-custom justify-content-center" id="projectTabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1"
              aria-selected="true">
              <?php echo htmlspecialchars($projects['tab1_title'] ?? 'Virtual Reality'); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2"
              aria-selected="false">
              <?php echo htmlspecialchars($projects['tab2_title'] ?? 'Augmented Reality'); ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3"
              aria-selected="false">
              <?php echo htmlspecialchars($projects['tab3_title'] ?? 'Creative Tech'); ?>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <!-- Tab Content -->
    <div class="tab-content" id="projectTabsContent">
      <?php $max_videos = isset($projects['max_videos_per_tab']) ? (int) $projects['max_videos_per_tab'] : 9; ?>

      <!-- Tab 1 Videos -->
      <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
        <div class="row row-50">
          <?php
          $tab1_videos = array_filter($projects['videos'], function ($v) {
            if (strpos($v['youtube_url'], 'watch') === false)
              return false;
            return (isset($v['tab']) && $v['tab'] == '1') || (isset($v['category']) && strpos($v['category'], 'Gaming') !== false);
          });
          // DEMO: Fill up to max_videos by repeating content if we have matches but not enough
          if (!empty($tab1_videos) && count($tab1_videos) < $max_videos) {
            $base_videos = $tab1_videos;
            while (count($tab1_videos) < $max_videos) {
              foreach ($base_videos as $bv) {
                if (count($tab1_videos) >= $max_videos)
                  break;
                $tab1_videos[] = $bv;
              }
            }
          }
          if (empty($tab1_videos)) {
            // Fallback if no matches found at all
            $tab1_videos = array_slice($projects['videos'], 0, $max_videos);
          }
          $tab1_videos = array_slice($tab1_videos, 0, $max_videos);
          foreach ($tab1_videos as $video): ?>
            <div class="col-lg-4 col-md-6">
              <article class="project-card">
                <div class="project-card-video">
                  <div class="youtube-thumbnail"
                    style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <a href="<?php echo htmlspecialchars($video['youtube_url']); ?>" target="_blank"
                      style="display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                      <img
                        src="https://img.youtube.com/vi/<?php echo htmlspecialchars($video['youtube_id']); ?>/hqdefault.jpg"
                        alt="<?php echo htmlspecialchars($video['title']); ?>"
                        style="width: 100%; height: 100%; object-fit: cover;"
                        onerror="this.src='images/bg-breadcrumbs-01-1894x424.jpg'" />
                      <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 68px; height: 48px; background: rgba(255,0,0,0.9); border-radius: 12px;">
                        <svg height="100%" viewBox="0 0 68 48" width="100%">
                          <path
                            d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                            fill="#f00"></path>
                          <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="project-card-body mt-3">
                  <div class="mb-2">
                    <span class="badge badge-primary"><?php echo htmlspecialchars($video['category']); ?></span>
                  </div>
                  <h5 class="project-card-title"><?php echo htmlspecialchars($video['title']); ?></h5>
                  <p class="text-gray-700"><?php echo htmlspecialchars($video['description']); ?></p>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Tab 2 Videos -->
      <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <div class="row row-50">
          <?php
          $tab2_videos = array_filter($projects['videos'], function ($v) {
            if (strpos($v['youtube_url'], 'watch') === false)
              return false;
            return (isset($v['tab']) && $v['tab'] == '2') || (isset($v['category']) && strpos($v['category'], 'Simulation') !== false);
          });
          if (!empty($tab2_videos) && count($tab2_videos) < $max_videos) {
            $base_videos = $tab2_videos;
            while (count($tab2_videos) < $max_videos) {
              foreach ($base_videos as $bv) {
                if (count($tab2_videos) >= $max_videos)
                  break;
                $tab2_videos[] = $bv;
              }
            }
          }
          if (empty($tab2_videos)) {
            $tab2_videos = array_slice($projects['videos'], 3, $max_videos);
          }
          $tab2_videos = array_slice($tab2_videos, 0, $max_videos);
          foreach ($tab2_videos as $video): ?>
            <div class="col-lg-4 col-md-6">
              <article class="project-card">
                <div class="project-card-video">
                  <div class="youtube-thumbnail"
                    style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <a href="<?php echo htmlspecialchars($video['youtube_url']); ?>" target="_blank"
                      style="display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                      <img
                        src="https://img.youtube.com/vi/<?php echo htmlspecialchars($video['youtube_id']); ?>/hqdefault.jpg"
                        alt="<?php echo htmlspecialchars($video['title']); ?>"
                        style="width: 100%; height: 100%; object-fit: cover;"
                        onerror="this.src='images/bg-breadcrumbs-01-1894x424.jpg'" />
                      <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 68px; height: 48px; background: rgba(255,0,0,0.9); border-radius: 12px;">
                        <svg height="100%" viewBox="0 0 68 48" width="100%">
                          <path
                            d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                            fill="#f00"></path>
                          <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="project-card-body mt-3">
                  <div class="mb-2">
                    <span class="badge badge-primary"><?php echo htmlspecialchars($video['category']); ?></span>
                  </div>
                  <h5 class="project-card-title"><?php echo htmlspecialchars($video['title']); ?></h5>
                  <p class="text-gray-700"><?php echo htmlspecialchars($video['description']); ?></p>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Tab 3 Videos -->
      <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        <div class="row row-50">
          <?php
          $tab3_videos = array_filter($projects['videos'], function ($v) {
            if (strpos($v['youtube_url'], 'watch') === false)
              return false;
            return (isset($v['tab']) && $v['tab'] == '3') || (isset($v['category']) && strpos($v['category'], 'Healthcare') !== false);
          });
          if (!empty($tab3_videos) && count($tab3_videos) < $max_videos) {
            $base_videos = $tab3_videos;
            while (count($tab3_videos) < $max_videos) {
              foreach ($base_videos as $bv) {
                if (count($tab3_videos) >= $max_videos)
                  break;
                $tab3_videos[] = $bv;
              }
            }
          }
          if (empty($tab3_videos)) {
            $tab3_videos = array_slice($projects['videos'], 6, $max_videos);
          }
          $tab3_videos = array_slice($tab3_videos, 0, $max_videos);
          foreach ($tab3_videos as $video): ?>
            <div class="col-lg-4 col-md-6">
              <article class="project-card">
                <div class="project-card-video">
                  <div class="youtube-thumbnail"
                    style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <a href="<?php echo htmlspecialchars($video['youtube_url']); ?>" target="_blank"
                      style="display: block; position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
                      <img
                        src="https://img.youtube.com/vi/<?php echo htmlspecialchars($video['youtube_id']); ?>/hqdefault.jpg"
                        alt="<?php echo htmlspecialchars($video['title']); ?>"
                        style="width: 100%; height: 100%; object-fit: cover;"
                        onerror="this.src='images/bg-breadcrumbs-01-1894x424.jpg'" />
                      <div
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 68px; height: 48px; background: rgba(255,0,0,0.9); border-radius: 12px;">
                        <svg height="100%" viewBox="0 0 68 48" width="100%">
                          <path
                            d="M66.52,7.74c-0.78-2.93-2.49-5.41-5.42-6.19C55.79,.13,34,0,34,0S12.21,.13,6.9,1.55C3.97,2.33,2.27,4.81,1.48,7.74C0.06,13.05,0,24,0,24s0.06,10.95,1.48,16.26c0.78,2.93,2.49,5.41,5.42,6.19C12.21,47.87,34,48,34,48s21.79-0.13,27.1-1.55c2.93-0.78,4.64-3.26,5.42-6.19C67.94,34.95,68,24,68,24S67.94,13.05,66.52,7.74z"
                            fill="#f00"></path>
                          <path d="M 45,24 27,14 27,34" fill="#fff"></path>
                        </svg>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="project-card-body mt-3">
                  <div class="mb-2">
                    <span class="badge badge-primary"><?php echo htmlspecialchars($video['category']); ?></span>
                  </div>
                  <h5 class="project-card-title"><?php echo htmlspecialchars($video['title']); ?></h5>
                  <p class="text-gray-700"><?php echo htmlspecialchars($video['description']); ?></p>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Custom Tab Styles -->
<style>
  .nav-tabs-custom {
    border-bottom: 2px solid #e0e0e0;
  }

  .nav-tabs-custom .nav-link {
    border: none;
    border-bottom: 3px solid transparent;
    color: #666;
    font-weight: 600;
    padding: 15px 30px;
    margin-bottom: -2px;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .nav-tabs-custom .nav-link:hover {
    color: #6859a3;
    border-bottom-color: #6859a3;
  }

  .nav-tabs-custom .nav-link.active {
    color: #6859a3;
    border-bottom-color: #6859a3;
    background: transparent;
  }

  .tab-content {
    padding-top: 20px;
  }

  .tab-pane {
    animation: fadeIn 0.3s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<!-- Section Call to Action -->
<section class="section section-lg bg-default wow fadeIn">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8">
        <h4 class="text-secondary"><?php echo htmlspecialchars($projects['showcase_title']); ?></h4>
        <p class="text-gray-700"><?php echo htmlspecialchars($projects['showcase_text']); ?></p>
        <div class="mt-4">
          <a class="btn btn-primary btn-lg" href="<?php echo htmlspecialchars($projects['submit_link']); ?>">
            <?php echo htmlspecialchars($projects['submit_btn_text']); ?>
          </a>
          <a class="btn btn-outline-primary btn-lg ml-3"
            href="<?php echo htmlspecialchars($projects['channel_link']); ?>" target="_blank">
            <?php echo htmlspecialchars($projects['channel_btn_text']); ?>
          </a>
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