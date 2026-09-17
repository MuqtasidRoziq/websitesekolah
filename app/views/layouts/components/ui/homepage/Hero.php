<section class="position-relative overflow-hidden min-vh-100 d-flex align-items-center" style="background-color: #f8f9fa;">
    <!-- SVG Pattern Background (Tipis) -->
    <div class="position-absolute top-0 start-0 w-100 h-100" 
         style="z-index: 0; opacity: 0.6; 
                background-image: url('data:image/svg+xml,%3Csvg width=\'24\' height=\'24\' viewBox=\'0 0 24 24\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Ccircle cx=\'2\' cy=\'2\' r=\'2\' fill=\'%230d6efd\' fill-opacity=\'0.15\'/%3E%3C/svg%3E');">
    </div>
    
    <!-- Gradient Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="z-index: 0; background: linear-gradient(180deg, rgba(248,249,250,0) 0%, rgba(248,249,250,1) 100%);"></div>

    <div class="container position-relative" style="z-index: 1;">
        <div class="row d-flex align-items-center g-5" data-aos="fade-up">

            <!-- Kolom Kiri -->
            <div class="col-lg-6">
                <div class="pe-lg-4">
                    <h1 class="fw-bold fs-2 mb-4 text-dark">
                        Saatnya Miliki <span class="text-primary">Website Sekolah</span> Resmi yang Profesional, Mudah Dikelola & Terintegrasi
                    </h1>

                    <p class="text-secondary mb-4 ">
                       Jadikan sekolah Anda lebih dikenal luas dengan website yang rapi dan menarik. 
                       Tidak perlu pusing memikirkan cara mengurusnya, karena kami buatkan khusus agar 
                       Bapak/Ibu guru bisa memperbarui informasinya dengan sangat mudah. 
                       Ini saatnya sekolah kita tampil lebih maju!
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <?php
                        Button([
                            'url' => URL_WHATSAPP,
                            'color'=> 'bg-success',
                            'text' => 'Konsultasi Gratis',
                            'icon'=> 'bi bi-whatsapp',
                            'icon_position'=> 'left',
                        ]);
                        ?>
                        <a href="#" class="btn btn-primary rounded-5 px-4 py-2 shadow-sm">
                            Lihat Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="col-lg-6 text-center text-lg-end position-relative">
                <div class="position-absolute top-50 start-50 translate-middle w-100 h-100" style="z-index: 0;">
                    <div class="bg-primary rounded-circle mx-auto ms-lg-auto" style="width: 70%; height: 70%; opacity: 0.08; filter: blur(40px);"></div>
                </div>
                
                <img
                    src="<?= URL_ASSETS ?>img/hero_1.webp"
                    alt="Ilustrasi website sekolah MySCH.id"
                    class="img-fluid position-relative ms-lg-auto d-inline-block"
                    style="max-width: 90%; z-index: 2;"
                    loading="lazy"
                >
            </div>

        </div>
    </div>
</section>