<?php error_reporting(0); 

include('include/index_header.php');
?>

<h3 class="pb-4 mb-2 font-italic">Latest News
<img src="images/gif/new2.gif" style="width: 60px;"></h3>
  <div class="row mb-2">
     <?php

        include('db/config.php');

        $query2=mysqli_query($con,"select * from news_tbl order by id desc limit 0,2");
        while ($row=mysqli_fetch_array($query2)) {
          $category=$row['category'];
          $date=$row['date'];
          $title=$row['title'];
          $des=$row['des'];
          $thumb=$row['thumbnail'];
        

        ?>

    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">      
        <div class="col p-4 d-flex flex-column position-static">
          <h5 class="mb-0"><?php echo $category;?></h5>
          <div class="mb-1 text-muted"><?php echo date("F-jS-Y", strtotime($date));?></div>
          <p class="card-text mb-auto" style="font-size: 20px;"><strong><?php echo $title;?></strong></p>
          <a href="single_page.php?single=<?php echo $row['id'];?>" class="stretched-link"></a>
        </div>
        <div class=" col-auto d-none d-lg-block">
          <img class="card-img-right flex-auto d-none d-md-block" src="images/thumbnail/<?php echo $thumb;?>" alt="..." width="240px">
        </div>
      </div>
    </div>
  <?php }?>
</div>

<main role="main" class="container mb-3">
  <div class="row">
    <div class="col-md-8 blog-main">
      

      <?php
        include('db/config.php');
      ?>
      
      <form action="subscribe.php" method="post">
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email Address ...." name="email" required>
          <small id="emailHelp" class="form-text text-muted">Subscribe to our channel for latest news at first to you.</small>
        </div>
      
        
        <button type="submit" class="btn btn-danger" name="subscribe_btn">Subscribe</button>
      </form>

     
    </div><!-- /.blog-main -->

    
  </div><!-- /.row -->

</main><!-- /.container -->

<?php
  include('include/index_footer.php');
?>
<?php

  if (isset($_POST['subscribe_btn'])) {
    echo $email=$_POST['email'];

    $check_sub=mysqli_query($con,"select * from subscribe_tbl where email='$email'");
    if (mysqli_num_rows($check_sub)>0) {
      echo "<script>alert('Already subscribe this email. Try another email.');</script>";
    }
    else
    {
      $query=mysqli_query($con,"insert into subscribe_tbl(email) values('$email')");

      if ($query) {
        echo "<script>alert('Thanks for subscribe us.');</script>";
        echo "<script>location.href='index.php';</script>";
      }
      else
      {
        echo "<script>alert('fetching error.');</script>";
      }
    }

  }
?>
