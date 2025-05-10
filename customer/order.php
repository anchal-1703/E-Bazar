<?php
$name=$_POST['name'];
$email=$_POST['email'];

$address=$_POST['address'];
$city=$_POST['city'];
$phn=$_POST['phn'];
$pcode=$_POST['pcode'];
include "../shared/connection.php";
$sql="INSERT INTO `order` (`name`, `email`, `mobile`,`fulladdress`, `city`, `pincode`) VALUES ('$name', '$email', '$phn','$address', '$city', '$pcode')";
$result = mysqli_query($con,$sql);
if($result){
    ?>
    <script>
    alert('Order Confirmed!');
    window.location.href='viewcart.php';
</script>
<?php
}
else{
    echo "unsuccesfull". mysqli_error($con) ;
}
?>