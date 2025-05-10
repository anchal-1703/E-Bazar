<?php
include "menu.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg bg-success  rounded d-grid gap-2 text-white text-center">
            <h1> Place Order
        </h1>           
        </div>
    </div>
</div>
    <div class="container-fluid w-50">

        <form class="row p-3 " action="order.php" method="post">
          <div class="col-50">
            <label for="validationDefault01" class="form-label">First name</label>
            <input type="text" class="form-control" name="name" id="validationDefault01" required>
          </div>
          <div class="col-50">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="validationDefault02" required>
          </div>
          <div class="col-50">
            <label for="validationDefaultUsername" class="form-label">Full Address</label>
            <div class="input-group">
              <input type="text" class="form-control" name="address"  id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
          <div class="col-50">
            <label for="validationDefault03" class="form-label">City</label>
            <input type="text" class="form-control" name="city"  id="validationDefault03" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault04" class="form-label">Mobile No.</label>
            <select class="form-select" id="validationDefault04" required>
              <option selected disabled value="">+91</option>
              <option selected disabled value="">+91</option>
       
            </select>
          </div>
          <div class="col-md-4 ml-0">
              <label for="validationDefault04" class="form-label"> .</label>
            <input type="mobile" class="form-control 
          " name="phn" id="validationDefault05" required>
          </div>
          <div class="col-md-3">
            <label for="validationDefault05" class="form-label">Pincode</label>
            <input type="text" class="form-control" name="pcode"  id="validationDefault05" required>
          </div>
          <div class="col-12">
            <div class="form-check my-3">
              <input class="form-check-input " type="checkbox" value="" id="invalidCheck2" required>
              <label class="form-check-label " for="invalidCheck2">
                Agree to terms and conditions
              </label>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
          </div>
        </form>
    </div>
</body>
</html>