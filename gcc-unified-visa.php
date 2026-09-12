<?php
require __DIR__ . '/includes/bootstrap.php';
$page_title = 'Unified GCC Visa Status Tracker 2026 | GCC Tour';
$page_description = 'Source-led live status tracker for the proposed Unified GCC Tourist Visa across Bahrain, Kuwait, Oman, Qatar, Saudi Arabia and the UAE.';
require __DIR__ . '/includes/header.php';

// Pull the main unified visa article data if available
$slug = 'unified-gcc-visa-complete-2026-guide';
$guide = $articles[$slug] ?? null;
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <span>Visa Overview</span>
    </nav>

    <div class="eyebrow">Living Tracker — Updated September 2026</div>
    <h1>Unified GCC Tourist Visa: Status, Requirements & Launch Tracker</h1>

    <div class="articleLead">
        <?= status_badge('reported', $status_labels) ?>
        <span>Last verified: September 2026</span>
        <span>•</span>
        <span>Source: GCC Secretariat General</span>
    </div>

    <p class="lede">
        This living tracker details the status of the proposed Unified GCC Tourist Visa ("Grand Tours Visa") for Bahrain, Kuwait, Oman, Qatar, Saudi Arabia, and the United Arab Emirates.
    </p>

    <div class="docGrid">
        <div class="docCard" style="border-top: 4px solid var(--success);">
            <div class="docCardHeader">
                <h3>Officially Confirmed</h3>
                <span class="status status-confirmed">Confirmed</span>
            </div>
            <p>Facts published by official GCC Secretariat General or member state authorities.</p>
            <ul>
                <li>Regional 6-country single tourist visa framework approved in principle.</li>
                <li>Participating countries: UAE, Saudi Arabia, Qatar, Oman, Bahrain, Kuwait.</li>
                <li>Single Entry Point for Air Travel pilot active between UAE and Bahrain (Feb 2026).</li>
            </ul>
        </div>

        <div class="docCard" style="border-top: 4px solid #eab308;">
            <div class="docCardHeader">
                <h3>Reported Updates</h3>
                <span class="status status-reported">Reported</span>
            </div>
            <p>Statements by senior officials awaiting formal operational launch notices.</p>
            <ul>
                <li>GCC Secretary-General stated on 6 Sept 2026 that the visa will launch "soon".</li>
                <li>2026 rollout remains the target timeframe announced by tourism ministers.</li>
                <li>Unified portal infrastructure is currently undergoing technical alignment.</li>
            </ul>
        </div>
    </div>

    <div class="docCard" style="border-top: 4px solid #94a3b8; margin-bottom: 36px;">
        <div class="docCardHeader">
            <h3>Details Still Pending (Not Yet Final)</h3>
            <span class="status status-expected">Pending Rules</span>
        </div>
        <p>Operational details that have NOT been officially published or guaranteed.</p>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 16px; margin-top: 14px;">
            <div>
                <strong>Exact Launch Date:</strong>
                <p style="margin: 4px 0 0 !important; font-size: 13px !important;">No day or month confirmed.</p>
            </div>
            <div>
                <strong>Official Visa Fee:</strong>
                <p style="margin: 4px 0 0 !important; font-size: 13px !important;">Fee schedule not published.</p>
            </div>
            <div>
                <strong>Validity & Stay Period:</strong>
                <p style="margin: 4px 0 0 !important; font-size: 13px !important;">30, 60 or 90 days not final.</p>
            </div>
            <div>
                <strong>Official Portal URL:</strong>
                <p style="margin: 4px 0 0 !important; font-size: 13px !important;">Application URL pending.</p>
            </div>
        </div>
    </div>

    <h2>Six Participating GCC Member States</h2>
    <p>When fully launched, the Unified GCC Tourist Visa is designed to support seamless visitor movement across all six countries:</p>

    <div class="countryGrid" style="margin: 24px 0 40px;">
        <?php foreach ($countries as $cSlug => $country): ?>
            <a class="countryCard" href="<?= e(page_url('countries/' . urlencode($cSlug))) ?>">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <span class="countryCode"><?= e($country['code']) ?></span>
                    <span class="status status-confirmed">Included</span>
                </div>
                <h3><?= e($country['name']) ?></h3>
                <p><?= e($country['blurb']) ?></p>
                <span class="arrow">Country Guide →</span>
            </a>
        <?php endforeach; ?>
    </div>

    <h2>Frequently Asked Status Questions</h2>
    <div class="faqContainer">
        <div class="faqItem open">
            <button class="faqQuestion" type="button">
                <span>Has the Unified GCC Tourist Visa officially launched?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                No. The latest September 2026 statement from the GCC Secretary-General states that the launch is coming "soon," but an exact launch date and a live application portal have not been formally opened.
            </div>
        </div>

        <div class="faqItem">
            <button class="faqQuestion" type="button">
                <span>Can I apply for the Unified GCC Visa on any website right now?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                No. Any third-party website claiming to offer live applications or guaranteed approvals before the official GCC Secretariat portal is live should be treated with caution. GCCTOUR does not collect passport details or process payments.
            </div>
        </div>

        <div class="faqItem">
            <button class="faqQuestion" type="button">
                <span>Is the UAE–Bahrain Single Entry Point the full Unified Visa?</span>
                <span class="faqToggleIcon">+</span>
            </button>
            <div class="faqAnswer">
                No. The UAE–Bahrain Single Entry Point for Air Travel (launched phase 1 in Feb 2026) is a separate passenger pre-registration and airport processing pilot between two countries, not the full six-country tourist visa.
            </div>
        </div>
    </div>

    <div class="sourceBox warningBox">
        <h2>Editorial Safety Policy</h2>
        <p>
            GCCTOUR updates this page only when authoritative primary sources (such as the GCC Secretariat General or member state immigration ministries) publish official notices. Unverified rumors, countdown timers, and third-party fee estimates are strictly excluded from being reported as facts.
        </p>
    </div>

    <?php render_related_articles('gcc-unified-visa-complete-2026-guide', $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
