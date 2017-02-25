<html>
    <head>
        <title>Registrar</title>
         <link rel="stylesheet" href="styles.css">
    </head>

    <?php
    session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in
    }
    else{
       header("location: login.php"); // redirects if user is not logged in
    }
    $role = 0;
    $role = $_SESSION['role'];
    if ($role == 3) {
       header("location: profile.php");
    }
    ?>

    <body>
      <nav>
        <ul>
           <li><a href="profile.php">Perfil</a></li>
           <li><a href="register.php" active>Registrar usuario</a></li>
           <li><a href="logout.php">Salir</a></li>
         </ul>
      </nav>
        <h2>Registrar usuario</h2>

        <form action="checkregister.php" method="POST">
           Nombre de usuario: <input type="text" name="username" required="required" /> <br/>
           Contraseña: <input type="password" name="password" required="required" /> <br/>
           Nombre: <input type="text" name="firstName" required="required" /> <br/>
           Apellido: <input type="text" name="lastName" required="required" /> <br/>
           Rol:
           <select name="role" required="required">
           <option value=3  selected>usuario</option>
           <?php
           if($role == 1){
             echo '<option value=1>administrador</option>';
             echo '<option value=2>lider de equipo</option>';
           }
            ?>
           </select><br/>
           Cédula: <input type="text" name="idNumber" required="required" /> <br/>
           Correo electrónico: <input type="text" name="emailAddress" required="required" /> <br/>
           Teléfono:<input type="text" name="phoneNumber" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
    </body>
</html>
