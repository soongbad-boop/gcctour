<?php
require_once __DIR__ . '/bootstrap.php';
$current = basename($_SERVER['PHP_SELF'] ?? '', '.php');
$request_path = strtok($_SERVER['REQUEST_URI'] ?? '', '?');
$canonical_url = rtrim($site['domain'], '/') . $request_path;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= e($page_title) ?></title>
    <meta name="description" content="<?= e($page_description) ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <link rel="canonical" href="<?= e($canonical_url) ?>">

    <!-- Open Graph / Social Media -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?= e($site['name']) ?>">
    <meta property="og:title" content="<?= e($page_title) ?>">
    <meta property="og:description" content="<?= e($page_description) ?>">
    <meta property="og:url" content="<?= e($canonical_url) ?>">
    <meta property="og:image" content="<?= e(page_url('assets/favicon.svg')) ?>">
    <meta property="og:locale" content="en_US">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= e($page_title) ?>">
    <meta name="twitter:description" content="<?= e($page_description) ?>">
    <meta name="twitter:image" content="<?= e(page_url('assets/favicon.svg')) ?>">

    <!-- Mobile & Theme -->
    <meta name="theme-color" content="#0b1f3c">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="GCCTOUR">

    <!-- Regional Targeting (GCC) -->
    <meta name="geo.region" content="AE, SA, QA, OM, BH, KW">
    <meta name="geo.placename" content="Gulf Cooperation Council">

    <!-- Fonts & Favicon -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="<?= e(page_url('assets/favicon.svg')) ?>">
    <link rel="apple-touch-icon" href="<?= e(page_url('assets/favicon.svg')) ?>">
    <link rel="stylesheet" href="<?= e(page_url('assets/style.css')) ?>">

    <!-- Structured Data (Organization & WebSite Schema) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "GCCTOUR",
        "url": "<?= e($site['domain']) ?>",
        "description": "Independent GCC travel intelligence and status tracker for the Gulf region."
    }
    </script>
    <!-- Google Analytics (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-FYXRNZN9MM"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-FYXRNZN9MM');
    </script>
</head>
<body>
<div class="utility">
    Independent GCC travel information — verify final visa rules with official GCC & member-state authorities.
</div>

<header class="header shell">
    <a class="brand" href="<?= e(page_url('')) ?>" aria-label="GCCTOUR home">
        <span class="brandMark">G</span>
        <span>GCCTOUR</span>
    </a>

    <button class="menuButton" type="button" aria-expanded="false" aria-controls="primaryNav">
        <span>Menu</span>
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
    </button>

    <nav id="primaryNav" class="nav" aria-label="Primary navigation">
        <a href="<?= e(page_url('gcc-unified-visa')) ?>" class="<?= $current === 'gcc-unified-visa' ? 'active' : '' ?>">Visa Overview</a>
        <a href="<?= e(page_url('requirements')) ?>" class="<?= $current === 'requirements' ? 'active' : '' ?>">Requirements</a>
        <a href="<?= e(page_url('application')) ?>" class="<?= $current === 'application' ? 'active' : '' ?>">Application</a>
        <a href="<?= e(page_url('eligibility')) ?>" class="<?= $current === 'eligibility' ? 'active' : '' ?>">Eligibility</a>
        <a href="<?= e(page_url('gcc-residents')) ?>" class="<?= $current === 'gcc-residents' ? 'active' : '' ?>">GCC Residents</a>
        <a href="<?= e(page_url('countries')) ?>" class="<?= in_array($current, ['countries', 'country']) ? 'active' : '' ?>">Countries</a>
        <a href="<?= e(page_url('news')) ?>" class="<?= in_array($current, ['news', 'article']) ? 'active' : '' ?>">News</a>
    </nav>

    <a class="button small headerCta" href="<?= e(page_url('news')) ?>">LATEST UPDATES</a>
</header>

<main>
