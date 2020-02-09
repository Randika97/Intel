<?php
//including the database connection file
include_once("inc/server.php");




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

  </head>


  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php"><center><img src = "intel.png" height = "30" width="80"></center></a></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Add Post</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="remove_post.php">remove Post</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>



 <!-- Form Section -->


 <form action="inc/addpost.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="Enter Title">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Post Body</label>
    <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Posted By</label>
    <input type="text" class="form-control" name="posted_by" id="exampleFormControlInput1" placeholder="Posted By">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Upload an Image</label>
    <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>