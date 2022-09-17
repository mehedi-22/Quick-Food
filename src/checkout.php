<?php error_reporting(0); ?>


<?php 

session_start();
$phone = null;
try{
  $phone = $_SESSION['phone'];

}catch(Exception $e){

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;700&family=Poppins:wght@900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6d5ca9b667.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../dist/css/mehedi/checkout.css">
 
  
    <title>Checkout </title>
</head>

<body>

<header class="header">
      <ul class="main-nav-list">
        <li><a class="main-nav-link" href="#">Quick Food</a></li>
      </ul>

      <nav>
        <ul class="main-nav-list">
          <li><a class="main-nav-link" href="./index.php">Home</a></li>
          <!-- <li><a class="main-nav-link" href="#">Request Order</a></li> -->
          <li><a class="main-nav-link" href="./food.php">Menu</a></li>
          <li><a class="main-nav-link" href="checkout.php">Cart</a></li>
          <?php
         if($phone==null){
            echo '<li><a class="main-nav-link nav-cta" href="sigup.php">SIGN IN</a></li>';
         }
         else{
            echo '<li><a class="main-nav-link nav-cta" href="sigup.php">SIGN OUT</a></li>';
            
         }
          ?>
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
                        <td><img src="../images/food-2.png"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="../images/food-1.png"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="../images/food-3.png"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="../images/food-4.png"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
                    <tr>
                        <td><img src="../images/food-1.png"></td>
                        <td>Pizza </td>
                        <td>1kg</td>
                        <td>120/-</td>
                        <td><a href=""><i class="fas fa-times"></i></a></td>
                    </tr>
            
        </table>
        
        <div class="total" style="float: right;">
            <h2>Total Tk: 10000/-</span></h2>
           
            <button class = "button" type="submit" name="order">
                <a href="placeOrder.php">Place Order</a>
            </button>
        </div>
    </div>
    
    

    <!-------------->
   
</body>


</html>