<?php
  session_start();
  error_reporting(0);

  if($_SESSION['email'] == "")
  {
    header('location:admin_login.php');
  }
  else
  {
      //no session value present
  }

  $page='category';    

  include('include/header.php');
?>

<?php
  include ('db/config.php');
  $id=$_GET['id'];
  $query=mysqli_query($con, "select * from category where id='$id'");
  while ($row=mysqli_fetch_array($query)) {
    $category_name=$row['category_name'];
    $des=$row['des'];
  }
?>

<div style="margin-left: 20%; margin-top: 8%; width:70%;">

  

  <form action="edit.php" method="post" name="categoryform" onsubmit="return validateForm();" >
    <h3>Update Category</h1><hr>
    <div class="form-group">
      <label for="exampleInputEmail1">Category :</label>
      <input type="text" name="category" value="<?php echo $category_name; ?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Discription :</label>
      <textarea class="form-control rounded-0" name="des" rows="10"><?php echo $des;?></textarea>
    </div>
    <button type="submit" name="update_category_btn" class="btn btn-primary">Update </button>
    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
  </form>

  <script type="text/javascript">
    //validation category field
    function validateForm(){
      var x=document.forms['categoryform']['category'].value;
      if(x==""){
      alert('Category must be filled out.');
      return false;
      }
    }
</script>
</div>


<?php
 include("include/footer.php");
?>

<?php
  include('db/config.php');

  if (isset($_POST['update_category_btn'])) {
    # code...
    $id=$_POST['id'];
    $category_name=$_POST['category'];
    $des=$_POST['des'];
    
    $query1=mysqli_query($con, "update category set category_name='$category_name',des='$des' where id='$id'");

    if ($query1) {
      
      echo("<script> location.href = 'category.php'; </script>");

    }
    else
    {
      echo "<script>alert('Somthing went wrong. Please try again.');</script>";
    }
  }
?>