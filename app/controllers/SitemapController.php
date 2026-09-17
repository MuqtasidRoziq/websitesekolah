<?php

class SitemapController extends Controller {

    public function index() {
        header("Content-Type: application/xml; charset=utf-8");
        
        $xml = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        // Daftar halaman statis yang penting
        $pages = [
            '' => ['freq' => 'daily', 'priority' => '1.0'],
            'fitur' => ['freq' => 'weekly', 'priority' => '0.8'],
            'blog' => ['freq' => 'daily', 'priority' => '0.8'],
            'bantuan' => ['freq' => 'weekly', 'priority' => '0.7'],
            'pemesanan' => ['freq' => 'weekly', 'priority' => '0.8']
        ];

        foreach ($pages as $path => $meta) {
            $xml .= '<url>';
            $xml .= '<loc>' . URL_DOMAIN . $path . '</loc>';
            $xml .= '<changefreq>' . $meta['freq'] . '</changefreq>';
            $xml .= '<priority>' . $meta['priority'] . '</priority>';
            $xml .= '</url>';
        }

        $xml .= '</urlset>';
        
        echo $xml;
        exit;
    }
}
