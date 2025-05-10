<?php
session_start();
// include "../shared/connection.php";
// $sql="DELETE FROM `product` WHERE `product`.`pid` = $_SESSION[pid]";
// $result=mysqli_query($con,$sql);
$id=$_GET['id'];
include "../shared/connection.php";
$result=mysqli_query($con,"delete from product where pid=$id");
if($result){
   echo" <script>
    alert('product has been deleted successfully');
</script>";
header('location: view.php');
}
?>