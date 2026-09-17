<?php
class BlogController extends Controller{
        public function index(){
        $data['seo_override'] = [
                'title' => 'Layanan Website Sekolah untuk Sekolah di Indonesia - Website Sekolah',
                'description' => 'Ini adalah halaman utama sekolah kami.'
            ];
        $this->view('Blog', $data);
    }
}