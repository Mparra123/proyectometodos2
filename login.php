 <html>
     <head>
         <title>Login</title>
         <link rel="stylesheet" type="text/css" href="styles.css">
     </head>
     <body>
         <h2>Iniciar sesión</h2>
         <form action="checklogin.php" method="POST">
            Enter Username: <input type="text" name="username" required="required" /> <br/>
            Enter password: <input type="password" name="password" required="required" /> <br/>
            <input type="submit" value="Login"/>
         </form>
     </body>
 </html>
