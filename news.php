<?php
$page_title = 'GCC Visa & Travel News 2026 | GCC Tour';
$page_description = 'Latest 2026 GCC visa updates, reported developments, and source-led Gulf travel news covering UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait.';
require __DIR__ . '/includes/header.php';
?>

<section class="section shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Newsroom</span>
    </nav>

    <div class="pageIntro">
        <div class="eyebrow">Newsroom & Tracker</div>
        <h1>GCC Visa & Travel Newsroom</h1>
        <p>Verified coverage, including the latest Unified GCC Tourist Visa outlook, official statements, requirements explainers, and the UAE–Bahrain Single Entry Point project. Every article separates confirmed facts from reported or expected details.</p>
    </div>

    <div class="articleGrid">
        <?php foreach ($articles as $slug => $article) render_article_card($slug, $article, $status_labels); ?>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
