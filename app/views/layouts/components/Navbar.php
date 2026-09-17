<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3 mb-5 fixed-top">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand d-flex flex-column align-items-end lh-1 text-decoration-none" href="<?= URL_DOMAIN ?>">
            <img src="<?= URL_ASSETS ?>img/logo_websitesekolah.webp" alt="logo_website_sekolah" width="200" height="36" class="img-fluid">
        </a>

        <!-- TOMBOL HAMBURGER -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#menuUtama">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- DAFTAR MENU -->
        <div class="collapse navbar-collapse" id="menuUtama">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-3 mt-3 mt-lg-0 me-lg-4">

                <li class="nav-item">
                    <a class="nav-link custom-nav-link <?= (isset($view) && $view == 'Homepage') ? 'active-menu' : '' ?>" href="<?= URL_DOMAIN ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link <?= (isset($view) && $view == 'Profile') ? 'active-menu' : '' ?>" href="<?= URL_DOMAIN ?>profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link <?= (isset($view) && ($view == 'FeatureService')) ? 'active-menu' : '' ?>" href="<?= URL_DOMAIN ?>fitur">Fitur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link <?= (isset($view) && strpos($view, 'Blog') !== false) ? 'active-menu' : '' ?>" href="<?= URL_DOMAIN ?>blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custom-nav-link <?= (isset($view) && strpos($view, 'Bantuan') !== false) ? 'active-menu' : '' ?>" href="<?= URL_DOMAIN ?>bantuan">Bantuan</a>
                </li>

            </ul>

            <!-- TOMBOL PESAN LAYANAN -->
            <div class="d-grid d-lg-block mt-4 mt-lg-0 mb-3 mb-lg-0">
                <a href="<?= URL_ORDER ?>" class="btn btn-primary px-4 py-2 fw-medium">
                    Pesan Layanan
                </a>
            </div>
        </div>

    </div>
</nav>