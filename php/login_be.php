<?php
    session_start();
  // Incluye el archivo de conexión a la base de datos
  include 'conexion.php';
  $email= $_POST['email'];
  $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

  if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['username'] = $email;
        header("location: ../pedidos.php");
        exit;
  }else{
    echo '  <script>
                alert("Usuario no existe porfavor verifique los datos");
                window.location = "../login.php";
            </script>
            ';
            exit;
  }
?>