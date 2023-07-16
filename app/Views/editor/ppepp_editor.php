<?= $this->extend('layout/editor'); ?>

<?= $this->section('content'); ?>


<div class="row mt-3 align-items-center">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="bg-light p-3">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/ppeppeditor">PPEPP</a></li>
            </ol>
        </nav>
    </div>
</div>
<a href="/ppeppeditor/new" class="btn btn-outline-primary">Tambah PPEPP</a>
<div class="content">
    <div class="row mt-4">
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
                    <th>PPEPP</th>
                    <th>Kriteria</th>
                    <th>Standar</th>
                    <th>Ketercapaian</th>
                    <th>File</th>
                    <th>Link</th>
                    <th>Komentar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row) : ?>
                <tr>
                    <td><?= $row->jenis; ?></td>
                    <td><?= $row->kriteria; ?></td>
                    <td><?= $row->standar; ?></td>
                    <td><?= $row->ketercapaian; ?></td>
                    <td><?= $row->file; ?></td>
                    <td><?= $row->link; ?></td>
                    <td><?= $row->komentar; ?></td>
                    <td>
                        <div class="row">
                            <div class="col-auto">
                                <a href="/ppeppedit/<?= $row->id_ppepp_edit; ?>/edit"
                                    class="btn btn-outline-warning mr-2" class="modal" href="#" data-toggle="modal"
                                    data-target="#editModal">Edit</a>
                            </div>
                            <div class="col-auto px-0">
                                <form action="/ppeppedit/<?= $pp['id_ppepp'];  ?>" method="POST">
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
<!-- Edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <form action="/Ppepp" method="POST" enctype='multipart/form-data'>
                        <?php csrf_field(); ?>
                        <div class="form-group">
                            <h2 align="center">Form Edit PPEPP</h2>
                            <hr>
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
                            <input type="text" class="form-control" id="kriteria" placeholder="Kriteria"
                                name="kriteria">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Standar</label>
                            <input type="text" class="form-control" id="standar" placeholder="Standar" name="standar">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button><br>
                    </form>
                </div>
            </div>
        </div>
    </div><br><br>
    <?= $this->endSection(); ?>