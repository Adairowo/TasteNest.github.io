<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">-->
        <link rel="stylesheet" href="css/hover.css">
</head>
<body>

    <div class="d-flex">
        <!-- SIDEBAR -->
        <?php include "./layouts/aside.php" ?>
        <!-- END SIDEBAR -->
        <main class="flex-grow-1" style="background-color: #FFE8B7;">
            <!-- HEADER -->
            <?php include "./layouts/header.php" ?>
            <!-- END HEADER -->
            <!-- ROW STATS -->
        <div class="row mx-4 px-4 my-4">
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6><i class="bi bi-credit-card"></i>&nbsp;&nbsp;INGRESOS MENSUALES</h6>
                        <h6 class="h3">$30,000.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6><i class="bi bi-people"></i>&nbsp;&nbsp;PEDIDOS HECHOS</h6>
                        <h6 class="h3">52</h6>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6><i class="bi bi-egg-fried"></i>&nbsp;&nbsp;MENUS ARCHIVADOS</h6>
                        <h6 class="h3">56</h6>
                    </div>
                    </div>
                </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h6><i class="bi bi-credit-card"></i>&nbsp;&nbsp;USUARIOS REGISTRADOS</h6>
                        <h6 class="h3">$3,200.00</h6>
                    </div>
                </div>
            </div>
        </div>
            <!-- END ROW STATS -->
            <!-- CHARTS -->
        <div class="row mx-4 px-4 my-4">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">INGRESOS MENSUALES</div>
                        <div class="card-body">
                            <canvas id="chartIngresos"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">PEDIDOS HECHOS</div>
                        <div class="card-body">
                            <canvas id="chartDietas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CHARTS -->
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./js/index.js"></script>
</body>
</html>