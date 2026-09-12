<?php
require __DIR__ . '/includes/bootstrap.php';
$page_title = 'GCC Residents Travel & Visa Guide 2026 | GCC Tour';
$page_description = 'Travel and visa information for foreign residents living in GCC countries (UAE, Saudi Arabia, Qatar, Oman, Bahrain, Kuwait).';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>GCC Residents</span>
    </nav>

    <div class="eyebrow">Resident Travel</div>
    <h1>GCC Residents: What a Future Unified Visa Means</h1>

    <div class="articleLead">
        <?= status_badge('reported', $status_labels) ?>
        <span>Important distinction guide</span>
    </div>

    <p class="lede">
        A GCC citizen (national of a member state) and a foreign national residing in a GCC country hold different legal travel statuses.
    </p>

    <div class="docGrid">
        <div class="docCard" style="border-top: 4px solid var(--navy);">
            <div class="docCardHeader">
                <h3>GCC Citizens</h3>
                <span class="status status-confirmed">Visa-Free</span>
            </div>
            <p>Nationals of UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait:</p>
            <ul>
                <li>Freedom of movement across all 6 member states using national ID or passport.</li>
                <li>No visa or entry permit required for travel between member states.</li>
            </ul>
        </div>

        <div class="docCard" style="border-top: 4px solid var(--gold);">
            <div class="docCardHeader">
                <h3>Foreign GCC Residents</h3>
                <span class="status status-reported">Visa Required / e-Visa</span>
            </div>
            <p>Expatriate residents holding GCC residence permits:</p>
            <ul>
                <li>Currently subject to individual member-state e-Visa or visa-on-arrival rules.</li>
                <li>Requires valid residence permit (min 3 months) and passport (min 6 months).</li>
                <li>Future unified visa aims to streamline multi-country movement for eligible residents.</li>
            </ul>
        </div>
    </div>

    <h2>Current Country Resident Portals</h2>
    <p>Until the unified system launches, GCC foreign residents should continue using existing national e-Visa portals:</p>

    <div class="docGrid">
        <div class="docCard">
            <h3>UAE Residents</h3>
            <p>For travelling to Saudi Arabia, Oman, Qatar, Bahrain, or Kuwait, apply via respective national official e-Visa portals.</p>
        </div>
        <div class="docCard">
            <h3>Saudi Residents (Iqama Holders)</h3>
            <p>Explore regional e-Visa options for GCC residents visiting UAE (GDRFA/ICP), Oman (e-Visa), Qatar (Hayya), or Bahrain (e-Visa).</p>
        </div>
    </div>

    <div class="sourceBox">
        <h2>Editorial Disclaimer for Residents</h2>
        <p>
            Do not copy speculative salary thresholds, approved profession lists, or unconfirmed fee structures from third-party blogs. Always verify rules directly with the destination country's official Ministry of Interior or Immigration portal.
        </p>
    </div>

    <?php render_related_articles('gcc-unified-tourist-visa-eligibility-2026', $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
