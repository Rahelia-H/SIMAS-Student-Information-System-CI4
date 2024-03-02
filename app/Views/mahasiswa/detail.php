<?php

use App\Database\Migrations\Mahasiswa; ?>

<?= $this->extend('templates/index') ?>

<?= $this->section('content'); ?>

<div class="detail-page">
    <!-- Rahelia H -->
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1 class="cover-heading bold-text">
                    Student Details
                </h1>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-md-5">
                <img src="<?= base_url('img/' . $mahasiswa['foto']) ?>" alt="" width="200" height="200" class="img-thumbnail">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!-- Card detail -->
                <div class="card">
                    <div class=" card-body">
                        <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    </div>
                    <?php
                    // Menentukan lebar maksimum label berdasarkan teks terpanjang
                    $label_widths = [
                        'NIM' => strlen('NIM'),
                        'Program Studi' => strlen('Program Studi'),
                        'Alamat' => strlen('Alamat'),
                        'No HP' => strlen('No HP')
                    ];
                    $max_label_width = max($label_widths) * 10; // Mengalikan dengan faktor untuk memberikan sedikit ruang tambahan
                    ?>

                    <ul class="list-group list-group-flush">
                        <!-- Rahelia H -->
                        <li class="list-group-item"><span style="display: inline-block; width: <?= $max_label_width ?>px;">NIM </span>: <?= $mahasiswa['nim']; ?></li>
                        <li class="list-group-item"><span style="display: inline-block; width: <?= $max_label_width ?>px;">Program Studi </span>: <?= $mahasiswa['prodi']; ?></li>
                        <li class="list-group-item"><span style="display: inline-block; width: <?= $max_label_width ?>px;">Alamat </span>: <?= $mahasiswa['alamat']; ?></li>
                        <li class="list-group-item"><span style="display: inline-block; width: <?= $max_label_width ?>px;">No HP </span>: <?= $mahasiswa['no_hp']; ?></li>
                        <!-- Rahelia H -->
                    </ul>
                    <div class="card-body">
                        <a href="<?= base_url('mahasiswa') ?>" class="btn btn-hapus">Kembali</a>
                    </div>
                </div>
                <!-- Akhir card detail -->
            </div>
        </div>
    </div>
    <!-- Rahelia H -->
</div>

<?= $this->endSection() ?>