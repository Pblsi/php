<div class="col-md-4">



<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="" method="post">
<div class="input-group">
            <input name="search" type="text" class="form-control">
            <span class="input-group-btn">
                <button name="submit" class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form><!--- search form -->
    <!-- /.input-group -->
</div>


<!-- Login -->
<div class="well">
    <h4>Login</h4>
<form action="includes/login.php" method="post">
<div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter Username">
</div>
<div class="input-group">
            <input name="password" type="password" class="form-control" placeholder="Enter password">
            
            <span class="input-group-btn">
<button class="btn btn-primary" name="login" type="submit">Submit</button>

            </span>
        </div>
    </form><!--- search form -->
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">

                <?php
                $query = "SELECT * FROM categories ";
                $select_categories_sidebar = mysqli_query($connection, $query);
              
                ?>

<h4>Blog Categories</h4>
<div class="row">
<div class="col-lg-12">
<ul class="list-unstyled">
<?php
while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
$cat_title =  $row['cat_title'];
$cat_id = $row['cat_id'];

echo "<li><a href='category.php?category=$cat_id'> {$cat_title} </a></li>";
}
?>

            </ul>
        </div>

    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widget.php" ?>

</div>

<h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Third Blog Post -->
                <h2>
                    <a href="#">Blog Post Title</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">Start Bootstrap</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>