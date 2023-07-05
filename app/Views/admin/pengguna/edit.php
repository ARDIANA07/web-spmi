<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-10">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
            </ol>
        </nav>
    </div>
</div>
<div class="content">
    <div class="row mt-4">
        <div class="col-md-10 offset-md-1">
            <form action="/pengguna/<?= $pengguna['id_pengguna']; ?>" method="POST" enctype='multipart/form-data'>
                <?php csrf_field() ?>
                <input type="hidden" name="_method" value="PUT">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="penggunaName"><i class="bi bi-bag"></i></span>
                    <input type="text" name="name" class="form-control" value="<?= $pengguna['name']; ?>" aria-label="pengguna Name" aria-describedby="penggunaName" required="true">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                    <input type="text" name="price" class="form-control" value="<?= $pengguna['jabatan']; ?>" aria-label="jabatan" aria-describedby="jabatan" required="true">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>