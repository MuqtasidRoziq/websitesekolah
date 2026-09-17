<?php

class HomeController extends Controller {

    public function index(){
        $id_product = 1;
        $faqModel = $this->model('FaqModel');
        $faq = $faqModel->getQnaByIdProduct($id_product);
        $data['seo_override'] = [
                'title' => 'Layanan Website Sekolah Terbaik & Profesional',
                'description' => 'Tingkatkan kredibilitas sekolah dengan layanan pembuatan website profesional dari MySCH.id. Solusi modern, mudah dikelola, dan terintegrasi penuh.',
                'faq'=> $faq
            ];
        $this->view('Homepage', $data);
    }
}