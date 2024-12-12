<?php
session_start();

if (!isset($_SESSION['username'])) {
    echo '
    <script>
        alert("Por favor debes iniciar sesión");
        window.location= "login.php";
    </script>
    ';
    session_destroy();
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylepedidos.css">
    <title>TasteNest Pedidos</title>
</head>
<header>
  <!-- NavBar-->
  <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: transparent;">
    <div class="container">
      <!--Logo-->
      <a class="navbar-brand fs-2 fw-semibold" style="color:#fa9f42 ;" href="#">TasteNest</a>
      <!--Toggle-->
      <button
       class="navbar-toggler shadow-none border-0"
        type="button" 
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar"
        >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--Sidebar-->
      <div 
        class="sidebar offcanvas offcanvas-start"
        tabindex="-1"
        id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel">
        <!--Sidebar header-->
        <div class="offcanvas-header text-white shadow-none">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">TasteNest</h5>
          <button type="button"
           class="btn-close btn-close-white"
            data-bs-dismiss="offcanvas"
             aria-label="Close">
          </button>
        </div>
        <!--Sidebar body-->
        <div class="offcanvas-body d-flex flex-column p-3">
          <ul
           class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="#">TasteNests</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="about">Haz tu TasteNest</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="about">TasteNest agendados</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="about">Mi perfil </a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="dashboard/admin.php">Dashboard</a>
            </li>
            <li class="nav-item mx-2">
              <a class="btn btn-danger" href="php/log_out.php">Cerrar Sesion</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <!-- NavBar Termina-->
     <!-- Carousel -->
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner" style="height: 50vh;">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="img/slider.jpg" class="d-block w-100" alt="Image 1" style="height: 50vh; object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/slider2.jpg" class="d-block w-100" alt="Image 2" style="height: 50vh; object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/slider3.jpg" class="d-block w-100" alt="Image 3" style="height: 50vh; object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/slider4.jpg" class="d-block w-100" alt="Image 4" style="height: 50vh; object-fit: cover;">
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <img src="img/slider5.jpg" class="d-block w-100" alt="Image 5" style="height: 50vh; object-fit: cover;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</header>
  <main>
    <section class="p20" style="">
      <h2 class="fw-semibold">
        Realiza tu Pedido
      </h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2023/08/08/08/46/tacos-8176774_640.jpg" alt="" class="">
              <div class="card-body">
                <h5 class="card-title">Tacos</h5>
                <p class="card-text">Precio:50$</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2017/03/23/19/57/asparagus-2169305_640.jpg" alt="" class="">
              <div class="card-body">
                <h5 class="card-title">Carne deliciosa</h5>
                <p class="card-text">Precio : 100$</p>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
              <img src="https://cdn.pixabay.com/photo/2021/10/30/12/50/woman-6754248_640.jpg" alt="" class="">
              <div class="card-body">
                <h5 class="card-title">Rica comida vegana</h5>
                <p class="card-text">Precio: 200$</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</html>   
