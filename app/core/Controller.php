<?php
class Controller {
    // SEO Default untuk halaman statis
    protected $seo = [
        'title' => 'Website Sekolah - Mendidik Generasi Bangsa',
        'description' => 'Selamat datang di website resmi sekolah kami. Dapatkan informasi pendaftaran dan berita terkini.',
        'keywords' => 'sekolah, pendidikan, ppdb',
    ];

    public function view($view, $data = []) {
        $content_page = DIR_PAGES.$view.'.php';

        // Timpa SEO default jika ada pengaturan khusus dari Controller anak
        if (isset($data['seo_override'])) {
            $data['seo'] = array_merge($this->seo, $data['seo_override']);
        } else {
            $data['seo'] = $this->seo;
        }

        if (file_exists($content_page)) {
            require_once DIR_LAYOUTS.'Base.php';
        } else {
            die("View <b>{$view}.php</b> tidak ditemukan!");
        }
    }

    public function model($model) {
        if (file_exists(DIR_MODELS.$model.'.php')) {
            require_once DIR_MODELS.$model.'.php';
            return new $model();
        } else {
            die("Model <b>{$model}</b> tidak ditemukan!");
        }
    }
}