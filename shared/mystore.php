<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    body{
        background-color: #efe2a4d2;
        color: #1a4711fe;
    }
    a{
        text-decoration: none;
        color:#1a4711fe;
    }
</style>
</head>
<body>
<nav class="navbar p-2">
  <div class="container-fluid">
    <a class="navbar-brand"><p>
    <i class="fa fa-shopping-cart " aria-hidden="true">  BaZar
    </i>
  </p></a>
  <span>
  <i class="fas fa-user-shield" aria-hidden="true">
    </i>Hello, |
    <i class="fas fa-sign-out-alt" aria-hidden="true">
        </i>
        <a href="">Logout</a> |
        <a href="">UserPanel</a>

  </span>
  </div>
</nav>
<div class="">
    <h2 class="text-center color-white">Dashboard</h2>
</div>
<div class="bg-danger text-center m-auto">
    <a href="../vendor/home.php" class="text-white fs-4 fw-bold px-5">Add Post</a>
    <a href="" class="text-white fs-4 fw-bold px-5">Users</a>
</div>
</body>
</html>