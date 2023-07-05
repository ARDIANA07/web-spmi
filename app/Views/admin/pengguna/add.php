<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Pengguna</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 offset-md-1">
        <form action="/pengguna" method="POST" enctype='multipart/form-data'>
            <?php csrf_field(); ?>
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

<?= $this->endSection(); ?>