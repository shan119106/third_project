
<?php
include("home.php");
?>
<?php include("server.php") ?>

<!DOCTYPE html>
<html>
<head>
<title>login</title>
</head>
<body>
  <link rel="stylesheet" href="CSS/login.css">
  <div class="login_user">
    <p><b>LOGIN</b></p>
      <nav>

          <form action="login.php" method="post"><br>
             <?php include('errors.php') ?>
            <input type="email"  id="email" name="login_email" class="login" placeholder="UserEmail" required><br>
         
            <input type="password"  id="password-1" name="password" class="login" placeholder ="Password" required><br>
            <input type="submit"  class="login" id="submit" value="Login" name="login">
          </form>
          
        </nav>
        <p >if not registered&nbsp<a  id="register" href="register.php">Register</a></p>
      </div>

      </body>
      </html>