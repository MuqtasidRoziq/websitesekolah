<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5 pb-3" data-aos="fade-up">
            <h2 class="fw-semibold text-dark mb-2">F.A.Q</h2>
            <div class="mx-auto rounded" style="width: 80px; height: 3px; background-color: #0d6efd;"></div>
        </div>
        <div class="row d-flex justify-content-center" data-aos="fade-up">
            <div class="col-lg-8">
                <div class="accordion accordion-flush" id="accordionFAQ">
                    <?php $no = 1; if(!empty($data['seo_override']['faq'])) foreach ($data['seo_override']['faq'] as $faq): ?>
                        <div class="accordion-item rounded-4 mb-3 overflow-hidden">
                            <h3 class="accordion-header">
                                <?php $id = $no++ ?>
                                <button class="accordion-button collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $id ?>" aria-expanded="false" aria-controls="faq<?= $id ?>">
                                    <?= $faq['question'] ?>
                                </button>
                            </h3>
                            <div id="faq<?= $id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushFAQ">
                                <div class="accordion-body text-muted"><?= $faq['answer'] ?></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>