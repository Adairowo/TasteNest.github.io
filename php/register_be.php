<?php

    include 'conexion.php';

    $full_name= $_POST['full_name'];
    $email= $_POST['email'];
    $username= $_POST['username'];
    $password= $_POST['password'];

    $query = "INSERT INTO users (full_name, email, username, password) VALUES ('$full_name', '$email', '$username', '$password')";

    //Verificar que el correo no se repita
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE email='$email'");

    if (mysqli_num_rows($verificar_correo) > 0) {
    echo '
    <script>
        alert("Este correo ya está registrado, intenta con otro diferente");
        window.location = "../register.php"
    </script>
    ';
    exit();
    }

    //Verificar que el usuario no se repita
    $verificar_username = mysqli_query($conexion, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($verificar_username) > 0) {
    echo '
    <script>
        alert("Este usuario ya esta registrado, intenta con otro diferente");
        window.location = "../register.php";
    </script>
    ';
    exit();
    }      

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
    echo '<script>alert("Registration successful!"); window.location.href = "../login.php";</script>';
}else{
    echo '<script>alert("Registration failed!"); window.location.href = "register.php";</script>';
}