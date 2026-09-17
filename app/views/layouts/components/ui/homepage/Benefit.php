<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container py-4">
        <div class="text-center mb-4 pb-4" data-aos="fade-up">
            <h2 class="fw-semibold text-dark mb-2">
                Manfaat Menggunakan <span class="text-primary">Websitesekolah.co.id</span>
            </h2>
            <div class="mx-auto rounded bg-primary" style="width: 80px; height: 2px;"></div>
        </div>
        <div class="row g-3" data-aos="fade-up">
            <div class="col-lg-4">
                <div class="text-center">
                    <img src="<?= URL_ASSETS ?>img/guru&ortu.webp" alt="guru dan orang tua" class="img-fluid" width="80%">
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="fs-4 fw-semibold mb-2">Bagi Orang Tua/Wali</h3>
                        <ul class="list-unstyled text-secondary">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Tau Jadwal dan Kalender Akademik.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Akses Pengumuman Sekolah Lebih Cepat.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Isi Formulir dan Pendaftaran Online
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center">
                    <img src="<?= URL_ASSETS ?>img/guru-staf.webp" alt="guru dan orang tua" class="img-fluid" width="80%">
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="fs-4 fw-semibold mb-2">Bagi Guru/Staf</h3>
                        <ul class="list-unstyled text-secondary">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Publish Profil & Kompetensi Guru.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Bisa Publikasi Artikel dan Karya.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Media Berbagi Informasi Kepada Guru.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="text-center">
                    <img src="<?= URL_ASSETS ?>img/spmb-kepsek.webp" alt="guru dan orang tua" class="img-fluid" width="80%">
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="fs-4 fw-semibold mb-2">Bagi Kepala Sekolah</h3>
                        <ul class="list-unstyled text-secondary">
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Meningkatnya Identitas Brand Sekolah.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Media Publikasi Prestasi dan Program.
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                Mendukung Akreditasi dan Pelaporan.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="text-center g-3">
                <?php
                Button([
                    'url' => URL_WHATSAPP,
                    'color' => 'bg-success',
                    'text' => 'Konsultasi Gratis',
                    'icon' => 'bi bi-whatsapp',
                    'icon_position' => 'left',
                ]);
                Button([
                    'url' => URL_ORDER,
                    'color' => 'bg-primary',
                    'text' => 'Pesan Sekarang',
                    'icon' => 'bi bi-arrow-right',
                    'icon_position' => 'right',
                ]);
                ?>
            </div>
        </div>
    </div>
</section>