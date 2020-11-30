<?php
  session_start();

  if($_SESSION['email'] == "")
  {
    header('location:admin_login.php');
  }
  else
  {
      //no session value present
  }

  $page='news';    

  include('include/header.php');
?>
<div style="margin-top: 1%;margin-left: 20%; width: 80%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">home</a></li>
      <li class="breadcrumb-item active" >News</li>
    </ul>
  </div>

<div style="margin-left: 20%; margin-top: 4%; width:70%;">
  <div class="text-right">
    <a href="addnews.php" class="btn btn-info"><i class="fa fa-pencil"></i> Add News</a>
  </div>
  <div class="table-responsive">
  <table class="table table-bordered table-striped mt-1">
    <tr class="text-center">
      <th>ID</td>
      <th>Title</th>
      <th>Description</th>
      <th>date</th>
      <th>Category</th>
      <th>Thumbnail</th>
      <th>Admin</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>       
        <?php
          include ('db/config.php');
          $query=mysqli_query($con,"select * from news_tbl");
          while ($row=mysqli_fetch_array($query)) {
        ?> 
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo substr($row['title'],0,30);;?></td>
            <td><?php echo substr($row['des'],0,60);;?></td>
            <td><?php echo date("F-jS-Y", strtotime($row['date']));?></td>
            <td><?php echo $row['category'];?></td>
            <td><img src="images/thumbnail/<?php echo $row['thumbnail'];?>" class="img img-thumbnail" alt="news image" style="width: 150px;height: 100px;"></td>
            <td><?php echo $row['admin'];?></td>   
            <td><a href="news_edit.php?edit=<?php echo $row['id'];?>" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>  
            <td><a href="news_delete.php?del=<?php echo $row['id'];?>" class="btn btn-danger"><i class="fa fa-close"></i></a></td>     
        </tr>          
      <?php }?>
    
  </table>
  </div>
</div>


<?php
 include("include/footer.php");
?>

<?php
  include ('db/config.php');
  $total_count=mysqli_query($con,"select * from news_tbl");
  $count=mysqli_num_rows($total_count);
  $a=$count/3;

?>