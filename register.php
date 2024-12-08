<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en TasteNest</title>
    <link rel="stylesheet" href="css/stylesregister.css" >
    <link rel="stylesheet" href="css/hover.css">
</head>

<body>
    <nav class="navbar">
        <div class="TasteNest">
            <b>TasteNest</b>
        </div>
    </nav>

    <div class="container">
        
        <div class="image-container"></div>

        
        <div class="formulario"> 
            <h1>Registrate en TasteNest</h1>
            <form action="php/register_be.php" method=POST>
                <div class="username">
                    <input type="text" required name="full_name">
                    <label>Nombre Completo</label>
                </div>
                <div class="username">
                    <input type="email" required name="email">
                    <label>Email</label>
                </div>
                <div class="username">
                    <input name="username">
                    <label>Usuario</label>
                </div>
                <div class="username">
                    <input type="password" required name="password">
                    <label>Contraseña</label>
                </div>
                <button class="btn-register hvr-glow">Registrarse</button>
            </form>
            <div class="iniciar-sesion">
                    Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a>
                </div>
        </div>
    </div>
</body>
</html>

