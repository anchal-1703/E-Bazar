<?php


$utype=$_POST['utype'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];

$cipher_pass=md5($pass);

include "../shared/connection.php";

$sql="INSERT INTO `signup` (`uname`, `password`, `utype`) VALUES ('$uname', '$cipher_pass', '$utype')";
$result = mysqli_query($con,$sql);
if($result){
    header("location: ../shared/home.html");
}
else{
    echo "unsuccesfull". mysqli_error($con) ;
}
?>
