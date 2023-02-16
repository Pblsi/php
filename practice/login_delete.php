<?php include "db.php";?>
<?php include "functions.php"; ?>

<?php deleteRows(); ?>
<?php include "includes/header.php" ?>




<div>
     <form action="login_delete.php"  method="post"> 
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
                <input class="btn btn-primary" type="submit"name="submit" value="delete">
                </form>
                
                <?php include "includes/footer.php" ?>

