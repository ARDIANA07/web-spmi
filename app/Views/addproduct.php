<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Data</title>
</head>

<body>
    <h2>Form Tambah Data</h2>
    <p>
        <button type="button" onclick="window.location='<?php echo site_url() ?>'" style="background-color: blue;">
            Kembali
        </button>
    </p>
    <p>
        <?= form_open('home/simpandata'); ?>
    <form method="post">
        <table class="table">
            <tr>
                <td>Nama Produk: </td>
                <td>
                    <input type="varchar(255)" name="name" autofocus>
                </td>
            </tr>
            <tr>
                <td>Harga Produk: </td>
                <td>
                    <input type="varchar(50)" name="price" autofocus>
                </td>
            </tr>
            <tr>
                <td>Deskripsi: </td>
                <td>
                    <input type="text" name="description" autofocus>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan Dta">
                </td>
            </tr>
        </table>
    </form>
    <?= form_close(); ?>
    </p>
</body>

</html>