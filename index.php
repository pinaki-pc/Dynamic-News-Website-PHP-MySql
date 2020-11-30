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

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        All News for You
      </h3>

      <?php

        include('db/config.php');
        $query=mysqli_query($con,"select * from news_tbl");

        while ($row=mysqli_fetch_array($query)) {
          

      ?>
      <div class="blog-post">
        <h4 class="blog-post-title"><?php echo $row['title'];?></h4>
        <p class="blog-post-meta"> <?php echo $row['date'];?><a href="#">&nbsp;<?php echo $row['admin'];?></a></p>

        <p><a href="single_page.php?single=<?php echo $row['id'];?>"><img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" class="img img-thumbnail" style="height:400px;"></a></p>
        <hr>
        <p><i><?php echo substr($row['des'],0,300);?></i><a href="single_page.php?single=<?php echo $row['id'];?>">&nbsp;Continue Reading..</a></p>
        <hr>
        <h4><i>Share news</i></h4>
        <div class="row">
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

        <hr/>
      </div><!-- /.blog-post -->

      <?php }?>

      
     

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div>
        <div class="p-4">
        <h4 class="font-italic">Categories</h4>
        <ol class="list-unstyled mb-0">

          <?php

            include('db/config.php');

            $query1=mysqli_query($con,"select * from category");
            while ($row=mysqli_fetch_array($query1)) {
              $category_name=$row['category_name'];
          ?>
          <li><a href="category_page.php?name=<?php echo $category_name;?>"><?php echo $row['category_name'];?></a></li>
        <?php }?>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Social Links</h4>
        <ol class="list-unstyled">
          <li><a href="#">Youtube</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<?php
  include('include/index_footer.php');
?>
