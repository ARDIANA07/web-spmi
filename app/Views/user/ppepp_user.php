<?= $this->extend('layout/user'); ?>

<?= $this->section('content'); ?>

<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/Ppepp">PPEPP</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="row mt-4">
    <div class="col-md-10 offset-md-1">
        <h2 align="center">ISIAN DATA BERIKUT</h2>
        <hr>
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
                    <!-- <option>Penetapan</option>
                        <option>Pelaksanaan</option>
                        <option>Evaluasi</option>
                        <option>Pengendalian</option>
                        <option>Peningkatan</option> -->

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
            <div class="form-group">
                <label for="exampleFormControlInput1">Standar</label>
                <input type="number" class="form-control" id="ketercapaian" placeholder="Isi nilai ketercapaian"
                    name="ketercapaian">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">File</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="file">
                    <label class="custom-file-label" for="customFile">Upload File</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input type="text" class="form-control" id="link" placeholder="Upload Link" name="link">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

<?= $this->endSection(); ?>