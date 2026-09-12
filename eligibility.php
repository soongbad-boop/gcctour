<?php
require __DIR__ . '/includes/bootstrap.php';
$page_title = 'GCC Visa Eligibility Guide 2026 | GCC Tour';
$page_description = 'Who may be eligible for the proposed Unified GCC Tourist Visa across UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait.';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Eligibility</span>
    </nav>

    <div class="eyebrow">Eligibility Analysis</div>
    <h1>Who May Be Eligible for the Unified GCC Tourist Visa?</h1>

    <div class="articleLead">
        <?= status_badge('expected', $status_labels) ?>
        <span>Provisional eligibility overview — Subject to final rule publication</span>
    </div>

    <p class="lede">
        Eligibility for a regional visa involves multiple dimensions. Use conditional wording until official government matrices are published.
    </p>

    <div class="docGrid">
        <div class="docCard">
            <div class="docCardHeader">
                <h3>1. Passport Nationality</h3>
                <span class="status status-expected">Pending List</span>
            </div>
            <p>International tourist categories:</p>
            <ul>
                <li>Visa-exempt nationalities across individual GCC states are expected to receive streamlined access.</li>
                <li>e-Visa eligible nationalities will be listed in the official launch announcement.</li>
                <li>Some nationalities may require additional approval or host country sponsorship.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>2. GCC Resident Permit Holders</h3>
                <span class="status status-reported">Special Category</span>
            </div>
            <p>Foreign residents living in GCC states:</p>
            <ul>
                <li>Holding a valid GCC residence permit (EID, Iqama, Civil ID) with min 3-6 months validity.</li>
                <li>Profession & income criteria may apply depending on destination country rules.</li>
                <li>Separate from GCC citizens who enjoy visa-free freedom of movement.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>3. Passport Validity & Condition</h3>
                <span class="status status-confirmed">Universal</span>
            </div>
            <p>Standard border control rules:</p>
            <ul>
                <li>Must hold an official machine-readable passport valid for at least 6 months.</li>
                <li>Emergency, temporary, or damaged travel documents may not be accepted.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>4. Purpose of Travel</h3>
                <span class="status status-confirmed">Confirmed Category</span>
            </div>
            <p>Permitted visitor activities:</p>
            <ul>
                <li>Tourism, leisure, sightseeing, cultural exploration, and visiting family.</li>
                <li>Attending events, conferences, or non-remunerated business meetings.</li>
                <li>Does NOT permit employment, long-term study, or permanent residency.</li>
            </ul>
        </div>
    </div>

    <div class="sourceBox warningBox">
        <h2>Eligibility Checker Notice</h2>
        <p>
            <strong>Informational only:</strong> Any third-party eligibility checker is for informational guidance only. Official eligibility decisions are made exclusively by member state immigration authorities.
        </p>
    </div>

    <h2>Frequently Asked Eligibility Questions</h2>
    <div class="faqContainer">
        <div class="faqItem open">
            <button class="faqQuestion" type="button">
                <span>Will all nationalities be able to apply for the Unified Visa?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                An official complete list of eligible nationalities has not yet been published. It is expected that eligible categories will be phased upon launch.
            </div>
        </div>

        <div class="faqItem">
            <button class="faqQuestion" type="button">
                <span>Are foreign residents of the GCC automatically eligible?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                No. GCC foreign residents are a distinct legal category from GCC citizens. Eligibility for GCC residents will depend on published profession lists and residence permit validity.
            </div>
        </div>
    </div>

    <?php render_related_articles('gcc-unified-tourist-visa-eligibility-2026', $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
