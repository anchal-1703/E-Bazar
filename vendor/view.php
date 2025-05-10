<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <style>
    *{
        text-decoration: none;
    }
body{
    background-color:#efe2a4d2 ;
    }
       
.item{
    border: 2px solid black;
    background-color: #fff;
    width: 230px;
    margin: 2rem;
    padding: 1rem;
    display: inline-block;
    align-items: center;
}
.view{
    background-color: #1a471197;
    border-radius: 20px;
    padding: 0.6rem;
    color: #fff;

    }
.item div{
  display: flex;
}
.pdt-img{
    width: 200px;
    height: 150px;
    border: 1px solid #1a471197;
    
}
.name{
    text-transform: capitalize;
    font-size: 2rem;
}
.price{
    font-size: 1.5rem;
    font-weight: bold;
}
.price::before{
    content: '₹';
}

.edit{
    border-radius: 5px;
font-size: 1rem;
padding: 4px;
background-color: rgba(26, 71, 17, 0.86);
float: right;
}
.edit a{
    color: #fff;
}
.del{
    font-size: 1.2rem;
margin-top: 7px;
color: red;
cursor: pointer;
}
.border{
    width: 100vw;
    height: fit-content;
    background-color: rgba(127, 38, 38, 0.82);
    font-size: 2rem;
    display: inline-block;
    text-align: center;
    color: #fff;
    margin-top: 1rem;
}
.display{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

    </style>
</head>
<body>
    <?php
session_start();
include "menu.html";
    ?>
   <nav class="border">
   Product list
   </nav> 
   <div class="display">

<?php

include "../shared/connection.php";
$sql="select * from product where owner=$_SESSION[userid]";
$result=mysqli_query($con,$sql);
while($dbrow=mysqli_fetch_assoc($result)){  
    echo " 
    <div class='item'> 
    
    <div class='name '>$dbrow[name]</div>
    <img class='pdt-img ' src=$dbrow[imgpath]>
    <div class='price '>$dbrow[price] </div>
    <div class='details'>$dbrow[details] </div>
    <button class='edit'><a href='edit.php?uid=$dbrow[pid]'>Edit</a></button>
    <a class='del' href='delete.php? id=$dbrow[pid]'>
    <i class='fa fa-trash del'>
    
    </a></i>
    
    </div>
    ";
    
}
?>
   </div>
</body>
</html>