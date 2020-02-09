<?php
//including the database connection file
include_once("inc/config.php");
//fetching data in descending order (latest entry first)
$result = mysqli_query($mysqli,"SELECT *FROM posts ORDER BY id  DESC");//mysql_query is deprecated 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Intel|Data Center Soluions ,IoT and PC Innovation</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <style>
      .btn
      {
          display: inline-block;
          font-weight: 400;
          text-align: center;
          white-space: nowrap;
          vertical-align: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          user-select: none;
          border: 1px solid transparent;
          border-top-color: transparent;
          border-right-color: transparent;
          border-bottom-color: transparent;
          border-left-color: transparent;
          padding: .375rem 7rem;
          font-size: 1rem;
          line-height: 1.5;
          border-radius: .25rem;
          transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
      }
      body
      {
        background-image: url("img/img5.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 1800px 720px;
      }

</style>
  </head>
  <body background="">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><center><img src = "intel.png" height = "30" width="80"></center></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/Randika97">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Popular Resources</h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Get Support</a>
            <a href="#" class="list-group-item">Product Specs</a>
            <a href="#" class="list-group-item">See Products</a>
            <a href="#" class="list-group-item">Compare Processors</a>
            <a href="#" class="list-group-item">Download Center</a>
          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">
        	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img1.jpg" alt="img" width="800" height="350">
    </div>
    <div class="carousel-item">
      <img src="img/img2.jpg" alt="img" width="800" height="350">
    </div>
    <div class="carousel-item">
      <img src="img/img3.jpg" alt="img" width="800" height="350">
    </div>
    <div class="carousel-item">
      <img src="img/img4.jpg" alt="img" width="800" height="350">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

 <br><br>
          <div class="row">

          <?php 
    while($res = mysqli_fetch_array($result)){
?>
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <!--<a href="post 1.html"><img class="card-img-top" src="image1.jpg" alt="post1" width="75" height="150"></a>-->
                <div class="card-body">
                    <h4 class="card-title">
                      <a href="fullpost.php?id=<?php echo $res['id'] ?>"><?php echo $res['Title'] ?></a>
                    </h4>
                <p class="card-text">
                  <?php 
                  $img = $res['Image'];
                  echo"<img src='img/$img' height = '100' width = '200' alt = 'image'>";
                  ?>
                </p>
                </div>
                <a href="fullpost.php?id=<?php echo $res['id'] ?>"><button type="button" class="btn btn-warning">View</button></a>
              </div>
            </div>
    <?php }
    ?>     
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
    <!-- Footer -->
    <footer class="py-5 bg-primary">
      <div class="container">
        <p class="m-0 text-center text-white">Company Information &nbsp Our Commitment&nbsp  Communities &nbsp Investor Relations&nbsp Contact Us&nbsp Newsroom&nbspJobs</p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
