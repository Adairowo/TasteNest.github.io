<?php
    session_start();

    if(isset($_SESSION['username'])){
        header("location: pedidos.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link rel="stylesheet" href="css/styleslogin.css" >
    <link rel="stylesheet" href="css\hover.css">
</head>

<body>
    <nav class="navbar">
        <div class="TasteNest">
            <b>TasteNest</b>
        </div>
    </nav>
    <div class="formulario"> 
        <h1>Inicio de sesion</h1>
        <form action="php/login_be.php" method="post"> 
            <div class="username">

                <input type="email" required name="email">
                <label>Email</label>
            </div>
            <div class="username">
                <input type="password" required name="password">
                <label> Contraseña</label>
            </div>
            <div class="recordar hvr-float">Olvido su contraseña?</div>
            <button> Iniciar Sesion</button>
        </form>
        <div class="registrarse">
                No tienes una cuenta?<a href="register.php"> Registrarse</a>
            </div>
    </div>
</body>
</html>
