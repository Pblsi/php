

  <?php include "db.php";?>
 <?php include "functions.php"; ?>
 <?php include "includes/header.php";?>

  <?php createRows(); ?>

  <div class="container">
  <div class="col-sm-6">

  <form action="login_create.php"  method="post">
  
    <label for="username">username</label>
  <input type="text" placeholder="Enter Username" name= username>
  <label for="password">password</label>
  <input type="password" placeholder="Enter Password" name= password>
  <input type="submit" name=submit>
  </form>
  
<?php include "includes/footer.php" ?>