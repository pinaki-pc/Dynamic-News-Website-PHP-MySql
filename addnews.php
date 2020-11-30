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

  $page='product';    

  include('include/header.php');
?>

<div style="margin-top: 1%;margin-left: 20%; width: 80%;">
    <ul class="breadcrumb">
      <li class="breadcrumb-item " ><a href="home.php">home</a></li>
      <li class="breadcrumb-item " ><a href="news.php">News</a></li>
      <li class="breadcrumb-item active" >Add News</li>
    </ul>
  </div>
<div style="margin-left: 20%; margin-top: 2%; width:70%; ">

  <form action="addnews.php" method="post" name="newsform" enctype="multipart/form-data" onsubmit="return validateForm();" >
    <h3>Add News</h1><hr>
    <div class="form-group">
      <label for="exampleInputEmail1">Title :</label>
      <input type="text" name="title" class="form-control" placeholder="Enter Title">
      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Discription :</label>
      <textarea class="form-control rounded-0" name="des" rows="6" placeholder="Enter Description..."></textarea>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Date :</label>
      <input type="date" name="date" class="form-control">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Choose Thumbnail :</label>
      <input type="file" name="thumbnail" class="form-control">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Choose Category :</label>
      <select name="category" class="form-control">
        <?php
        include('db/config.php');

        $query=mysqli_query($con,"select * from category");
        while ($row=mysqli_fetch_array($query)) {
          $category=$row['category_name'];
      ?>
        <option><?php echo $category;?></option>

      <?php }?>
      </select>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Admin Name :</label>
      <input type="text" class="form-control" disabled value="<?php echo $_SESSION['email'];?>">
    </div>

    <button type="submit" name="add_news_btn" class="btn btn-primary">ADD Category</button>
  </form>

  <script type="text/javascript">
    function validateForm(){
      //news form validations
      var x=document.forms['newsform']['title'].value;
      var y=document.forms['newsform']['des'].value;
      var z=document.forms['newsform']['date'].value;
      var w=document.forms['newsform']['category'].value;
      if(x==""){
      alert('Title must be filled out.');
      return false;
      }
       if(y==""){
      alert('Description must be filled out.');
      return false;
      }
       if(y.length<20){
      alert('Description atleast 20 charecters');
      return false;
      }
       if(z==""){
      alert('Date must be filled out.');
      return false;
      }
       if(w==""){
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
  include ('db/config.php');
  if(isset($_POST['add_news_btn']))
  {
    $title=$_POST['title'];
    $des=$_POST['des'];
    $date=$_POST['date'];
    $thumb=$_FILES['thumbnail']['name'];
    $tmp_thumb=$_FILES['thumbnail']['tmp_name'];
    $category=$_POST['category'];
    $admin=$_SESSION['email'];
    //upload files
    move_uploaded_file($tmp_thumb, "images/thumbnail/$thumb");

    $query1=mysqli_query($con,"insert into news_tbl(title,des,date,category,thumbnail,admin) values('$title','$des','$date','$category','$thumb','$admin')");
    if ($query1) {
      echo "<script>alert('News uploaded successfully');</script>";
    }
    else
    {
      echo "<script>alert('Sorry.. Try again.!!');</script>";
    }
  }
?>
