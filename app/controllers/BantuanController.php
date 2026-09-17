<?php
class BantuanController extends Controller{
    public function index(){
        $id_product = 1;
        $faqModel = $this->model('FaqModel');
        $faq = $faqModel->getQnaByIdProduct($id_product);
        $data['seo_override'] = [
                'title' => 'Layanan Website Sekolah untuk Sekolah di Indonesia - Website Sekolah',
                'description' => 'Ini adalah halaman utama sekolah kami.',
                'faq' => $faq
            ];
        $this->view('Bantuan', $data);
    }
}