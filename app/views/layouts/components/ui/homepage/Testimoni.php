<?php
$testimonies = [
    [
        'name' => 'Rio Harmingto',
        'school' => 'smknegeri1kualakapuas.sch.id',
        'image' => 'smknegeri1kualakapuas.sch.id.webp',
        'quote' => '"Layanan MySCH.id benar-benar efisien. Saya dapat memantau status pendaftaran anak saya secara real-time tanpa harus datang ke sekolah. Semua informasi diperoleh secara cepat dan akurat."'
    ],
    [
        'name' => 'Eko Setia Budi',
        'school' => 'sdasbc.sch.id',
        'image' => 'sdasbc.sch.id.webp',
        'quote' => '"Layanan MySCH.id adalah solusi modern untuk pendaftaran sekolah. Pengalaman saya menggunakan layanan ini sangat memuaskan, mulai dari pengisian data hingga pengumuman hasil seleksi. Semuanya berjalan lancar dan tanpa hambatan."'
    ],
    [
        'name' => 'Yadi Rahadian',
        'school' => 'sman1bungursari.sch.id',
        'image' => 'sman1bungrusari.sch.id.webp',
        'quote' => '"Layanan MySCH.id sangat memudahkan proses pendaftaran. Semua bisa dilakukan secara online tanpa harus mengantri di sekolah. Prosesnya cepat, mudah, dan transparan!"'
    ]
];

// Duplicate for swiper loop fixing
$display_testimonies = array_merge($testimonies, $testimonies);
?>

<section class="py-5 bg-light overflow-hidden">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-semibold text-dark mb-4">
                Apa Kata Pelanggan Tentang <span class="text-primary">Websitesekolah.co.id</span>
                <div class="mx-auto rounded bg-primary" style="width: 80px; height: 2px;"></div>
            </h2>
        </div>
        
        <div class="position-relative">
            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($display_testimonies as $testi): ?>
                    <div class="swiper-slide">
                        <div class="card border-0 shadow-sm p-4 rounded-4 text-center">
                            <div class="card-body p-0">
                                <img src="<?= URL_ASSETS; ?>img/testimoni/<?= $testi['image']; ?>" alt="<?= $testi['name']; ?>" class="mb-3" style="width: 70px; height: 70px; object-fit: contain; margin: 0 auto;">
                                <h3 class="mb-1 fw-bold text-dark" style="font-size: 1.15rem;"><?= $testi['name']; ?></h3>
                                <small class="text-muted d-block mb-3" style="font-size: 0.9rem;"><?= $testi['school']; ?></small>
                                <p class="card-text text-secondary mb-0" style="line-height: 1.7; font-size: 0.95rem;"><?= $testi['quote']; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <!-- Navigation buttons -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>