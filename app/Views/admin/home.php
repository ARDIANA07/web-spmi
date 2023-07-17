<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="../css/style.css">

<div class="row mt-3">
    <div class="col-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid">
        <h2 align="left">Tampilan Home Admin</h2>
        <div class="content">
            <div class="flex-container">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias vel, amet similique culpa
                    dignissimos,
                    aliquid itaque fugiat sint iure quo placeat! Recusandae nisi neque voluptatibus non aspernatur.
                    Fuga,
                    optio
                    aspernatur?</p>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>