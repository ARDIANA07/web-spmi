<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-10">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tahun</li>
            </ol>
        </nav>
    </div>
</div>
<a href="/tahun/new" class="btn btn-outline-primary">Tambah Tahun</a>
<div class="content">
    <div class="row mt-4">
        <table class="table table-striped w-100" id="productTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tahun</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tahun as $th) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $th['tahun']; ?></td>
                    <td><?= $th['status']; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="/tahun/<?= $th['id']; ?>/edit" class="btn btn-outline-warning mr-2">Edit</a>
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