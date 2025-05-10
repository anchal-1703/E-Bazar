<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
</head>
<body>   
<?php
session_start();  
$pid=$_GET['pid'];
include "../shared/connection.php";
$sql=mysqli_query($con,"insert into cart(userid,pid) values($_SESSION[userid],$pid)");
if($sql){
 echo "successfull
  ";
  header('location: viewcart.php');
}

?>
</body>
</html>