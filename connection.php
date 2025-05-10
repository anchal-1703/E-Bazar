<?php
$severname="localhost";
$username="root";
$password="";
$database="commercial";
$con= new mysqli($severname, $username, $password,$database,3307);
if(!$con){
    echo "sorry to connect".mysqli_connect_error();
    exit();
}

?>