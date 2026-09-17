<?php
function ContentFeature($id, $img, $title, $desc, $list)
{
?>
    <div class="tab-pane fade <?= $id === 'feature-1' ? 'show active' : '' ?>" id="<?= $id ?>" role="tabpanel">
        <div class="row align-items-center g-4 g-lg-5">
            <!-- GAMBAR -->
            <div class="col-lg-7 text-center">
                <img 
                    src="<?= URL_ASSETS ?>img/feature/<?= $img ?>" 
                    class="img-fluid" 
                    style="max-height: 380px; object-fit: contain; filter: drop-shadow(0 10px 15px rgba(0,0,0,0.05));" 
                    alt="<?= htmlspecialchars($title) ?>">
            </div>
            
            <!-- DESKRIPSI -->
            <div class="col-lg-5 text-start">
                <h3 class="fw-semibold text-dark mb-3">
                    <?= htmlspecialchars($title) ?>
                </h3>
                <p class="text-muted mb-4">
                    <?= htmlspecialchars($desc) ?>
                </p>
                
                <?php if (!empty($list)): ?>
                    <ul class="list-unstyled mb-5">
                        <?php foreach ($list as $item): ?>
                            <li class="mb-3 d-flex align-items-center text-dark">
                                <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px;">
                                    <i class="bi bi-check-lg fs-5"></i>
                                </div>
                                <span class="fw-medium"><?= htmlspecialchars($item) ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                
                <a href="<?= URL_ORDER ?>" class="btn btn-primary rounded-pill" style="transition: transform 0.3s ease;">
                    Pesan Sekarang <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
<?php
}
?>