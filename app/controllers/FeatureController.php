<?php
class FeatureController extends Controller
{
    public function index()
    {
        $data['seo_override'] = [
            'title' => 'Fitur Unggulan Website Sekolah - websitesekolah.co.id',
            'description' => 'Jelajahi berbagai fitur unggulan dan modul lengkap dari layanan pembuatan website sekolah oleh MySCH.id yang siap memenuhi kebutuhan digitalisasi pendidikan.'
        ];
        $this->view('FeatureService', $data);
    }
}