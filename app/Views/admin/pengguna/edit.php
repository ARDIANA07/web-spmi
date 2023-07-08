<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">


    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

    <title>Web CI4</title>

    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">WEB-SPMI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="container">

        <div class="row mt-3 align-items-center">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" class="bg-light p-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/pengguna">Pengguna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Pengguna</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-10 offset-md-1">
                <form action="/pengguna" method="POST" enctype='multipart/form-data'>
                    <?php csrf_field(); ?>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="name"><i class="bi bi-bag"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Nama Pengguna" aria-label="Nama Pengguna" aria-describedby="namaPengguna" required="true">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="jabatan"><i class="bi bi-cash"></i></span>
                        <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" aria-label="Jabatan" aria-describedby="jabatan" required="true">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productTable').DataTable();
        });
    </script>
</body>

</html>