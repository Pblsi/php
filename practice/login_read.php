<?php include "includes/header.php" ?>
<?php
include "db.php";
  
$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
  die('Query FAiled' . mysqli_error());
}
?>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<pre>
<?php
print_r($row);
?>
</pre>
<?php
}

?>
<?php include "includes/footer.php" ?>