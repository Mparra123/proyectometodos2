<html>
    <head>
        <title>My first PHP Website</title>
    </head>
    <body>
        <h2>Registration Page</h2>

        <form action="checkregister.php" method="POST">
           Username: <input type="text" name="username" required="required" /> <br/>
           Password: <input type="password" name="password" required="required" /> <br/>
           First name: <input type="text" name="firstName" required="required" /> <br/>
           Last name: <input type="text" name="lastName" required="required" /> <br/>
           Role:
           <select name="role" required="required">
           <option value=1 selected>Administrator</option>
           <option value=2>Team leader</option>
           <option value=3>User</option>
           </select><br/>
           ID number: <input type="text" name="idNumber" required="required" /> <br/>
           Email address: <input type="text" name="emailAddress" required="required" /> <br/>
           Phone number:<input type="text" name="phoneNumber" required="required" /> <br/>
           <input type="submit" value="Register"/>
        </form>
        <a href="index.php">Click here to go back.<br/><br/>
    </body>
</html>
