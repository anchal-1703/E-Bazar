<?php
session_start();

print_r($_POST);
echo "<br>";
print_r($_FILES);
echo "<br>";

echo $_FILES['pdtiming']['tmp_name'];
echo $_FILES['pdtiming']['name'];

$source=$_FILES['pdtiming']['tmp_name'];
$target="../shared/images/".$_FILES['pdtiming']['name'];
move_uploaded_file($source,$target);

include "../shared/connection.php";

$sql="INSERT INTO product(name,price,details,imgpath,owner) VALUES('$_POST[name]','$_POST[price]','$_POST[details]','$target','$_SESSION[userid]')";

$result=mysqli_query($con,$sql);
if($result){
    // header("location : ../vendor/view.php");
   echo" succesfully";
   header("location: ../vendor/addproducts.php");
}

?>