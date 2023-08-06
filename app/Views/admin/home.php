<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="../css/style.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.2/chart.min.js" integrity="sha512-csUso5vWY3PpIJkxLWFbPI7KkjXFhKXpUaAUp1ZLyNhxVWdQacEPH9e7Iw6Rco4es1uQNnlxdCCFkSnJ/f1ZzA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
        <h1>Dashboard</h1>

        <div>
            <canvas id="grafikPenjualan" width="100" height="50"></canvas>
        </div>

        <script>
            // Ambil data dari PHP untuk dijadikan data grafik
            var dataGrafik = <?= json_encode($dataGrafik) ?>;

            // Buat grafik menggunakan Chart.js
            var ctx = document.getElementById('grafikPenjualan').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dataGrafik.labels,
                    datasets: [{
                        label: 'Penjualan',
                        data: dataGrafik.data,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</div>

<?= $this->endSection(); ?>