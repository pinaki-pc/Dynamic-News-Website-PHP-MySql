<?php error_reporting(0); 

include('include/index_header.php');

?>


<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <hr>
      <?php

        include('db/config.php');
         $id=$_GET['single'];

        $query=mysqli_query($con,"select * from news_tbl where id='$id'");

        if ($row=mysqli_fetch_array($query)) {
          

      ?>
      <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
        <p class="blog-post-meta"> <?php echo $row['date'];?><a href="#">&nbsp;<?php echo $row['admin'];?></a></p>

        <p><a href="#"><img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" class="img img-thumbnail" style="width: 700px; height: 490px;"></a></p>
        <hr>
        <h4>Read full news - </h4><hr>
        <p><?php echo $row['des'];?></p>
        
        <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
        <!--a href="single_page.php">Continue Reading..</a-->
      </div><!-- /.blog-post -->
        <h4><i>Share news</i></h4>
        <div class="row mb-3">
          <div class="col-3">
            <a href="#" ><i class="fa fa-facebook-official fa-3x" style="color:#3b5998"></i></a>
          </div>
          <div class="col-3"> 
            <a href="#"><i class="fa fa-whatsapp fa-3x" style="color:#25d366"></i></a>
          </div>
          <div class="col-3">
            <a href="#"><i class="fa fa-twitter fa-3x" style="color:#00aced"></i></a>
          </div>
          <div class="col-3">
            <a href="#"><i class="fa fa-tumblr fa-3x" style="color:#32506d"></i></a>
          </div>
        </div>
    <?php }?>
      
     


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
    

      <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">

          <?php

            include('db/config.php');

            $query1=mysqli_query($con,"select * from category");
            while ($row=mysqli_fetch_array($query1)) {
          ?>
          <li><a href="#"><?php echo $row['category_name'];?></a></li>
        <?php }?>
        </ol>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
    <!-- bootstrap main js -->
    <script type="text/javascript" src="style/bootstrap/js/jquery-3.4.1.slim.min.js"></script>
    <script type="text/javascript" src="style/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="style/bootstrap/js/popper.min.js"></script>
</body>
</html>
