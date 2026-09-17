<?php

class ErrorController extends Controller {

    public function notFound(){
        $data['seo_override'] = [
                'title' => '404 - Halaman Tidak Ditemukan',
                'description' => 'Maaf, halaman yang Anda cari tidak ditemukan.'
            ];
        $this->view('errors/404', $data);
    }
}
