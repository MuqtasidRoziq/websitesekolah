<?php
// 1. Ekstrak Data SEO dasar dari Controller
$title = $data['seo']['title'] ?? 'Mitra SPMB';
$desc  = $data['seo']['description'] ?? '';
$keys  = $data['seo']['keywords'] ?? '';
$customseo = $data['seo']['customseo'] ?? '';

if (!empty($data['seo']['canonical'])) {
    $canonical_url = $data['seo']['canonical'];
} 
else {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
    $canonical_url = $protocol . "://" . $_SERVER['HTTP_HOST'] . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}

$is_blog = isset($data['is_blog']) ? 'blog' : 'website';

$image = !empty($data['seo']['image']) ? $data['seo']['image'] : URL_ASSETS.'img/og_image.webp';
?>