<html>
    <head>
        <title>My first PHP Website</title>
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
           <li><a href="register.php" selected>Registrar usuario</a></li>
           <li><a href="logout.php">Salir</a></li>
         </ul>
      </nav>
        <h2>Registrar usuario</h2>

        <form action="checkregister.php" method="POST">
           Username: <input type="text" name="username" required="required" /> <br/>
           Password: <input type="password" name="password" required="required" /> <br/>
           First name: <input type="text" name="firstName" required="required" /> <br/>
           Last name: <input type="text" name="lastName" required="required" /> <br/>
           Role:
           <select name="role" required="required">
           <option value=3  selected>User</option>
           <?php
           if($role == 1){
             echo '<option value=1>Administrator</option>';
             echo '<option value=2>Team leader</option>';
           }
            ?>
           </select><br/>
           ID number: <input type="text" name="idNumber" required="required" /> <br/>
           Email address: <input type="text" name="emailAddress" required="required" /> <br/>
           Phone number:<input type="text" name="phoneNumber" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
        <a href="profile.php">Click here to go back.<br/><br/>
    </body>
</html>
