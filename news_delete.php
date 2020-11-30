<?php
 include("db/config.php");

 $id=$_GET['del'];

 $query=mysqli_query($con, "delete from news_tbl where id='$id'");
 if ($query) {
 	echo "<script>alert('News Deleted');</script>";
 	echo("<script> location.href = 'news.php'; </script>");
 }
 else
 {
 	echo "<script>alert('Try again');</script>";
 }
?>