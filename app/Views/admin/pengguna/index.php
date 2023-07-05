<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-10">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
            </ol>
        </nav>
    </div>
    <!-- <div class="col-md-2 text-end">
        <a href="/product/new" class="btn btn-outline-dark">Tambah Pengguna</a>
    </div> -->
</div>
<a href="/product/new" class="btn btn-outline-primary">Tambah Pengguna</a>
<div class="content">
    <div class="row mt-4">
        <table class="table table-striped w-100" id="productTable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($pengguna as $p) : ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $p['name']; ?></td>
                    <td><?= $p['jabatan']; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="/pengguna/<?= $p['id_pengguna']; ?>/edit"
                                    class="btn btn-outline-warning mr-2">Edit</a>
                            </div>
                            <div class="col-auto px-0">
                                <form action="/pengguna/<?= $p['id_pengguna']; ?>" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-outline-danger"
                                        onclick="confirm('Apakah kamu yakin akan menghapus data ini ?')">Delete</button>
                                </form>
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