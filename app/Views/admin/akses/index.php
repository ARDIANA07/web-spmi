<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/akses">Hak Akses</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="content">
    <div class="row mt-4">
        <table class="table table-striped w-100" id="productTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Jabatan</th>
                    <th>Akses</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($results as $row) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $row->jabatan; ?></td>
                    <td><?= $row->akses; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="akses/<?= $row->id_hak_akses; ?>"
                                    class="btn btn-outline-success mr-2">Detail</a>
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