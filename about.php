<?php
$page_title = 'About GCCTOUR | GCC Tour';
$page_description = 'GCCTOUR is an independent travel-information publication focused on source-led GCC visa news and destination planning.';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>About</span>
    </nav>

    <div class="eyebrow">Publication Overview</div>
    <h1>About GCCTOUR</h1>
    <p class="lede">GCCTOUR is an independent travel intelligence publication providing source-led coverage of GCC visa developments, requirements analysis, and Gulf destination guides.</p>

    <div class="docGrid">
        <div class="docCard">
            <h3>Our Editorial Standards</h3>
            <p>Every article published on GCCTOUR follows strict guidelines:</p>
            <ul>
                <li>Clear labeling of claims as <strong>Confirmed</strong>, <strong>Reported</strong>, or <strong>Expected</strong>.</li>
                <li>Primary source verification from official GCC Secretariat and member state authorities.</li>
                <li>Clear separation of travel planning advice from government entry approvals.</li>
            </ul>
        </div>

        <div class="docCard">
            <h3>Independent Scope</h3>
            <p>GCCTOUR is an independent resource:</p>
            <ul>
                <li>Not affiliated with any government agency or embassy.</li>
                <li>Does not process visa applications, collect passport data, or charge visa fees.</li>
            </ul>
        </div>
    </div>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
