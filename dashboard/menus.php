<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <!-- Tablita -->
        </main>
    </div>
</body>
</html>