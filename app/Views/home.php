<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Online Store</title>
</head>

<body class="container" align="center">
    <h1>Welcome to Online Products</h1>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url('home/add') ?>'"
            style="background-color: blue;">
            Tambah Data
        </button>
    </p>
    <table class="table" align="center">

        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga Produk</th>
                <th>Deskripsi </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($products as $product) :
                $no++;
            ?>
            <tr>
                <th><?= $no; ?></th>
                <td><?= $product->name; ?></td>
                <td><?= $product->price; ?></td>
                <td><?= $product->description; ?></td>
                <td>
                    <a href="<?php echo site_url('edit') ?>'" class="edit-button"><i class="fas fa-edit"></i></a>
                    <button type="button" onclick="hapus('<?= $product->id ?>')" class="delete-button"><i
                            class="fas fa-trash-alt"></i>></button>

                </td>
            </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
    <script>
    function hapus() {
        pesan = confirm('Yakin data akan dihapus ?');
        if (pesan) {
            window.location.href = ("<?= site_url('home/delete') ?>");
        } else return false;
    }
    </script>
</body>


</head>



</html>