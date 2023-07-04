<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Contacts Us</title>
</head>

<body class="container" align="center">
    <h1>Contact Us Personal</h1>
    <p>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
            Add Contact
        </button>
    </p>
    <table class="table" align="center">

        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone </th>
                <th>Address </th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 0;
            foreach ($contacts as $contact) :
                $no++;
            ?>
                <tr>
                    <th><?= $no; ?></th>
                    <td><?= $contact->name; ?></td>
                    <td><?= $contact->email; ?></td>
                    <td><?= $contact->phone; ?></td>
                    <td><?= $contact->address; ?></td>
                    <td>
                        <a href="<?php echo site_url('edit') ?>'" class="edit-button"><i class="fas fa-edit"></i></a>
                        <button type="button" onclick="hapus('<?= $product->id ?>')" class="delete-button"><i class="fas fa-trash-alt"></i>></button>

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

    <!-- Add Contact Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('contact') ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Contact Name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Contact Email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Contact Number" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Contact Address" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</head>



</html>