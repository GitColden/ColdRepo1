<!DOCTYPE html>
<?php
include_once 'header.php';
?>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <meta charset="utf-8">
    <!--title-->
    <title>WELCOME TO THE MUSIC ACADEMY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <img src="Images/logo2.svg" alt="Logo2" class="header">
    <!--Style sheet links-->
    <link rel="stylesheet" href="simplestylesheet.css">
    <link rel="stylesheet" href="simplestylesheet.css" section>
</head>

<body>
 <!-- Navigation bar begins here-->
    <div class="topnav">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a class="feturedartist" href="Feturedartist.php">Fetured Artist Page</a></li>
        <li><a class="musicselection" href="Musicselection.php">Music section page</a><li>
        <li><a class="loginpage" href="loginpage.php">Login page</a><li>
        <li><a class="signup page" href="signup.php">Sign up page</a><li>
    </div>
 <!-- navigation bar ends here-->
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
    <form action"signup.inc.php" methord="post">

    </form>

    <section class="login-form">
      <h1>Sign up page</h1>
      <div class="signup-form">
          <form action="includes/login.inc.php" method="post">
              <input type="text" name="uid" placeholder="Username...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type"submit" name="submit">Login</form>
          <form action="include/login.inc.php" method="post">
          </form>
      </div>
  </section


</body>

  <?php
  include_once 'footer.php';
  ?>
  </html>
