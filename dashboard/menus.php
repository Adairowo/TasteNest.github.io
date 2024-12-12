<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- En el <head> de tu página -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Menus Dashboard</title>
    <style>
          @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Montserrat", sans-serif;
}
        </style>
</head>
<body>
    <div class="d-flex">
        <!-- SIDEBAR -->
        <?php include "../layouts/aside.php" ?>
        <!-- END SIDEBAR -->
        <main class="flex-grow-1 bg-light">
            <!-- HEADER -->
            <?php include "../layouts/header.php" ?>
            <!-- END HEADER -->
            <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <button class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#addMenuModal">
                <i class="bi bi-plus-circle-fill"></i> Agregar platillo
              </button>
            </div>
            <!-- Tablita -->
            <div class="container mt-5">
              <h2 class="text-center fs-3">Lista de platillos a ofrecer</h2>
              <div>
              <?php include '../tables/menu_table.php'; ?>
              </div>
            </div>
        </main>
    </div>
    <?php include '../modales/addMenuModal.php'; 
          include '../modales/deleteMenuModal.php';
          include '../modales/editMenuModal.php';
          include '../modales/viewMenuModal.php';
?>
</body>
</html>