<?php
$clients = [
    ['img' => 'client-smaalazhar15smg.webp', 'name' => 'SMA Al-Azhar 15 Semarang'],
    ['img' => 'client-smaitalhikmah.webp', 'name' => 'SMA IT Al Hikmah'],
    ['img' => 'client-smamgasby.webp', 'name' => 'SMAMGA Surabaya'],
    ['img' => 'client-sman14bekasi.webp', 'name' => 'SMAN 14 Bekasi'],
    ['img' => 'client-sman1dompu.webp', 'name' => 'SMAN 1 Dompu'],
    ['img' => 'client-sman2garut.webp', 'name' => 'SMAN 2 Garut'],
    ['img' => 'client-sman3bdg.webp', 'name' => 'SMAN 3 Bandung'],
    ['img' => 'client-smaplusbinamandiri.webp', 'name' => 'SMA Plus Bina Mandiri'],
    ['img' => 'client-smkn1jambi.webp', 'name' => 'SMKN 1 Jambi'],
    ['img' => 'client-smkpenerbad.webp', 'name' => 'SMK Penerbad'],
    ['img' => 'client-smpn1bantul.webp', 'name' => 'SMPN 1 Bantul'],
    ['img' => 'client-smpn1wamena.webp', 'name' => 'SMPN 1 Wamena'],
    ['img' => 'client-smpn3bandaaceh.webp', 'name' => 'SMPN 3 Banda Aceh'],
];
// Duplicate for seamless infinite scroll
$display_clients = array_merge($clients, $clients);
?>

<section class="py-5 overflow-hidden">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-semibold text-dark mb-2">
                Pengguna <span class="text-primary">Websitesekolah.co.id</span>
            </h2>
            <div class="mx-auto rounded bg-primary" style="width: 80px; height: 2px;"></div>
        </div>
        
        <div class="row">
            <div class="col-12 px-0">
                <div class="client-marquee">
                    <div class="client-marquee-track">
                        <?php foreach ($display_clients as $client): ?>
                            <div class="client-item">
                                <img src="<?= URL_ASSETS; ?>img/clients/<?= $client['img']; ?>" alt="<?= $client['name']; ?>" title="<?= $client['name']; ?>">
                                <p class="client-name"><?= $client['name']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>