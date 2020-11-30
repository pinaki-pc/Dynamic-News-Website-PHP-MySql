<?php
 include("db/config.php");

 $id=$_GET['did'];

 $query=mysqli_query($con, "delete from category where id='$id'");
 if ($query) {
 	echo "<script>alert('Category Deleted');</script>";
 	echo("<script> location.href = 'category.php'; </script>");
 }
 else
 {
 	echo "<script>alert('Try again');</script>";
 }
?>