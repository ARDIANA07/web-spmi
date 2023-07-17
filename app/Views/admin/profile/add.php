<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item"><a href="/tahun">Profile</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Profile</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 offset-md-1">
        <form action="/profile" method="POST" enctype='multipart/form-data'>
            <?php csrf_field(); ?>
            <div class="input-group mb-3">
                <span class="input-group-text" id="name"><i class="bi bi-bag"></i></span>
                <input type="text" name="prodi" class="form-control" placeholder="Prodi" aria-label="Prodi" aria-describedby="prodi" required="true">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                <input type="text" name="visi" class="form-control" placeholder="Visi" aria-label="Visi" aria-describedby="visi" required="true">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                <input type="text" name="misi" class="form-control" placeholder="Misi" aria-label="Misi" aria-describedby="misi" required="true">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                <input type="text" name="tujuan" class="form-control" placeholder="Tujuan" aria-label="Tujuan" aria-describedby="tujuan" required="true">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>