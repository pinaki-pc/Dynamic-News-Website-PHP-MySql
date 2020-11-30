<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>ABC News Network</title> 

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="style/bootstrap/css/bootstrap.min.css">
    <!-- fontawesome css-->
    <link rel="stylesheet" type="text/css" href="fontawesome/font-awesome.min.css">
    <!-- Favicons -->
    <link rel="icon" href="">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- fontawesome cdn -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/fontawesome.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/brands.min.css">
    <!-- Custom styles for this template -->
    <link href="style/blog.css" rel="stylesheet">
    <!-- Google language translator -->
    <script type="text/javascript">
    function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#"><div id="google_translate_element"></div></a>
        

      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">ABC News Network</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <form action="search.php" method="post">
          <div class="input-group">
          <input type="text" name="search" placeholder="search news" class="form-control">
          <div class="input-group-append">
          <input type="submit" name="search_btn" class="btn btn-dark" value="search">
          </div>
          </div>
        </form>
      </div>
    </div>
  </header>


  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="index.php">Home</a>
      <?php

            include('db/config.php');

            $query1=mysqli_query($con,"select * from category");
            while ($row=mysqli_fetch_array($query1)) {
              $category_name=$row['category_name'];
          ?>

     <a class="p-2 text-muted" href="category_page.php?name=<?php echo $category_name;?>"><?php echo $category_name;?></a>

      
      <?php }?>
      <a class="p-2 text-muted" href="#">Contact Us</a>
    </nav>
  </div>

  <div class="card bg-dark text-white mb-4">
  <img src="images/news-style/hero.jpg" class="card-img" alt="..." style="height:400px;">
  <div class="card-img-overlay">
    <h5 class="card-title">Latest News Here</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
  </div>
</div>
<a href="subscribe.php"><button class="btn-sm btn-danger mb-2">Subscribe</button></a>
<?php
  
  $sqlleft=mysqli_query($con,"SELECT Count(id) AS total FROM subscribe_tbl");
    $values_left=mysqli_fetch_assoc($sqlleft);
    $num_rows_left=$values_left['total'];//total count

?>
<div class="text-muted">
  <small><strong><?php echo $num_rows_left;?></strong>&nbsp; subscribers</small>
</div>