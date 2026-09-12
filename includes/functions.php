<?php

function e(string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function status_badge(string $status, array $status_labels): string {
    $label = $status_labels[$status] ?? ucfirst($status);
    return '<span class="status status-' . e($status) . '">' . e($label) . '</span>';
}

function page_url(string $path = ''): string {
    $base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
    if ($base === '/' || $base === '.') {
        $base = '';
    }

    $path = ltrim($path, '/');

    if ($path === '' || $path === 'index.php' || $path === 'index') {
        return $base === '' ? '/' : $base . '/';
    }

    // Convert legacy query parameter formats to clean paths
    if (preg_match('/^country\.php\?slug=([^&]+)/', $path, $m)) {
        $path = 'countries/' . $m[1];
    } elseif (preg_match('/^article\.php\?slug=([^&]+)/', $path, $m)) {
        $path = 'news/' . $m[1];
    } else {
        // Strip .php extension unless it's a file with another extension (e.g. assets)
        if (substr($path, -4) === '.php') {
            $path = substr($path, 0, -4);
        }
    }

    return $base . '/' . $path;
}

function render_country_card(string $slug, array $country): void {
    ?>
    <a class="countryCard" href="<?= e(page_url('countries/' . urlencode($slug))) ?>">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span class="countryCode"><?= e($country['code']) ?></span>
            <span class="status status-confirmed">Guide</span>
        </div>
        <h3><?= e($country['name']) ?></h3>
        <p><?= e($country['blurb']) ?></p>
        <span class="arrow">Explore Guide <span>→</span></span>
    </a>
    <?php
}

function render_article_card(string $slug, array $article, array $status_labels): void {
    ?>
    <article class="card articleCard">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
            <span class="eyebrow"><?= e($article['category']) ?></span>
            <?= status_badge($article['status'], $status_labels) ?>
        </div>
        <h3>
            <a href="<?= e(page_url('news/' . urlencode($slug))) ?>">
                <?= e($article['title']) ?>
            </a>
        </h3>
        <p><?= e($article['excerpt']) ?></p>
        <div class="articleMeta">
            <time datetime="<?= e($article['date']) ?>">Verified: <?= e($article['last_verified'] ?? $article['date']) ?></time>
        </div>
    </article>
    <?php
}

function render_related_articles(string $current_slug, array $articles, array $status_labels, int $limit = 3): void {
    $count = 0;
    ?>
    <section class="relatedSection">
        <h3>Related GCC Travel & Visa Intelligence</h3>
        <div class="articleGrid">
            <?php foreach ($articles as $slug => $article): ?>
                <?php if ($slug === $current_slug) continue; ?>
                <?php render_article_card($slug, $article, $status_labels); ?>
                <?php $count++; if ($count >= $limit) break; ?>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
}
