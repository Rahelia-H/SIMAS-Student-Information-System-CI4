<?= $this->extend("templates/index") ?>

<?= $this->section("content") ?>

<div class="home-page">
    <!-- Rahelia H -->
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col">
                <div class="marquee">
                    <span>
                        <h2 class="cover-heading bold-text">SELAMAT DATANG DI SISTEM INFORMASI MAHASISWA </h2>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Rahelia H -->
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col">
                <img src="<?= base_url('img/Bg2.png') ?>" class="img-fluid" alt="Background Image">
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>