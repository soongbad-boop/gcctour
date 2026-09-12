<?php
$page_title = 'GCC Tour — Unified GCC Visa News & Gulf Travel Guides';
$page_description = 'Independent GCC travel information, unified tourist visa updates, requirements explainers, and destination guides for the six GCC countries.';
require __DIR__ . '/includes/header.php';
?>

<section class="hero heroReferenceStyle">
    <div class="heroDecor heroDecorOne"></div>
    <div class="heroDecor heroDecorTwo"></div>
    <div class="shell heroGrid">
        <div class="heroCopy">
            <div class="kicker">Unified GCC travel intelligence</div>
            <h1>Plan Gulf travel with clearer visa updates.</h1>
            <p>
                Follow the proposed Unified GCC Tourist Visa, understand what is confirmed versus expected,
                and build better trips across Bahrain, Kuwait, Oman, Qatar, Saudi Arabia and the UAE.
            </p>
            <div class="heroActions">
                <a class="button" href="<?= e(page_url('gcc-unified-visa')) ?>">CHECK VISA STATUS</a>
                <a class="textLink" href="<?= e(page_url('countries')) ?>">Explore GCC countries <span>↗</span></a>
            </div>
        </div>

        <div class="heroPanel" aria-label="GCC visa status preview">
            <div class="heroPanelTop">
                <span class="miniLabel">LIVE VISA TRACKER</span>
                <span class="statusDot" title="Tracking updates"></span>
            </div>
            <h2>Unified GCC Tourist Visa</h2>
            <div class="heroStat">
                <span>Scope</span>
                <strong>6 GCC member states</strong>
            </div>
            <div class="heroStat">
                <span>Launch date</span>
                <strong>Reported as soon; exact date pending</strong>
            </div>
            <div class="heroStat">
                <span>Official fee</span>
                <strong>Not officially confirmed</strong>
            </div>
            <div class="heroStat">
                <span>Editorial status</span>
                <span class="status status-reported">Reported — Awaiting portal</span>
            </div>
            <a class="circleArrow" href="<?= e(page_url('gcc-unified-visa')) ?>" aria-label="Open visa status tracker">↗</a>
        </div>
    </div>
</section>

<section class="referenceIntro sectionSoft">
    <div class="shell">
        <div class="sectionHeading compactHeading">
            <div>
                <div class="eyebrow">GCC Travel Hub</div>
                <h2>Everything you need to plan with confidence</h2>
            </div>
            <p>Each guide separates official facts from reported or expected visa details, so planning information stays useful without pretending forecasts are final.</p>
        </div>

        <div class="serviceGrid">
            <a class="serviceCard" href="<?= e(page_url('gcc-unified-visa')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><path d="M10 14h28v22H10z"/><path d="M17 10v8M31 10v8M16 25h6M26 25h6M16 31h16"/></svg>
                </div>
                <h3>Unified Visa Status</h3>
                <p>See what is officially confirmed, what is reported, and which launch details are still pending.</p>
                <span class="cardArrow">↗</span>
            </a>

            <a class="serviceCard" href="<?= e(page_url('requirements')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><path d="M15 8h18l7 7v25H15z"/><path d="M33 8v9h9M20 24h14M20 30h14M20 36h9"/></svg>
                </div>
                <h3>Visa Requirements</h3>
                <p>Build a document checklist while keeping unconfirmed requirements visibly labelled as provisional.</p>
                <span class="cardArrow">↗</span>
            </a>

            <a class="serviceCard" href="<?= e(page_url('eligibility')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><circle cx="20" cy="18" r="7"/><path d="M8 39c1-8 6-12 12-12s11 4 12 12M33 22l4 4 7-8"/></svg>
                </div>
                <h3>Eligibility Guide</h3>
                <p>Understand the factors that may affect eligibility without presenting an unofficial checker as a decision.</p>
                <span class="cardArrow">↗</span>
            </a>

            <a class="serviceCard" href="<?= e(page_url('gcc-residents')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><circle cx="18" cy="17" r="6"/><circle cx="34" cy="19" r="5"/><path d="M7 38c1-8 5-12 11-12 7 0 11 4 12 12M29 30c7-2 12 2 13 8"/></svg>
                </div>
                <h3>GCC Residents</h3>
                <p>Separate GCC citizenship from foreign GCC residency and link current country-specific official rules.</p>
                <span class="cardArrow">↗</span>
            </a>

            <a class="serviceCard" href="<?= e(page_url('countries')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><circle cx="24" cy="24" r="16"/><path d="M8 24h32M24 8c5 5 7 10 7 16s-2 11-7 16M24 8c-5 5-7 10-7 16s2 11 7 16"/></svg>
                </div>
                <h3>Country Guides</h3>
                <p>Explore all six GCC countries with practical destination, transport, costs and itinerary information.</p>
                <span class="cardArrow">↗</span>
            </a>

            <a class="serviceCard" href="<?= e(page_url('news')) ?>">
                <div class="serviceIcon" aria-hidden="true">
                    <svg viewBox="0 0 48 48"><path d="M9 11h30v26H9z"/><path d="M15 17h11v8H15zM30 17h4M30 22h4M15 30h19"/></svg>
                </div>
                <h3>News & Updates</h3>
                <p>Follow visa, border, aviation and tourism developments with source and verification labels.</p>
                <span class="cardArrow">↗</span>
            </a>
        </div>
    </div>
