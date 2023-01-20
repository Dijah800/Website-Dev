<?php
  session_start();
  if(isset($_SESSION['loggedin'])) header("Location: secret.php");
  ?>
  <!DOCTYPE html>
  <html>
   <head>
    <title>Log-in page</title>
    <link rel ="Stylesheet" type="text/css" href="session.css">
  </head>
  
   <body>

    <div class="menu">
             <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="cv.html">Cv</a></li>
                <li><a href="weather.html">Weather</a></li>
                <li><a href="login.php">Login</a></li>    
             </ul>
        </div>

   <form action="login.php" method="POST"><div class="white-box">
   <h1>Admin Login</h1><br><br>
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit">
   </form>
</div>
  </body>
 </html>

