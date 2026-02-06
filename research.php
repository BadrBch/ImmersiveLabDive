<?php $content = include __DIR__ . '/data/content.php'; ?>
<!-- Section Header Default-->
<?php $index = 'research';
include('part-nav.php'); ?>
<!-- Section Swiper Slider-->
<section class="section section-swiper-absolute context-dark text-center wow fadeIn">
    <!-- Waves-->
    <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
    <!-- Swiper Content-->
    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
            <h3 class="breadcrumbs-custom-title"><?php echo htmlspecialchars($research['page_title'] ?? 'Research'); ?>
            </h3>
        </div>
    </section>
</section>

<?php $research = $content['research']; ?>
<section class="section section-lg bg-default wow fadeIn" id="research-group">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <h4 class="text-secondary"><?php echo htmlspecialchars($research['title']); ?></h4>
                <p class="text-gray-700"><?php echo htmlspecialchars($research['intro']); ?></p>
                <p class="font-weight-bold"><a
                        href="mailto:<?php echo htmlspecialchars($research['contact']); ?>"><?php echo htmlspecialchars($research['contact']); ?></a>
                </p>
                <?php if (!empty($research['pillars_title'])): ?>
                    <h5 class="text-secondary mt-5"><?php echo htmlspecialchars($research['pillars_title']); ?></h5>
                <?php endif; ?>
            </div>
        </div>
        <div class="row row-40 mt-4">
            <?php foreach ($research['pillars'] as $pillar): ?>
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
    </div>
</section>



<!-- Section Resources -->
<section class="section section-lg bg-default wow fadeIn" id="resources">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h4 class="text-secondary">
                    <?php echo htmlspecialchars($research['resources_title'] ?? 'Research Resources'); ?>
                </h4>
                <p class="text-gray-700"><?php echo htmlspecialchars($research['resources_intro'] ?? ''); ?></p>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10">
                <ul class="list-group list-group-flush">
                    <?php
                    // Use resources defined in RESEARCH sheet if available
                    $resources = !empty($research['resources']) ? $research['resources'] : [];

                    // Fallback to filtering global downloads if empty (legacy support)
                    if (empty($resources)) {
                        $res_keywords = ['Vision & Immersion', 'Call for Papers', 'Livre blanc', 'Prestataires', 'Immersive Space'];
                        foreach ($content['downloads'] as $download) {
                            foreach ($res_keywords as $kw) {
                                if (stripos($download['label'], $kw) !== false || stripos($download['description'], $kw) !== false) {
                                    $resources[] = $download;
                                    break;
                                }
                            }
                        }
                    }

                    foreach ($resources as $download):
                        ?>
                        <li
                            class="list-group-item d-flex justify-content-between align-items-start flex-column flex-md-row">
                            <div>
                                <h6 class="mb-1"><?php echo htmlspecialchars($download['label']); ?></h6>
                                <p class="mb-0 text-gray-700"><?php echo htmlspecialchars($download['description']); ?></p>
                            </div>
                            <div class="mt-3 mt-md-0">
                                <a class="btn btn-primary btn-sm" href="<?php echo htmlspecialchars($download['path']); ?>"
                                    target="_blank">Download</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
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