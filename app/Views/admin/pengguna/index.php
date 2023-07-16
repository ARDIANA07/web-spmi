<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<link rel="stylesheet" href="../css/style.css">


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
<a href="/pengguna/new" class="btn btn-outline-primary">Tambah Pengguna</a>

<div class="content">
    <div class="row mt-4">
        <div class="card-body table-responsive">
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
                                        <a href="/pengguna/<?= $p['id_pengguna']; ?>/edit" class="btn btn-outline-warning mr-2" class="modal" href="#" data-toggle="modal" data-target="#editModal">Edit</a>
                                    </div>
                                    <div class="col-auto px-0">
                                        <form action="/pengguna/<?= $p['id_pengguna']; ?>" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger" onclick="confirm('Apakah kamu yakin akan menghapus data ini ?')">Delete</button>
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
</div>

<!-- Edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <form action="/pengguna" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <h2 align="center">Form Edit Pengguna</h2>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="name"><i class="bi bi-bag"></i></span>
                            <input type="text" name="name" class="form-control" placeholder="Nama Pengguna" aria-label="Nama Pengguna" aria-describedby="namaPengguna" required="true">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" aria-label="Jabatan" aria-describedby="jabatan" required="true">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
    <?= $this->endSection(); ?>