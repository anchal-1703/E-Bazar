<?php
session_start();
// include "../shared/connection.php";
// $sql="DELETE FROM `product` WHERE `product`.`pid` = $_SESSION[pid]";
// $result=mysqli_query($con,$sql);
echo $cid=$_GET['cartid'];
include "../shared/connection.php";
$result=mysqli_query($con,"delete from cart where cartid=$cid");
if($result){
    header("location: ../customer/viewcart.php");
}
?>