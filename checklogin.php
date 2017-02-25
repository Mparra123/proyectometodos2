<?php
    session_start();
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
    mysql_connect("localhost", "root", "") or die (mysql_error()); //Connect to server
    mysql_select_db("proyectometodologias2") or die ("Cannot connect to database"); //Connect to database
    $query = mysql_query("SELECT * FROM user WHERE username='$username'"); // Query the users table
    $exists = mysql_num_rows($query); //Checks if username exists
    $table_users = "";
    $table_password = "";
    $table_role = "";
    $table_name = "";
    $table_lastName = "";
    $table_idNumber = "";
    $table_emailAddress = "";
    $table_phoneNumber = "";
    if($exists > 0) //IF there are no returning rows or no existing username
    {
       while($row = mysql_fetch_assoc($query)) // display all rows from query
       {
          $table_users = $row['Username']; // the first username row is passed on to $table_users, and so on until the query is finished
          $table_password = $row['Password']; // the first password row is passed on to $table_password, and so on until the query is finished
          $table_role = $row['Role'];
          $table_name = $row['Name'];
          $table_lastName = $row['LastName'];
          $table_idNumber = $row['IdNumber'];
          $table_emailAddress = $row['EmailAddress'];
          $table_phoneNumber = $row['PhoneNumber'];
       }
       if(($username == $table_users) && ($password == $table_password))// checks if there are any matching fields
       {
          if($password == $table_password)
          {
             $_SESSION['user'] = $username; //set the username in a session. This serves as a global variable
             $_SESSION['role'] = $table_role;
             $_SESSION['name'] =   $table_name;
             $_SESSION['lastName'] = $table_lastName;
             $_SESSION['idNumber'] = $table_idNumber;
             $_SESSION['emailAddress'] = $table_emailAddress;
             $_SESSION['phoneNumber'] = $table_phoneNumber;

             header("location: profile.php"); // redirects the user to the authenticated home page
          }
       }
       else
       {
        Print '<script>alert("Incorrect Password!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
       }
    }
    else
    {
        Print '<script>alert("Incorrect username!");</script>'; // Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
    }
?>
