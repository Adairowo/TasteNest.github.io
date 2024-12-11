<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js /latest/toastr.min.js"></script>
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
              <button class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#addUserModal">
                <i class="bi bi-plus-circle-fill"></i> Agregar Usuario
              </button>
            </div>
            <!-- Tabla de usuarios -->
            <div class="container mt-5">
              <h2 class="text-center fs-3">Tabla de usuarios</h2>
              <div>
              <?php include '../tables/user_table.php'; ?>
              </div>
            </div>
    </div>    
</main>
<?php include '../modales/addUserModal.php'; 
      include '../modales/deleteUserModal.php';
      include '../modales/editUserModal.php';

?>
<script src="../js/addUser.js"></script>
</body>
</html>`