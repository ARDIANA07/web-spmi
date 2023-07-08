<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/tahun">Tahun</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Tahun</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 offset-md-1">
        <form action="/tahun" method="POST" enctype='multipart/form-data'>
            <?php csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tahun</label>
                <select class="form-control" id="tahun" name="tahun">
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                    <option>2024</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Status</label>
                <select class="form-control" id="status" name="status">
                    <option>Aktif</option>
                    <option>No-aktif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>