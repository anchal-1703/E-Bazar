<?php
$severname="localhost";
$username="root";
$password="";
$database="commercial";

$con= mysqli_connect($severname, $username, $password,$database);
if(!$con){
    echo "sorry to connect".mysqli_connect_error();
    exit();
}

?>