<?= $this->extend('layout/base'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="../css/style.css">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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
        <div>
            <canvas id="salesChart" width="400" height="200"></canvas>
        </div>

        <script>
            // The PHP variable $salesData should contain the sales data fetched from the controller
            var salesData = <?php echo json_encode($results); ?>;

            // Extract the labels and sales amount from the fetched data
            var labels = salesData.map(entry => entry.product_name);
            var amounts = salesData.map(entry => entry.sales_amount);

            var ctx = document.getElementById('salesChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Sales Amount',
                        data: amounts,
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