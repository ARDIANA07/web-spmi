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
<a href="/Ppepp/new" class="btn btn-outline-primary">Tambah PPEPP</a>
<div class="content">
    <div class="row mt-4">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
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
                <?php foreach ($tb_ppepp as $pp) : ?>
                    <tr>
                        <td><?= $pp['jenis']; ?></td>
                        <td><?= $pp['kriteria']; ?></td>
                        <td><?= $pp['standar']; ?></td>
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