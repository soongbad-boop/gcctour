<?php
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/functions.php';

if (!isset($page_title)) {
    $page_title = $site['name'];
}
if (!isset($page_description)) {
    $page_description = $site['description'];
}
