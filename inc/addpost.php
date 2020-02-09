<?php
$server= "localhost";
$db= "intel";
$user="root";
$pw="";

$title= $_POST["title"];
$content= $_POST["body"];
$pb= $_POST["posted_by"];
$filename = $_POST [addcslashes($_FILES["image"]["name"])];
$tmpname = addcslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$filetype = addcslashes($_FILES["image"]["type"]);
$array = array('jpg','jpeg');
$ext = pathinfo($filename,PATHINFOR_EXTENSION);
$image= $_POST["image"];
$conn= new mysqli($server,$user,$pw,$db);

if($conn->connect_error)
{
die("connection failed;" .$conn->connect_error);
}

$sql= "INSERT INTO posts (Title,Body,Posted_By,Image) VALUES ('$title','$content','$pb','$image')";
$r=mysqli_query($conn,$sql);

if($r)
{
 echo "new record created successfully";
 header("Location: /intel/admin.php");

 
}
else
{
echo "error:" .mysqli_error($conn);
}

?>