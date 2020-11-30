<?php error_reporting(0); 

include('include/index_header.php');
?>



<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        All News for You
      </h3>

      <?php

        include('db/config.php');

        if (isset($_POST['search_btn'])) {
          $search=$_POST['search'];
        }

        $query=mysqli_query($con,"select * from news_tbl where title like '%$search%'");

        if ($check=mysqli_num_rows($query)>0) {
          # code...
          //search value present
        while ($row=mysqli_fetch_array($query)) {

      ?>
      <div class="blog-post">
        <h4 class="blog-post-title"><?php echo $row['title'];?></h4>
        <p class="blog-post-meta"> <?php echo $row['date'];?><a href="#">&nbsp;<?php echo $row['admin'];?></a></p>

        <p><a href="single_page.php?single=<?php echo $row['id'];?>"><img src="images/thumbnail/<?php echo $row['thumbnail']; ?>" class="img img-thumbnail" style="height:400px;"></a></p>
        <hr>
        <p><i><?php echo substr($row['des'],0,300);?></i></p>
        <blockquote>
        </blockquote>
        <a href="single_page.php?single=<?php echo $row['id'];?>">Continue Reading..</a>
        <hr/>
      </div><!-- /.blog-post -->

      <?php } 

        }
        else
          {
            
           echo "Sorry.. This items dose not present.";
          }
        ?>

      
     

      <nav class="blog-pagination pt-3  ">
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
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
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
