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

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary fixed-top"> 
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src = "intel.png" height = "30" width="80"></center></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>
<br>
<br>
   <?php 
          //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
          while($res = mysqli_fetch_array($result)) { 
            echo "<br>";		
          
         ?>     
          <form>
                  <div class="col-sm-10">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Posted By</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $res['Posted_By']; ?>" readonly>
                    
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $res['Title']; ?>" readonly>
                    
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" readonly> <?php echo $res['Body']; ?>   </textarea>                 
                  </div>

                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label><br>
                          <?php 
                          $img = $res['Image'];
                          echo"<img src='img/$img'>";
                          ?>                
                  </div>
                 
                 
                </form>      



         <?php

          }
          ?>