<?php
include("function.php");
session_start();
$phone = $_SESSION['phone'];
if($phone==null){
    header("location:login.php");
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&family=Poppins:wght@900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d5ca9b667.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/checkout.css">
 
  
    <title>Checkout </title>
</head>

<body>

<header class="header">
      <ul class="main-nav-list">
        <li><a class="main-nav-link" href="#">Quick Food</a></li>
      </ul>

      <nav>
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="#">Home</a></li>
          <li><a class="main-nav-link" href="#">Request Order</a></li>
          <li><a class="main-nav-link" href="#">Filter Food</a></li>
          <li><a class="main-nav-link" href="#">Cart</a></li>
          <li><a class="main-nav-link nav-cta" href="#">SIGN IN</a></li>
        </ul>
      </nav>
    </header>
    <div class="table">
        <a class='empty' href="">Clear Cart</a>
        <table style="border-bottom: 1px #e3e3e3 solid; margin-bottom:20px;">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Remove</th>
            </tr>

     
                    <tr>
                        <td><img src="img/images.jpg"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="img/images.jpg"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="img/images.jpg"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="img/images.jpg"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="img/images.jpg"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
            
        </table>
        
        <div class="total" style="float: right;">
            <h2>Total Tk: 10000/-</span></h2>
           
            <button class = "button" type="submit" name="order">Place Order</button>
        </div>
    </div>
    
    

    <!-------------->
   
</body>


</html>