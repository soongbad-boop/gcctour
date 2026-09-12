<?php
$page_title = 'GCC Country Travel Guides | GCC Tour';
$page_description = 'Comprehensive travel and visa guides for all six GCC member countries: UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait.';
require __DIR__ . '/includes/header.php';
?>

<section class="section shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Countries</span>
    </nav>

    <div class="pageIntro">
        <div class="eyebrow">GCC Destinations</div>
        <h1>Travel Guides for All Six GCC Countries</h1>
        <p>Explore original destination guides designed around practical travel planning, itineraries, transport, top attractions, and verified entry requirements across the Gulf region.</p>
    </div>

    <div class="countryGrid">
        <?php foreach ($countries as $slug => $country) render_country_card($slug, $country); ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
