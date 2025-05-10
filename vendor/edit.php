<?php
session_start();
include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    *{
        text-decoration: none !important;
    }
     body {
            background-color: #efe2a4d2;
        }
    .home{
    background-color: #1a471197;
    border-radius: 20px;
    padding: 0.6rem;
    color: #fff;

    }
        .form-control:hover{          
          background-color: rgba(239, 226, 164, 0.27);
          color: #fff;
          
        }
</style>
<body>
<?php
$uid=$_GET['uid'];
include "../shared/connection.php";
$result=mysqli_query($con,"select * from product where pid =$uid");
$record=mysqli_fetch_array($result);
?>
<div class="d-flex justify-content-center align-items-center vh-80">
                
                <form enctype="multipart/form-data" class="w-50 bg-success p-3 " action="update.php" method="post">
                    <h3 class="text-center">Edit product</h3>
                    <input type="text" value="<?php echo $record['name']?>" name="name" class="form-control mt-2" placeholder="Product name" id="" >
                    <input type="number" value="<?php echo $record['price']?>" min="1" name="price" class="form-control mt-2" placeholder="price"id="">
                    <textarea class="form-control mt-2" cols="10" rows="3" name="details"><?php echo $record['details']?></textarea>              
                    <input require class="form-control mt-2" type="file" name="pdtiming" accept=".jpg, .png"><br><img src="<?php echo $record['imgpath']?>" style="height: 200px; width: 100%">
                    <input type="hidden" name="uid" value="<?php echo $record['pid']?>">
                    <div class="text-center mt-3">
                        <button name="update" type="submit"  class="btn btn-primary">Update</button>
                    </div>
                  </form>                
            </div>
</body>
</html>