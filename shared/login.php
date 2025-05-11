<?php
session_start();

$_SESSION['login_status']=false;

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$cipher_pass=md5($pass);

include "../shared/connection.php";
$sql="select * from signup where uname='$uname' and password='$cipher_pass'";
echo md5('12345');

$result = mysqli_query($con,$sql);
print_r(($result));
echo mysqli_num_rows($result);
echo $sql;
if(mysqli_num_rows($result)>0){
    echo "login successful";
   $dbrow=mysqli_fetch_assoc($result);
   print_r($dbrow);

   $_SESSION['login_status']=true;
   $_SESSION['utype']=$dbrow['utype'];
   $_SESSION['userid']=$dbrow['userid'];

   if($dbrow['utype']=="vendor"){
            header("location: ../vendor/home.php");
        }
        elseif($dbrow['utype']=='customer'){
            header("location: ../customer/home.php");
        }
}
else{
    echo "login failed"; 
}
// if($result){
//     echo "Successfully Signed in..";
//     if($utype=='vendor'){
//         header("location: ../vendor/home.html");
//     }
//     elseif($utype=='customer'){
//         header("location: ../customer/home.html");
//     }
// }
// else{
//     echo "unsuccesfull". mysqli_error($con) ;
// }
?>