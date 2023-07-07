<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/ppepp">PPEPP</a></li>
            </ol>
        </nav>
    </div>
</div>
<a href="/ppepp/new" class="btn btn-outline-primary">Tambah PPEPP</a>
<div class="content">
    <div class="row mt-4">
        <table class="table table-striped w-100" id="productTable">
            <thead>
                <tr>
                    <th>PPEPP</th>
                    <th>Kriteria</th>
                    <th>Standar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tb_ppepp as $p) : ?>
                <tr>
                    <td><?= $p['ppepp']; ?></td>
                    <td><?= $p['kriteria']; ?></td>
                    <td><?= $p['standar']; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="/tahun/<?= $p['id']; ?>/edit" class="btn btn-outline-warning mr-2">Edit</a>
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