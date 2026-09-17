<?php
include DIR_COMPONENTS.'ContentFeature.php';
?>
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-4">
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <h2 class="fw-semibold text-dark mb-2">Fitur Lengkap <span class="text-primary">Websitesekolah.co.id</span></h2>
            <div class="mx-auto rounded" style="width: 80px; height: 3px; background-color: #0d6efd;"></div>
        </div>
        <div class="row g-4 g-lg-5" data-aos="fade-up">
            <!-- TAB MENU -->
            <div class="col-lg-3">
                <div class="feature-menu nav flex-column" role="tablist">
                    <button class="feature-item active" data-bs-toggle="pill" data-bs-target="#feature-1" role="tab">
                        <span class="feature-icon"><i class="bi bi-person-badge"></i></span>
                        <span class="fw-semibold">Profile dan Informasi</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-2" role="tab">
                        <span class="feature-icon"><i class="bi bi-newspaper"></i></span>
                        <span class="fw-semibold">Berita dan Konten</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-3" role="tab">
                        <span class="feature-icon"><i class="bi bi-chat-dots"></i></span>
                        <span class="fw-semibold">Komunikasi & Interaksi</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-4" role="tab">
                        <span class="feature-icon"><i class="bi bi-database"></i></span>
                        <span class="fw-semibold">Data Sekolah</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-5" role="tab">
                        <span class="feature-icon"><i class="bi bi-journal-bookmark"></i></span>
                        <span class="fw-semibold">Data Akademik</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-6" role="tab">
                        <span class="feature-icon"><i class="bi bi-graph-up-arrow"></i></span>
                        <span class="fw-semibold">SEO dan Performa</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-7" role="tab">
                        <span class="feature-icon"><i class="bi bi-ui-checks"></i></span>
                        <span class="fw-semibold">SPMB Online</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-8" role="tab">
                        <span class="feature-icon"><i class="bi bi-headset"></i></span>
                        <span class="fw-semibold">PTSP (Layanan Terpadu)</span>
                    </button>
                    <button class="feature-item" data-bs-toggle="pill" data-bs-target="#feature-9" role="tab">
                        <span class="feature-icon"><i class="bi bi-award"></i></span>
                        <span class="fw-semibold">Pengumuman Kelulusan</span>
                    </button>
                </div>
            </div>
            
            <!-- ISI KONTEN -->
            <div class="col-lg-9">
                <div class="tab-content bg-white shadow-sm border border-light rounded-4 p-4 p-lg-5 h-100" id="feature-tabContent">
                    <?php
                    // PROFILE DAN INDORMASI
                    ContentFeature(
                        'feature-1',
                        'website-fitur-profil.webp',
                        'Profile dan Informasi Sekolah',
                        'Sajikan informasi lengkap mengenai profil, visi misi, sejarah, dan fasilitas sekolah Anda kepada masyarakat secara profesional.',
                        ['Halaman Sejarah & Visi Misi', 'Struktur Organisasi', 'Fasilitas Sekolah', 'Akreditasi & Prestasi']
                    );

                    // BERITA DAN KONTEN
                    ContentFeature(
                        'feature-2',
                        'website-fitur-berita.webp',
                        'Berita, Artikel & Galeri',
                        'Sistem manajemen konten terpadu untuk menerbitkan berita terbaru, agenda sekolah, artikel edukasi, dan dokumentasi kegiatan.',
                        ['Berita & Pengumuman', 'Agenda Kegiatan Sekolah', 'Galeri Foto & Video', 'Kategori Berita Dinamis']
                    );

                    // KOMUNIKASI
                    ContentFeature(
                        'feature-3',
                        'website-fitur-komunikasi.webp',
                        'Sistem Komunikasi Terintegrasi',
                        'Jembatani komunikasi antara sekolah, orang tua, dan masyarakat melalui fitur interaktif dan buku tamu digital.',
                        ['Formulir Kontak Langsung', 'Buku Tamu Online', 'Integrasi WhatsApp', 'Tautan Media Sosial']
                    );

                    // DATA SEKOLAH
                    ContentFeature(
                        'feature-4',
                        'website-fitur-data-sekolah.webp',
                        'Manajemen Data Sekolah',
                        'Kelola dan tampilkan data penting seperti direktori guru, staff, dan siswa secara sistematis dan rapi.',
                        ['Direktori Guru & Tenaga Kependidikan', 'Statistik Siswa per Kelas', 'Data Alumni', 'Mudah Di-update']
                    );

                    // DATA AKADEMIK
                    ContentFeature(
                        'feature-5',
                        'website-fitur-akademik.webp',
                        'Pusat Informasi Akademik',
                        'Sajikan informasi seputar kegiatan akademik yang sedang berjalan agar mudah diakses oleh siswa dan wali murid.',
                        ['Kalender Akademik', 'Jadwal Mata Pelajaran', 'Daftar Ekstrakurikuler', 'Materi E-Learning Dasar']
                    );

                    // SEO PERFORM
                    ContentFeature(
                        'feature-6',
                        'website-fitur-seo.webp',
                        'Optimasi SEO & Performa Cepat',
                        'Website dirancang agar ramah mesin pencari (SEO Friendly) dan memiliki kecepatan akses tinggi untuk kenyamanan pengunjung.',
                        ['URL Ramah SEO', 'Meta Tags Otomatis', 'Optimasi Gambar (WebP)', 'Kecepatan Akses Tinggi']
                    );

                    // SPMB
                    ContentFeature(
                        'feature-7',
                        'website-fitur-spmb.webp',
                        'Sistem Penerimaan Siswa Baru (SPMB)',
                        'Modul pendaftaran siswa baru secara online yang lengkap, memudahkan panitia dalam mengelola data pendaftar.',
                        ['Formulir Pendaftaran Online', 'Upload Dokumen Persyaratan', 'Panel Cetak Kartu Ujian', 'Rekap Data Realtime']
                    );

                    // PTSP
                    ContentFeature(
                        'feature-8',
                        'website-fitur-ptsp.webp',
                        'Pelayanan Terpadu Satu Pintu (PTSP)',
                        'Beri kemudahan bagi siswa, alumni, dan orang tua dalam mengurus administrasi dan legalisir dokumen secara digital.',
                        ['Pengajuan Surat Keterangan', 'Legalisir Ijazah Online', 'Tracking Status Berkas', 'Layanan Pengaduan']
                    );

                    // PENGUMUMAN KELULUSAN
                    ContentFeature(
                        'feature-9',
                        'website-fitur-simpen.webp',
                        'Pengumuman Kelulusan Online',
                        'Sistem pengumuman kelulusan siswa berbasis SKL (Surat Keterangan Lulus) yang aman, cepat, dan transparan.',
                        ['Akses dengan NISN/Password', 'Cetak SKL Mandiri', 'Bebas Antrean di Sekolah', 'Privasi Siswa Terjaga']
                    );
                    ?>
                </div>
            </div>
            
        </div>
     </div>
</section>