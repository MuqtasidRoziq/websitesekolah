<?php
function cardPrice($title, $price, $priceDiscon, $listInclude = [], $listAddOn = [], $listService = [], $isBestSeller = false, $button = [])
{

    $fmtPrice = number_format($price, 0, ',', '.');
    $fmtDiscon = number_format($priceDiscon, 0, ',', '.');
?>
    <div class="card shadow h-100 w-100 border-0 position-relative rounded-3">

        <?php if ($isBestSeller): ?>
            <!-- Pita Terlaris Custom -->
            <div class="ribbon-wrapper">
                <div class="ribbon">TERLARIS</div>
            </div>
        <?php endif; ?>

        <div class="card-body d-flex flex-column p-4">
            <!-- PAKET & HARGA -->
            <div class="text-center mb-4">
                <h5 class="fw-bold mb-3"><?= $title ?></h5>
                <div class="text-decoration-line-through text-secondary fw-semibold small mb-1"><?= $fmtPrice ?></div>
                <div class="d-flex justify-content-center align-items-baseline text-dark">
                    <span class="fw-bold fs-6">Rp.</span>
                    <span class="fw-bold mx-1" style="font-size: 2.2rem;"><?= $fmtDiscon ?></span>
                    <span class="text-secondary small">/ thn</span>
                </div>
            </div>

            <!-- INCLUDE -->
            <?php if (!empty($listInclude)): ?>
                <div class="mt-2">
                    <h6 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 0.75rem;">Include :</h6>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($listInclude as $item): ?>
                            <li class="d-flex align-items-start gap-2 mb-2 text-secondary" style="font-size: 0.85rem;">
                                <svg class="list-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <?= $item ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- ADD ON -->
            <?php if (!empty($listAddOn)): ?>
                <div class="border-top pt-3 mt-3">
                    <h6 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 0.75rem;">Add-On Aplikasi</h6>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($listAddOn as $item): ?>
                            <li class="d-flex align-items-start gap-2 mb-2 text-secondary" style="font-size: 0.85rem;">
                                <svg class="list-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 11 12 14 22 4"></polyline>
                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                </svg>
                                <?= $item ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- SERVICE -->
            <?php if (!empty($listService)): ?>
                <div class="border-top pt-3 mt-3">
                    <h6 class="fw-bold text-uppercase text-dark mb-3" style="font-size: 0.75rem;">Layanan Lain</h6>
                    <ul class="list-unstyled mb-0">
                        <?php foreach ($listService as $item): ?>
                            <li class="d-flex align-items-start gap-2 mb-2 text-secondary" style="font-size: 0.85rem;">
                                <svg class="list-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                                <?= $item ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <!-- BUTTON -->
            <div class="mt-auto pt-4 text-center">
                <div class="row g-2 d-grid">
                    <div class="col">
                        <?php
                        Button([
                            'url' => URL_WHATSAPP,
                            'color' => 'bg-success',
                            'text' => 'Konsultasi Gratis',
                            'icon' => 'bi bi-whatsapp',
                            'icon_position' => 'left',
                        ]);
                        ?>
                    </div>
                    <div class="col">
                        <?php
                        Button($button);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>