</section>

<section class="processSection">
    <div class="shell">
        <div class="centerHeading">
            <div class="eyebrow">Step Plan</div>
            <h2>Your step-by-step GCC planning flow</h2>
        </div>

        <div class="processLine" aria-hidden="true"></div>
        <div class="processGrid">
            <div class="processItem">
                <div class="processIcon navy">
                    <span class="stepNo">01</span>
                    <svg viewBox="0 0 48 48"><circle cx="22" cy="22" r="12"/><path d="M31 31l10 10M17 22l4 4 7-9"/></svg>
                </div>
                <h3>Check The Status</h3>
                <p>Start with the latest verified launch, fee, validity and eligibility information before making assumptions.</p>
            </div>

            <div class="processItem">
                <div class="processIcon gold">
                    <span class="stepNo navyTag">02</span>
                    <svg viewBox="0 0 48 48"><path d="M11 10h25v30H11z"/><path d="M17 18h13M17 24h13M17 30h8M33 33l3 3 6-8"/></svg>
                </div>
                <h3>Prepare & Verify</h3>
                <p>Build your passport and travel-document checklist, then verify final requirements with official authorities.</p>
            </div>

            <div class="processItem">
                <div class="processIcon yellow">
                    <span class="stepNo navyTag">03</span>
                    <svg viewBox="0 0 48 48"><path d="M8 36l10-13 8 7 13-18"/><circle cx="39" cy="12" r="3"/><path d="M9 12h8M13 8v8"/></svg>
                </div>
                <h3>Plan The Trip</h3>
                <p>Compare GCC destinations, trip timing, transport and itinerary ideas without confusing travel guidance with visa approval.</p>
            </div>
        </div>

        <div class="centerAction">
            <a class="button" href="<?= e(page_url('gcc-unified-visa')) ?>">OPEN VISA TRACKER</a>
        </div>
    </div>
</section>

<section class="resultSection sectionSoft">
    <div class="shell resultGrid">
        <div class="resultCopy">
            <div class="eyebrow">Verified First</div>
            <h2>Plan with facts, not launch-date rumors</h2>
            <div class="microArrows" aria-hidden="true"><span>←</span><span>→</span></div>
            <a class="button" href="<?= e(page_url('news')) ?>">LATEST VERIFIED UPDATES</a>
        </div>

        <div class="resultVisual">
            <div class="mapCard">
                <div class="mapDots">
                    <span class="mapDot d1" title="UAE"></span><span class="mapDot d2" title="Saudi Arabia"></span><span class="mapDot d3" title="Qatar"></span>
                    <span class="mapDot d4" title="Oman"></span><span class="mapDot d5" title="Bahrain"></span><span class="mapDot d6" title="Kuwait"></span>
                </div>
                <div class="gulfShape" aria-hidden="true">GCC</div>
                <div class="sourceSeal" title="Verified source policy">✓</div>
            </div>
            <div class="quoteCard">
                <p>
                    GCCTOUR content is designed around a simple rule: when a fee, validity period,
                    eligibility condition or launch date is not officially final, the page must say so.
                </p>
                <strong>Source-led editorial policy</strong>
            </div>
            <div class="yellowPlate"></div>
        </div>
    </div>
</section>

<section class="sourcePartnerSection">
    <div class="shell">
        <div class="centerHeading sourceHeading">
            <div class="eyebrow">Source Priority</div>
            <h2>We verify against authoritative sources first</h2>
        </div>

        <div class="sourceOrbit">
            <div class="sourceCenter">
                <span class="sourceCenterMark">G</span>
            </div>

            <div class="sourcePill sourceOne">GCC Secretariat</div>
            <div class="sourcePill sourceTwo">Immigration Authorities</div>
            <div class="sourcePill sourceThree">Tourism Ministries</div>
            <div class="sourcePill sourceFour">Government Portals</div>
            <div class="sourcePill sourceFive">Official Airlines</div>
            <div class="sourcePill sourceSix">Official Airports</div>

            <span class="orbitLine lineOne"></span>
            <span class="orbitLine lineTwo"></span>
            <span class="orbitLine lineThree"></span>
            <span class="orbitLine lineFour"></span>
            <span class="orbitLine lineFive"></span>
            <span class="orbitLine lineSix"></span>
        </div>
    </div>
</section>

<section class="section newsReferenceSection">
    <div class="shell">
        <div class="centerHeading newsHeading">
            <div class="eyebrow">Latest News And Blogs</div>
            <h2>Recent GCC visa & travel updates</h2>
        </div>

        <div class="articleGrid referenceArticleGrid">
            <?php 
            $count = 0;
            foreach ($articles as $slug => $article) {
                render_article_card($slug, $article, $status_labels);
                $count++;
                if ($count >= 6) break;
            } 
            ?>
        </div>

        <div class="centerAction newsAction">
            <a class="button" href="<?= e(page_url('news')) ?>">VIEW ALL NEWS</a>
        </div>
    </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
