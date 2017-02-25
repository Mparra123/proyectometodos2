<?php
session_start(); //starts the session
if($_SESSION['user']){ // checks if the user is logged in
}
else{
   header("location: login.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>

<html>
    <head>
        <title>Perfil</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
      <nav>
        <ul>
           <li><a href="profile.php">Perfil</a></li>
           <li><a href="register.php" selected>Registrar usuario</a></li>
           <li><a href="logout.php">Salir</a></li>
         </ul>
      </nav>

    </body>
</html>
