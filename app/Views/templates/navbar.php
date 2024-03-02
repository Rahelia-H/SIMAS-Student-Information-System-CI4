<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <b>
                    <h4>SIMAS</h4>
                </b>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'Home' ? 'active' : '' ?>" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === 'About' ? 'active' : '' ?>" href="<?= base_url() ?>about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>