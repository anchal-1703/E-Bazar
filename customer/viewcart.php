<?php
session_start();

if(!$_SESSION['login_status'])
{
    echo "forbidden access";
    die;
}
if($_SESSION['utype']!='customer')
{
    echo "unauthorised access";
    die;
}
include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
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
.item div{
  display: flex;
  align-items: center;
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
.qtn{
 justify-content: center;
     width: 80%;
     margin: 2px;
     text-align: center;
     font-size: 0.8rem;
}
.btn{
  justify-content: center;
  margin: 5px;
}
.remove_cart{
    background-color: rgb(220, 26, 26);
    padding: 6px;
}
.remove_cart a{
    color: #fff;
    /* font-size: 1rem; */
}
    </style>
</head>
<body>
<div class="display">
<?php
include "../shared/connection.php";
$sql="select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]";
$result=mysqli_query($con,$sql);
if(!$result){
    echo "unsuccesful";
}
$total=0;
while($dbrow=mysqli_fetch_assoc($result)){ 
    $total=$total+$dbrow['price'];
    echo " 
    <div class='item'> 
    
    <div class='name '>$dbrow[name]</div>
    <img class='pdt-img ' src=$dbrow[imgpath]>
    <div class='price '>$dbrow[price] </div>
    <div class='details'>$dbrow[details] </div>
    <div class='btn'>
   <button class='remove_cart' ><a class='text-decoration-none' href='remove_cart.php?cartid=$dbrow[cartid]'>Remove Cart</a></button>
    </div>
    </div>
    ";   
}
?>
 </div>
<div class="container">
    <div class="row p-2">
        <div class="col-lg bg-success mb-5 rounded d-grid gap-2 d-md-flex justify-content-md-between ">
            <h1 class="text-warning">Total Price=<?php echo $total;?>
        </h1>
        <a href="place_order.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true" >Place Order</a>
            
        </div>
    </div>
</div>


</body>
</html>