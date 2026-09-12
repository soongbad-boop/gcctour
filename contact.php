<?php
$page_title = 'Contact | GCC Tour';
$page_description = 'Contact the GCCTOUR editorial team for news inquiries or editorial feedback.';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Contact</span>
    </nav>

    <div class="eyebrow">Editorial Contact</div>
    <h1>Contact GCCTOUR</h1>
    <p class="lede">For press inquiries, editorial feedback, or source verification suggestions, please get in touch with our team.</p>

    <div class="sourceBox warningBox">
        <h2>Visa Application Notice</h2>
        <p>GCCTOUR is an independent travel news publication. We do NOT process visa applications, issue entry permits, or accept passport documents. For official visa inquiries, please contact the relevant embassy or official government portal.</p>
    </div>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
