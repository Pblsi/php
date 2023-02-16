

<?php include "db.php";?>
<?php include "functions.php"; ?>

<?php include "includes/header.php" ?>
<?php UpdateTable(); ?>

<div>
     <form action="login_update.php"  method="post"> 
       <div>
        <label for="username">username</label>
        <input type="text" placeholder="Enter Username" name= username>
        </div> 
        <div>
            <label for="password">password</label>
            <input type="password" placeholder="Enter Password" name= password>
        </div>
        <div>
            <select name="id" id="">
                <?php
            showAllData ();
                ?>
                </select>
                </div>
                <input class="btn btn-primary" type="submit"name="submit" value="UPDATE">
                </form>

<?php include "includes/footer.php" ?>
