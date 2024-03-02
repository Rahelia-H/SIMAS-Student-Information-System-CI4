<?= $this->extend("templates/index") ?>

<?= $this->section("content") ?>

<link rel="stylesheet" href="/css/style.css">
<!-- Rahelia H -->
<div class="utama-page">

    <div class="container mt-4 ">
        <!-- TITLE -->
        <div class="row text-center">
            <div class="col">
                <h1 class="cover-heading bold-text">
                    Student List
                </h1>
            </div>
        </div>
        <!--END TITLE  -->

        <br>
        <!-- CREATE DATA -->
        <div class="create-page">
            <div class="row">
                <div class="col">
                    <a href="<?= base_url('mahasiswa/create/') ?>" class="btn btn-custom">Add Student Data</a>
                </div>
            </div>
        </div>
        <!-- END CREATE DATA -->

        <!-- SEARCH DATA -->
        <div class="row my-3">
            <div class="col-md-5">
                <form action="<?= base_url('mahasiswa') ?>" method="POST">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search NIM / Name" name="keyword" value="<?= isset($keyword) ? $keyword : '' ?>">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <!--  END SEARCH DATA -->

        <!-- NOTIFICATION -->
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="row my-2">
                <div class="col-4">
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            </div>
        <?php endif ?>
        <!-- NOTIFICATION -->

        <!-- TABLE DATA -->
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">NAME</th>
                            <th scope="col">STUDY PROGRAM</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $page = isset($_GET['page_mahasiswa']) ? $_GET['page_mahasiswa'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        ?>
                        <!-- Rahelia H -->
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $mhs['nim'] ?></td>
                                <td><?= $mhs['nama'] ?></td>
                                <td><?= $mhs['prodi'] ?></td>
                                <td class="d-flex">
                                    <a href="<?= base_url('/mahasiswa/' . $mhs['nim']) ?>" class="btn btn-detail">Details</a>
                                    <a href="<?= base_url('/mahasiswa/edit/' . $mhs['nim']) ?>" class="btn btn-edit mx-2">Edit</a>
                                    <form action="<?= base_url('/mahasiswa/' . $mhs['nim']) ?>" method="POST">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-hapus" onclick="return confirm('Apakah Ingin Menghapus Data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END TABLE DATA -->

        <!-- IF DATA NOT-FOUND NOTIF -->
        <?php if (empty($mahasiswa)) : ?>
            <div class="row text-center">
                <div class="col">
                    <h3 class="display-6">Data Tidak Ditemukan!</h3>
                </div>
            </div>
        <?php endif; ?>

        <?php if ($pager) : ?>
            <div class="row">
                <div class="col">
                    <?= $pager->links('mahasiswa', 'my_pagination') ?>
                </div>
            </div>
        <?php endif; ?>
        <!-- END DATA FOUND NOTIF -->

    </div>
</div>

<?= $this->endSection() ?>