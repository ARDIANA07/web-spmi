<?= $this->extend('layout/user'); ?>

<?= $this->section('content'); ?>


<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/userhome">Home</a></li>
                <li class="breadcrumb-item"><a href="/ppeppuser">PPEPP</a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="content">
    <div class="row mt-3">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?php echo session()->getFlashdata('success'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class="alert alert-success" role="alert">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Penetapan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Detail Penetapan</a>
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pelaksanaan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Detail Pelaksanaan</a>
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Evaluasi</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Detail Evaluasi</a>
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Pengendalian</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Detail Pengendalian</a>
                </div>
            </div>
        </div>
        <div class="alert alert-success" role="alert">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Peningkatan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">Detail Peningkatan</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<?= $this->endSection(); ?>