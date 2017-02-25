<?php
session_start(); //starts the session
if($_SESSION['user']){ // checks if the user is logged in
}
else{
   header("location: login.php"); // redirects if user is not logged in
}
$var1 = $_SESSION['user'];
$var2 = $_SESSION['role'];
$var3 = $_SESSION['name'];
$var4 = $_SESSION['lastName'];
$var5 = $_SESSION['idNumber'];
$var6 = $_SESSION['emailAddress'];
$var7 = $_SESSION['phoneNumber'];
$bool = false;
if($_SESSION['role'] == 3){
  $bool = true;
}
 ?>


<html>
    <head>
        <title>Perfil</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
      <nav>
        <ul>
           <li><a href="profile.php" selected>Perfil</a></li>
           <?php
           if($bool == false){
            echo '<li><a href="register.php" selected>Registrar usuario</a></li>';
           }
           ?>
           <li><a href="logout.php">Salir</a></li>
         </ul>
      </nav>
    <h2>Información de usuario</h2>
    <p>Usuario: <?php Print "$var1" ?></p>
    <p>Rol: <?php
    switch ($var2) {
      case '1':
        Print "administrador";
        break;
      case '2':
        Print "lider de equipo";
        break;
      case '3':
        Print "usuario";
        break;
    }
    ?>
    </p>
    <p>Nombre: <?php Print "$var3" ?></p>
    <p>Apellido: <?php Print "$var4" ?></p>
    <p>Cedula: <?php Print "$var5" ?></p>
    <p>Correo electronico: <?php Print "$var6" ?></p>
    <p>Telefono: <?php Print "$var7" ?></p>

  </body>
</html>
