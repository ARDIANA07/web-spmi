<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
            </ol>
        </nav>
    </div>
</div>
<a href="/profile/new" class="btn btn-outline-primary">Tambah Tahun</a>
<div class="content">
    <div class="row mt-4">
        <table class="table table-striped w-100" id="productTable">
            <thead>
                <tr>
                    <th>Prodi</th>
                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($profile as $pp) : ?>
                <tr>
                    <td><?= $pp['prodi']; ?></td>
                    <td><?= $pp['visi']; ?></td>
                    <td><?= $pp['misi']; ?></td>
                    <td><?= $pp['tujuan']; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="/tahun/<?= $pp['id']; ?>/edit" class="btn btn-outline-warning mr-2">Edit</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>