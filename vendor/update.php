<?php
   $id= $_POST['uid'];
   $name= $_POST['name'];
   $price=$_POST['price'];
   $details=$_POST['details'];
   $pimg=$_FILES['pdtiming'];
   $source=$_FILES['pdtiming']['tmp_name'];
$target="../shared/images/".$_FILES['pdtiming']['name'];
move_uploaded_file($source,$target);
   include "../shared/connection.php";
$sql="UPDATE `product` SET `pid` = '$id', `name` = '$name', `price` = '$price', `details` = '$details' WHERE `product`.`pid` = '$id'";
$result=mysqli_query($con,$sql);
if($result){
    header("location: ../vendor/view.php");
}
?>