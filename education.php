<?php $content = include __DIR__ . '/data/content.php'; ?>
<!-- Section Header Default-->
<?php $index = 'education';
include('part-nav.php'); ?>
<!-- Section Swiper Slider-->
<section class="section section-swiper-absolute context-dark text-center wow fadeIn">
    <!-- Waves-->
    <canvas class="waves" data-speed="5" data-wave-width="150%" data-animation="SineInOut"></canvas>
    <!-- Swiper Content-->
    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url(images/bg-breadcrumbs-01-1894x424.jpg);">
        <div class="container">
            <h3 class="breadcrumbs-custom-title">
                <?php echo htmlspecialchars($content['association']['page_title'] ?? 'Education'); ?></h3>
        </div>
    </section>
</section>

<?php $association = $content['association']; ?>
<section class="section section-lg bg-gray-100 wow fadeIn" id="education-association">
    <div class="container">
        <div class="row row-40">
            <div class="col-lg-7">
                <h4 class="text-secondary"><?php echo htmlspecialchars($association['title']); ?></h4>
                <p class="text-gray-700"><?php echo htmlspecialchars($association['summary']); ?></p>
                <ul class="list-marked mt-3">
                    <?php foreach ($association['pillars'] as $pillar): ?>
                        <li><strong><?php echo htmlspecialchars($pillar['title']); ?>:</strong>
                            <?php echo htmlspecialchars($pillar['description']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-5">
                <h5><?php echo htmlspecialchars($association['first_year_title'] ?? 'First-year priorities'); ?></h5>
                <ul class="list-marked">
                    <?php foreach ($association['first_year_actions'] as $action): ?>
                        <li><?php echo htmlspecialchars($action); ?></li>
                    <?php endforeach; ?>
                </ul>
                <h6 class="mt-3">Contacts</h6>
                <ul class="list-unstyled">
                    <?php foreach ($association['contacts'] as $contact): ?>
                        <li><strong><?php echo htmlspecialchars($contact['label']); ?>:</strong>
                            <?php echo htmlspecialchars($contact['value']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php $hardware = $content['hardware']; ?>
<?php
$totalHeadsets = 0;
foreach ($hardware['inventory'] as $item) {
    if (isset($item['quantity'])) {
        $totalHeadsets += (int) $item['quantity'];
    }
}
?>
<section class="section section-lg bg-default wow fadeIn" id="education-hardware">
    <div class="container">
        <div class="row row-40 align-items-start">
            <div class="col-lg-8">
                <h4 class="text-secondary"><?php echo htmlspecialchars($hardware['title']); ?></h4>
                <p class="text-gray-700"><?php echo htmlspecialchars($hardware['intro']); ?></p>
                <div class="table-responsive-sm mt-3">
                    <table class="table table-sm table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Equipment</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hardware['inventory'] as $item): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($item['equipment']); ?></td>
                                    <td><?php echo htmlspecialchars($item['quantity']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4">
                <h4 class="text-secondary">
                    <?php echo htmlspecialchars($hardware['upgrades_title'] ?? 'Investissements Prioritaires'); ?></h4>
                <div class="table-responsive-sm mt-3">
                    <table class="table table-sm text-small">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Priority</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($hardware['upgrades'] as $upg): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($upg['item']); ?></td>
                                    <td><?php echo htmlspecialchars($upg['priority']); ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Resources -->
<section class="section section-lg bg-gray-100 wow fadeIn" id="resources">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h4 class="text-secondary">
                    <?php echo htmlspecialchars($association['resources_title'] ?? 'Education Resources'); ?></h4>
                <p class="text-gray-700"><?php echo htmlspecialchars($association['resources_intro'] ?? ''); ?></p>
            </div>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10">
                <ul class="list-group list-group-flush">
                    <?php
                    // Display ALL downloads found in the EDUCATION sheet (no filtering needed as sheet is dedicated)
                    foreach ($content['downloads'] as $download):
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