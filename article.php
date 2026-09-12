<?php
require __DIR__ . '/includes/bootstrap.php';

$slug = $_GET['slug'] ?? '';
$article = $articles[$slug] ?? null;

if (!$article) {
    http_response_code(404);
    $page_title = 'Article not found | GCC Tour';
    require __DIR__ . '/includes/header.php';
    echo '<article class="articlePage shell"><h1>Article not found</h1><p>The requested article does not exist.</p></article>';
    require __DIR__ . '/includes/footer.php';
    exit;
}

$page_title = ($article['meta_title'] ?? $article['title']) . ' | GCC Tour';
$page_description = $article['meta_description'] ?? $article['excerpt'];
require __DIR__ . '/includes/header.php';

$article_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => $article['title'],
    'description' => $page_description,
    'datePublished' => $article['date'],
    'dateModified' => $article['last_verified'] ?? $article['date'],
    'author' => ['@type' => 'Organization', 'name' => 'GCCTOUR'],
    'publisher' => ['@type' => 'Organization', 'name' => 'GCCTOUR'],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $site['domain'] . '/news/' . rawurlencode($slug)],
];
echo '<script type="application/ld+json">' . json_encode($article_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

if (!empty($article['faq'])) {
    $faq_schema = ['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => []];
    foreach ($article['faq'] as $item) {
        $faq_schema['mainEntity'][] = [
            '@type' => 'Question',
            'name' => $item['question'],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['answer']],
        ];
    }
    echo '<script type="application/ld+json">' . json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
}
?>

<article class="articlePage shell">
    <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="<?= e(page_url('')) ?>">Home</a>
        <span>/</span>
        <a href="<?= e(page_url('news')) ?>">News</a>
        <span>/</span>
        <span><?= e($article['category']) ?></span>
    </nav>

    <div class="eyebrow"><?= e($article['category']) ?></div>
    <h1><?= e($article['title']) ?></h1>

    <div class="articleLead">
        <?= status_badge($article['status'], $status_labels) ?>
        <span>Published: <?= e($article['date']) ?></span>
        <span>•</span>
        <span>Last verified: <?= e($article['last_verified'] ?? $article['date']) ?></span>
    </div>

    <p class="lede"><?= e($article['excerpt']) ?></p>

    <?php if (!empty($article['sections'])): ?>
        <div class="tocBox">
            <strong>Table of Contents</strong>
            <ul>
                <?php foreach ($article['sections'] as $idx => $section): ?>
                    <li>
                        <a href="#section-<?= $idx ?>">
                            <span>→</span> <?= e($section['heading']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <?php if (!empty($article['faq'])): ?>
                    <li><a href="#faq-section"><span>→</span> Frequently Asked Questions</a></li>
                <?php endif; ?>
                <li><a href="#sources-section"><span>→</span> Sources & Verification</a></li>
            </ul>
        </div>

        <?php foreach ($article['sections'] as $idx => $section): ?>
            <h2 id="section-<?= $idx ?>"><?= e($section['heading']) ?></h2>
            <?php foreach ($section['paragraphs'] as $paragraph): ?>
                <p><?= e($paragraph) ?></p>
            <?php endforeach; ?>
        <?php endforeach; ?>
    <?php else: ?>
        <h2>Key points</h2>
        <ul>
            <?php foreach ($article['key_points'] as $point): ?>
                <li><?= e($point) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (!empty($article['faq'])): ?>
        <h2 id="faq-section">Frequently Asked Questions</h2>
        <div class="faqContainer">
            <?php foreach ($article['faq'] as $fIdx => $item): ?>
                <div class="faqItem <?= $fIdx === 0 ? 'open' : '' ?>">
                    <button class="faqQuestion" type="button">
                        <span><?= e($item['question']) ?></span>
                        <span class="faqToggleIcon">+</span>
                    </button>
                    <div class="faqAnswer">
                        <?= e($item['answer']) ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="sourceBox" id="sources-section">
        <h2>Sources & verification</h2>

        <?php if (!empty($article['sources'])): ?>
            <ul>
                <?php foreach ($article['sources'] as $source): ?>
                    <li>
                        <a href="<?= e($source['url']) ?>" target="_blank" rel="noopener noreferrer">
                            <?= e($source['label']) ?> ↗
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No final official specification linked yet. Keep this article marked as expected until verified.</p>
        <?php endif; ?>
    </div>

    <p class="disclaimer">
        GCC Tour is an independent information website and does not issue visas.
        Always verify final requirements with official authorities before travel.
    </p>

    <?php render_related_articles($slug, $articles, $status_labels, 3); ?>
</article>

<?php require __DIR__ . '/includes/footer.php'; ?>
