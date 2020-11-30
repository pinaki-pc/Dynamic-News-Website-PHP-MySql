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

  $page='category';    

  include('include/header.php');
?>

<div style="margin-left: 20%; margin-top: 8%; width:70%;">

  

  <form action="addcategory.php" method="post" name="categoryform" onsubmit="return validateForm();" >
    <h3>Add Category</h1><hr>
    <div class="form-group">
      <label for="exampleInputEmail1">Category :</label>
      <input type="text" name="category" class="form-control" placeholder="Enter Category Name">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Discription :</label>
      <textarea class="form-control rounded-0" name="des" rows="10" placeholder="Enter Category Description..."></textarea>
    </div>
    <button type="submit" name="add_category_btn" class="btn btn-primary">ADD Category</button>
  </form>

  <script type="text/javascript">
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

  if (isset($_POST['add_category_btn'])) {
    # code...

    $category_name=$_POST['category'];
    $des=$_POST['des'];

    $check=mysqli_query($con,"select * from category where category_name='$category_name'");
    if (mysqli_num_rows($check)>0) {
      echo "<script>alert('This category name already taken.');</script>";
      exit();
    }
    
    $query=mysqli_query($con, "insert into category(category_name,des) values('$category_name','$des')");

    if ($query) {
      
      echo "<script>alert('Category added successfuly.');</script>";
      echo("<script> location.href = 'category.php'; </script>");

    }
    else
    {
      echo "<script>alert('Somthing went wrong. Please try again.');</script>";
    }
  }
?>