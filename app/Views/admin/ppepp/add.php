<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/Ppepp">PPEPP</a></li>
                <li class="breadcrumb-item active" aria-current="page">New PPEPP</li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 offset-md-1">
        <form action="/Ppepp" method="POST" enctype='multipart/form-data'>
            <?php csrf_field(); ?>
            <div class="form-group">
                <label for="exampleFormControlSelect1">PPEPP</label>
                <select class="form-control" id="ppepp" name="jenis">
                    <option>Penetapan</option>
                    <option>Pelaksanaan</option>
                    <option>Evaluasi</option>
                    <option>Pengendalian</option>
                    <option>Peningkatan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Kriteria</label>
                <input type="text" class="form-control" id="kriteria" placeholder="Kriteria" name="kriteria">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Standar</label>
                <input type="text" class="form-control" id="standar" placeholder="Standar" name="standar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>