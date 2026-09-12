<?php
require __DIR__ . '/includes/bootstrap.php';
$page_title = 'GCC Unified Visa Requirements Guide 2026 | GCC Tour';
$page_description = 'Document checklist and planning guide for the expected Unified GCC Tourist Visa across UAE, Saudi Arabia, Qatar, Oman, Bahrain, and Kuwait.';
require __DIR__ . '/includes/header.php';
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Requirements</span>
    </nav>

    <div class="eyebrow">Document Checklist</div>
    <h1>GCC Unified Visa Requirements: Practical Document Guide</h1>

    <div class="articleLead">
        <?= status_badge('expected', $status_labels) ?>
        <span>Provisional checklist — Subject to official portal publication</span>
    </div>

    <p class="lede">
        This document checklist distinguishes standard international travel preparation from officially confirmed visa requirements for the upcoming Unified GCC Tourist Visa.
    </p>

    <div class="docGrid">
        <div class="docCard">
            <div class="docCardHeader">
                <h3>1. Passport Requirements</h3>
                <span class="status status-confirmed">Universal Rule</span>
            </div>
            <p>Standard requirement across all GCC immigration authorities:</p>
            <ul>
                <li>Minimum 6 months validity from intended date of entry.</li>
                <li>At least 2 blank passport pages for entry stamps.</li>
                <li>Machine-readable passport (biometric recommended).</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>2. Digital Passport Photograph</h3>
                <span class="status status-expected">Expected Spec</span>
            </div>
            <p>Typical requirements for online visa portals:</p>
            <ul>
                <li>Recent passport-style color photo (white background).</li>
                <li>Clear full-face view with neutral expression.</li>
                <li>Digital JPEG/PNG file meeting size & resolution limits.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>3. Accommodation Evidence</h3>
                <span class="status status-expected">Expected Spec</span>
            </div>
            <p>Trip verification documents for multi-country travel:</p>
            <ul>
                <li>Confirmed hotel bookings for each destination city.</li>
                <li>Host invitation details if staying with family/friends.</li>
                <li>Tour operator itinerary for organized group trips.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>4. Travel Insurance</h3>
                <span class="status status-expected">Expected Spec</span>
            </div>
            <p>Medical coverage requirement across participating states:</p>
            <ul>
                <li>Comprehensive travel health insurance policy.</li>
                <li>Valid across all 6 GCC member countries.</li>
                <li>Emergency medical evacuation & COVID/health coverage.</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>5. Proof of Onward Travel</h3>
                <span class="status status-expected">Expected Spec</span>
            </div>
            <p>Flight & transport evidence:</p>
            <ul>
                <li>Confirmed return flight ticket or exit transport booking.</li>
                <li>Inter-GCC transit tickets (flights, cross-border buses, or vehicle permits).</li>
            </ul>
        </div>

        <div class="docCard">
            <div class="docCardHeader">
                <h3>6. Financial Proof (If Required)</h3>
                <span class="status status-expected">Provisional</span>
            </div>
            <p>May apply depending on passport nationality:</p>
            <ul>
                <li>Bank statements showing sufficient funds for stay duration.</li>
                <li>Valid credit card or proof of income if requested.</li>
            </ul>
        </div>
    </div>

    <div class="tocBox">
        <strong>Important Advice for Travelers</strong>
        <p style="margin-bottom: 0;">
            Do not upload personal passport scans, bank details, or credit card information to third-party web forms or messaging channels. Wait until the official GCC Secretariat portal is publicly launched.
        </p>
    </div>

    <h2>Frequently Asked Questions About Documents</h2>
    <div class="faqContainer">
        <div class="faqItem open">
            <button class="faqQuestion" type="button">
                <span>Are travel insurance and hotel bookings mandatory for all countries?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                While hotel bookings and travel insurance are sensible travel planning items, final mandatory specifications will be established when the official GCC portal is released.
            </div>
        </div>

        <div class="faqItem">
            <button class="faqQuestion" type="button">
                <span>Will document requirements differ by nationality?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                Yes. Immigration systems frequently adjust document requirements based on nationality, residency status, and purpose of visit. Always verify your specific passport requirements upon official launch.
            </div>
        </div>
    </div>

    <div class="sourceBox">
        <h2>Official Verification Note</h2>
        <p>This checklist is for planning purposes. Always verify final requirements with official GCC government sources prior to departure.</p>
    </div>

    <?php render_related_articles('gcc-visa-requirements-explained', $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
