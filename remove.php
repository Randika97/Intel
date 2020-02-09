<?php
include_once("inc/config.php");

$a=$_GET["id"];

$result = mysqli_query($mysqli,"DELETE FROM posts where id=$a");

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
        <a class="navbar-brand" href="admin.php">Intel  Innovation Admin Dashboard</a>
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
              <a class="nav-link" href="admin.php">Admin Panel

              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="addpost.php">Add Post</a>
              
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="remove_post.php">remove Post</a>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

    <h2>Post deleted Sucessfully</h2>