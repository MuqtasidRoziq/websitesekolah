<?php
include DIR_COMPONENTS . 'Meta.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="id-ID">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Google+Sans+Flex:opsz,wght@6..144,1..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- AOS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- SWIPER CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- CUSTOM CSS -->
    <link href="<?= URL_ASSETS ?>css/style.css" rel="stylesheet">

    <!-- META SEO -->
    <title><?= htmlspecialchars($title) ?></title>
    <meta name="title" content="<?= htmlspecialchars($title) ?>" />
    <meta name="description" content="<?= htmlspecialchars($desc) ?>" />
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?= htmlspecialchars($keys) ?>" />
    <meta name="copyright" content="mysch.id" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="geo.country" content="id" />
    <meta name="content-language" content="id" />
    <link rel="icon" href="<?= URL_ASSETS ?>img/favicon.webp">

    <!-- CANONICAL -->
    <link rel="canonical" href="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>">

    <!-- CUSTOM SEO -->
    <?= $customseo ?>

    <!-- Open Graph -->
    <meta property="og:title" content="<?= htmlspecialchars($title) ?>" />
    <meta property="og:description" content="<?= htmlspecialchars($desc) ?>" />
    <meta property="og:type" content="<?= $is_blog ?>" />
    <meta property="og:url" content="<?= htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:image" content="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" />
    <meta property="og:site_name" content="mysch.id" />
    <meta property="og:locale" content="id_ID" />

    <!-- Facebook App -->
    <meta property="fb:app_id" content="572062400755133" />
    <meta property="fb:admins" content="100010506788722" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= htmlspecialchars($title) ?>" />
    <meta name="twitter:description" content="<?= htmlspecialchars($desc) ?>" />
    <meta name="twitter:image" content="<?= htmlspecialchars($image, ENT_QUOTES, 'UTF-8') ?>" />
    <meta name="twitter:site" content="@mysch_id" />

    <!-- Google tag -->
    <?php
    /** 
     * @var string $view 
     */
    if ($view === 'Homepage'):
    ?>
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17025325045"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'AW-17025325045');
        </script>
    <?php endif; ?>
</head>

<body>
    <!-- HEADER -->
    <header class="py-3 mb-5">
        <?php
        include DIR_COMPONENTS . 'Navbar.php';
        ?>
    </header>

    <!-- CONTENT -->
    <main id="main">
        <?php
        /** 
         * @var string $content_page => $content_page di ambil dari app/core/Controller.php karena disitu langsng menampilkan view
         */
        include $content_page;
        include DIR_COMPONENTS.'Cta.php';
        ?>
    </main>

    <!-- FOOTER -->
    <footer class="text-dark pt-5 pb-4 position-relative overflow-hidden" style="background-color: #f8f9fc; border-top: 1px solid #e2e8f0;">
        <?php
        include DIR_COMPONENTS . 'Footer.php';
        ?>
    </footer>

    <!-- SCRIPT BOOTSTRAPS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- SCRIPT AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>

    <!-- SCRIPT SWIPER -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- CUSTOM SCRIPT -->
    <script src="<?= URL_ASSETS ?>js/main.js"></script>

    <?php include DIR_COMPONENTS . 'Wa-floating.php'; ?>
</body>

</html>