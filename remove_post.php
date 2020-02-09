<?php
//including the database connection file
include_once("inc/config.php");

//fetching data in descending order (latest entry first)
$result = mysqli_query($mysqli,"SELECT *FROM posts ORDER BY id  DESC");//mysql_query is deprecated 

session_start();

if(!isset($_SESSION['login'])){
  header("Location: index.php");
}


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
        <a class="navbar-brand" href="#">Intel  Innovation Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home

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
              <a class="nav-link" href="#">remove Post</a>
            <span class="sr-only">(current)</span>
            </li>

            <li class="nav-item active">
              <a class="nav-link" href="logout.php">logout</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <table class="table">
  <thead class="thead-dark">
   

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ttile</th>
      <th scope="col">Body</th>
      <th scope="col">Posted_By</th>
      <th scope="col">View</th>
    </tr>



  </thead>
  <tbody>
  <?php 
    while($res = mysqli_fetch_array($result)){

        
        echo"<tr>";
        echo"<td>".$res['id']."</td>";
        echo"<td>".$res['Title']."</td>";
        echo"<td>".$res['Body']."</td>";
        echo"<td>".$res['Posted_By']."</td>";
        echo"<td>";
        echo "<a href=remove.php?id=$res[id]>Delete</a>";
        
    }
    ?>
   
  
</table>
