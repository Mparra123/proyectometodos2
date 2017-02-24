<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
  $firstName = mysql_real_escape_string($_POST['firstName']);
  $lastName = mysql_real_escape_string($_POST['lastName']);
  $role = (int) mysql_real_escape_string($_POST['role']);
  $idNumber = (int) mysql_real_escape_string($_POST['idNumber']);
  $emailAddress = mysql_real_escape_string($_POST['emailAddress']);
  $phoneNumber = (int) mysql_real_escape_string($_POST['phoneNumber']);
  $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("proyectometodologias2") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("SELECT * FROM user"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO user (Username, Password, Name, LastName, Role, IdNumber, EmailAddress, PhoneNumber)
    VALUES ('$username','$password','$firstName','$lastName',$role,$idNumber,'$emailAddress',$phoneNumber)");
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
  }
}
?>
