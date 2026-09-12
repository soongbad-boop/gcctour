<?php
$page_title = 'Editorial Disclaimer | GCC Tour';
$page_description = 'GCC Tour provides independent travel information only. Always verify visa rules with official government authorities.';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Disclaimer</span>
    </nav>

    <div class="eyebrow">Legal & Safety</div>
    <h1>Editorial Disclaimer</h1>
    <p class="lede">GCCTOUR provides general travel information and status tracking for planning purposes only.</p>

    <div class="sourceBox warningBox">
        <h2>Important Notice for Travelers</h2>
        <p>
            Visa regulations, eligibility rules, and border policies change frequently and may vary depending on your citizenship, country of residence, and travel purpose. Always double-check current official entry requirements with the competent government authority or embassy prior to making non-refundable travel bookings.
        </p>
    </div>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
