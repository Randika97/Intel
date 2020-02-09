<?php
//including the database connection file
include_once("inc/config.php");
$a=$_GET["id"];
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM posts where id=$a"); // using mysqli_query instead
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
    <link href="css/modern-business.css" rel="stylesheet">
    <style type="text/css">
        body { font-family: sans-serif; }
    h1 {
        font-family: serif;
        margin-bottom: 0;
    }
    article {
        width: 600px;
        margin-left: auto;
        margin-right: auto;
    }
    .image-wrapper {
        width: 200px;
        float: left;
        padding-right: 25px;
        padding-bottom: 10px;
    }
    .image-wrapper img {
        width: 100%;
    }

    .image-wrapper span {
        font-family: sans-serif;
        font-size: 10px;
        color: #ccc;
    }
        </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top"> 
      <div class="container">
        <a class="navbar-brand" href="index.php">Intel  Innovation Admin Dashboard </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="about.html">About</a>
            </li>
           
            <li class="nav-item active">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
    <br>
<br>
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

   <?php 
          //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
          while($res = mysqli_fetch_array($result)) { 
            echo "<br>";		
          
         ?>     
          <form>

               
                <article>
            <h1><?php echo $res['Title']; ?></h1>
            <p class="article-meta"><strong>Published:</strong><?php echo $res['Posted_By']; ?></p>

            <div class="image-wrapper">
            <?php 
            $img = $res['Image'];
            echo"<img src='img/$img'>"; ?>
            </div>

            <p>
                <?php echo $res['Body']; ?>
            </p>
           
            


        </article>    
         </form>  



         <?php

          }
          ?>