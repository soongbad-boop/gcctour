<?php
require __DIR__ . '/includes/bootstrap.php';

$slug = $_GET['slug'] ?? '';
$country = $countries[$slug] ?? null;

if (!$country) {
    http_response_code(404);
    $page_title = 'Country not found | GCC Tour';
    require __DIR__ . '/includes/header.php';
    echo '<article class="articlePage shell"><h1>Country not found</h1><p>The requested GCC country guide does not exist.</p></article>';
    require __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = $country['name'] . ' Travel & Visa Guide 2026 | GCC Tour';
$page_description = $country['blurb'] . ' Comprehensive guide to entry rules, top destinations, transport, and itineraries for ' . $country['name'] . '.';
require __DIR__ . '/includes/header.php';

// Country specific details array
$country_details = [
    'uae' => [
        'capital' => 'Abu Dhabi',
        'currency' => 'UAE Dirham (AED)',
        'airports' => 'Dubai (DXB), Abu Dhabi (AUH), Sharjah (SHJ)',
        'best_time' => 'November to April (Warm & dry, 20°C - 28°C)',
        'top_spots' => 'Dubai (Burj Khalifa, Dubai Mall), Abu Dhabi (Sheikh Zayed Grand Mosque, Louvre), Ras Al Khaimah (Jebel Jais), Sharjah (Heritage Area).',
        'transport' => 'Dubai Metro, taxi networks, inter-city buses, and rental cars.',
        'itineraries' => [
            '3-Day' => 'Dubai highlights: Burj Khalifa, Dubai Mall, Desert Safari, and Dubai Marina cruise.',
            '5-Day' => 'Dubai & Abu Dhabi: Add Sheikh Zayed Grand Mosque, Qasr Al Watan, and Louvre Abu Dhabi.',
            '7-Day' => 'Full Emirates Tour: Add Ras Al Khaimah mountains and Sharjah cultural museums.',
        ],
        'official_portal' => 'https://icp.gov.ae (Federal ICP) & https://gdrfad.gov.ae (Dubai GDRFA)',
    ],
    'saudi-arabia' => [
        'capital' => 'Riyadh',
        'currency' => 'Saudi Riyal (SAR)',
        'airports' => 'Riyadh (RUH), Jeddah (JED), Dammam (DMM), AlUla (ULH)',
        'best_time' => 'October to March (Cool winters across high plateau)',
        'top_spots' => 'Riyadh (Diriyah, Kingdom Centre), AlUla (Hegra UNESCO site), Jeddah (Al-Balad Old Town), Red Sea Coast.',
        'transport' => 'Haramain High-Speed Railway (Jeddah-Makkah-Madinah), domestic flights, and car rentals.',
        'itineraries' => [
            '3-Day' => 'Riyadh city break: Diriyah historic district, Edge of the World, and Boulevard Riyadh.',
            '5-Day' => 'Jeddah & AlUla: Historical Al-Balad, Red Sea corniche, and Hegra rock tombs in AlUla.',
            '7-Day' => 'Grand Kingdom Tour: Combine Riyadh, AlUla heritage, and Jeddah coastal culture.',
        ],
        'official_portal' => 'https://visa.visitsaudi.com (Official Saudi eVisa Portal)',
    ],
    'qatar' => [
        'capital' => 'Doha',
        'currency' => 'Qatari Riyal (QAR)',
        'airports' => 'Doha Hamad International Airport (DOH)',
        'best_time' => 'November to March (Pleasant mild winter weather)',
        'top_spots' => 'Doha (Souq Waqif, Museum of Islamic Art, Katara Cultural Village, Pearl-Qatar), Inland Sea (Khor Al Adaid).',
        'transport' => 'Doha Metro (state-of-the-art 3 lines), Karwa taxis, Uber.',
        'itineraries' => [
            '3-Day' => 'Doha stopover: Souq Waqif, MIA, National Museum of Qatar, and Katara Cultural Village.',
            '5-Day' => 'Qatar Culture & Desert: Add desert dune bashing to Inland Sea and Pearl-Qatar luxury.',
            '7-Day' => 'In-depth Qatar: Add Al Zubarah Fort, Purple Island kayaking, and Lusail Stadium district.',
        ],
        'official_portal' => 'https://hayya.qa (Qatar Hayya Platform)',
    ],
    'oman' => [
        'capital' => 'Muscat',
        'currency' => 'Omani Rial (OMR)',
        'airports' => 'Muscat International (MCT), Salalah (SLL)',
        'best_time' => 'October to April (Warm days, cool mountain nights). July-Sept for Salalah Khareef monsoon.',
        'top_spots' => 'Muscat (Sultan Qaboos Grand Mosque, Mutrah Souq), Jebel Akhdar & Jebel Shams mountains, Nizwa Fort, Wahiba Sands desert, Bimmah Sinkhole.',
        'transport' => 'Rental car (4WD recommended for mountains & desert), Mwasalat buses.',
        'itineraries' => [
            '3-Day' => 'Muscat & Nizwa: Sultan Qaboos Mosque, Mutrah Corniche, Nizwa Fort & Friday Cattle Market.',
            '5-Day' => 'Oman Mountains & Desert: Add Jebel Shams Grand Canyon of Oman and Wahiba Sands glamping.',
            '7-Day' => 'Complete Oman Loop: Add Wadi Shab hiking, Sur dhow shipyards, and Ras Al Jinz turtle reserve.',
        ],
        'official_portal' => 'https://evisa.rop.gov.om (Royal Oman Police eVisa)',
    ],
    'bahrain' => [
        'capital' => 'Manama',
        'currency' => 'Bahraini Dinar (BHD)',
        'airports' => 'Bahrain International Airport (BAH)',
        'best_time' => 'November to March (Cool, breeze-filled winter season)',
        'top_spots' => 'Manama (Qal\'at al-Bahrain fort, Bahrain National Museum, Bab Al Bahrain souq), Tree of Life, Al Fateh Grand Mosque, F1 Circuit.',
        'transport' => 'Taxis, ride-hailing apps, bus network, easy road connections via King Fahd Causeway to Saudi Arabia.',
        'itineraries' => [
            '3-Day' => 'Island heritage: Bahrain Fort, National Museum, Bab Al Bahrain, and Block 338 dining.',
            '5-Day' => 'Bahrain Explorer: Add Pearl Path UNESCO trail in Muharraq, Tree of Life, and BIC racing circuit.',
            '7-Day' => 'Bahrain & Saudi Overland: Combine Manama with a day trip across King Fahd Causeway to Eastern Saudi Arabia.',
        ],
        'official_portal' => 'https://www.evisa.gov.bh (Bahrain e-Visa Portal)',
    ],
    'kuwait' => [
        'capital' => 'Kuwait City',
        'currency' => 'Kuwaiti Dinar (KWD)',
        'airports' => 'Kuwait International Airport (KWI)',
        'best_time' => 'November to March (Mild weather, perfect for seaside strolls)',
        'top_spots' => 'Kuwait Towers, Souk Al-Mubarakiya, Grand Mosque, Sheikh Jaber Al-Ahmad Cultural Centre, Mirror House, Failaka Island.',
        'transport' => 'Taxis, ride-hailing (Careem), city bus routes, and car rentals.',
        'itineraries' => [
            '3-Day' => 'Kuwait City highlights: Kuwait Towers, Souk Al-Mubarakiya, Grand Mosque, and Al Shaheed Park.',
            '5-Day' => 'Culture & Coast: Add Sheikh Jaber Cultural Centre, The Avenues Mall, and Failaka Island archaeology.',
            '7-Day' => 'Gulf Urban Explorer: Combine Kuwait City sightseeing with desert camping and coastal culinary tours.',
        ],
        'official_portal' => 'https://evisa.moi.gov.kw (Kuwait Ministry of Interior eVisa)',
    ],
];

$details = $country_details[$slug] ?? [
    'capital' => 'Capital City',
    'currency' => 'Local Currency',
    'airports' => 'Major International Airports',
    'best_time' => 'October to April',
    'top_spots' => 'Capital landmarks and heritage destinations.',
    'transport' => 'Metro, taxis, and highway connections.',
    'itineraries' => [
        '3-Day' => 'City highlights and central landmarks.',
        '5-Day' => 'Heritage sites and coastal attractions.',
        '7-Day' => 'Grand country tour.',
    ],
    'official_portal' => 'Official Government Immigration Portal',
];
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <a href="<?= e(page_url('countries')) ?>">Countries</a>
        <span>/</span>
        <span><?= e($country['name']) ?></span>
    </nav>

    <div class="countryHeader">
        <div class="countryBadge"><?= e($country['code']) ?> • GCC Member State</div>
        <h1><?= e($country['name']) ?> Travel & Visa Guide</h1>
        <p class="lede"><?= e($country['blurb']) ?></p>
    </div>

    <div class="docGrid">
        <div class="docCard">
            <h3>Quick Country Facts</h3>
            <ul>
                <li><strong>Capital:</strong> <?= e($details['capital']) ?></li>
                <li><strong>Currency:</strong> <?= e($details['currency']) ?></li>
                <li><strong>Main Airports:</strong> <?= e($details['airports']) ?></li>
                <li><strong>Best Time to Visit:</strong> <?= e($details['best_time']) ?></li>
            </ul>
        </div>

        <div class="docCard">
            <h3>Current Visa & Entry Status</h3>
            <span class="status status-confirmed">Active eVisa / On Arrival</span>
            <p style="margin-top: 10px !important;">
                Travelers can currently apply via <?= e($country['name']) ?>'s national e-Visa system or check visa-on-arrival eligibility. Under the future Unified GCC Tourist Visa, <?= e($country['name']) ?> will be one of the six entry destinations covered.
            </p>
        </div>
    </div>

    <h2>Top Attractions & Experiences</h2>
    <p><?= e($details['top_spots']) ?></p>

    <h2>Getting Around & Transport</h2>
    <p><?= e($details['transport']) ?></p>

    <h2>Recommended Itinerary Ideas</h2>
    <div class="itineraryGrid">
        <?php foreach ($details['itineraries'] as $duration => $plan): ?>
            <div class="itineraryCard">
                <h4><?= e($duration) ?> Itinerary</h4>
                <p><?= e($plan) ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>How <?= e($country['name']) ?> Fits a Multi-Country GCC Trip</h2>
    <p>
        <?= e($country['name']) ?> offers direct regional flight connections and land border crossings to neighboring GCC states. When the Unified GCC Tourist Visa launches, visitors will be able to combine <?= e($country['name']) ?> with destinations like Dubai, Riyadh, Doha, Muscat, or Manama in one seamless trip itinerary.
    </p>

    <div class="sourceBox">
        <h2>Official <?= e($country['name']) ?> Visa Portal</h2>
        <p>
            For current entry requirements, official e-Visa applications, and official government travel notices, visit:
        </p>
        <p>
            <strong>Official Domain:</strong> <a href="<?= e($details['official_portal']) ?>" target="_blank" rel="noopener noreferrer"><?= e($details['official_portal']) ?> ↗</a>
        </p>
    </div>

    <?php render_related_articles('one-visa-six-countries-gcc-grand-tours-visa', $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
