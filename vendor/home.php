<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>
<body>
    <?php
include 'menu.html';
    ?>
    
        <div class='container bg-success  rounded text-white text-center w-100'>
            <h1 class='text-center'> Dashboard
        </h1>           
        </div>
        <div class='container'>
        <table class='table mt-4'>
  <thead>
    <tr>
      <th scope='col'>Order No.</th>
      <th scope='col'>Name</th>
      <th scope='col'>Email</th>
      <th scope='col'>Full Address</th>
      <th scope='col'>city</th>
      <th scope='col'>Pincode</th>
      <th scope='col'>Mobile</th>
    </tr>
  </thead>
        <?php
        include "../shared/connection.php";
        $sql="SELECT * FROM `order`";
        $result=mysqli_query($con,$sql);
        while($dbrow=mysqli_fetch_assoc($result)){
        echo"
  <tbody>
    <tr>
      <th scope='row'>$dbrow[orderid]</th>
      <td>$dbrow[name]</td>
      <td>$dbrow[email]</td>
      <td>$dbrow[fulladdress]</td>
      <td>$dbrow[city]</td>
      <td>$dbrow[pincode]</td>
      <td>$dbrow[mobile]</td>
    </tr>
   
  </tbody>
  ";}
  ?>
  </table>
        </div>
    

</body>
</html>
