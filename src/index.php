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
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
    href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="../dist/css/general.css" />
  <link rel="stylesheet" href="../dist/css/style.css" />
  <link rel="stylesheet" href="../dist/output.css"/>
  
  <script
  type="module"
  src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
></script>
<script
  nomodule=""
  src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
></script>

  </head>
  <body class="bg-white w-screen">
    
  
  <header class="header">
<ul class="main-nav-list">
  <li><a class="main-nav-link text-sm" href="#">Quick Food</a></li>
</ul>

<nav>
  <ul class="main-nav-list">
    <li><a class="main-nav-link" href="index.php">Home</a></li>
    <li><a class="main-nav-link" href="./food.php">Menu</a></li>
    <li><a class="main-nav-link" href="./checkout.php">Cart</a></li>
  <?php
    if($phone==null){
    echo '    <li><a class="main-nav-link nav-cta" href="sigup.php">SIGN IN</a></li>';
  }  
  else{
    echo '    <li><a class="main-nav-link nav-cta" href="sigup.php">SIGN Out</a></li>';
   

  }
  ?>
  </ul>
</nav>
</header>




    <div class="" relative>
          <div class="absolute " style="top:22%;left:13%">
            <div class="text-4xl font-bold">Quick Food</div>
            <div class="text text-2xl font-bold">
              Time to enjoy our delicious Food.
            </div>
            <button
              class="px-3 py-1 mt-10 hover:bg-red-500 rounded-full text-white bg-red-600"
            >
              ORDER NOW
            </button>
          </div>
          <div class="flex justify-center">
        <div class="flex-col  w-1/2">
          
        </div>

        <img style="height: 449px" src="../images/bgimg.png" />
      </div>


<!-- make  -->
        <div class="  flex gap-9 justify-center text-center mx-auto" style="margin-bottom:70px ;">
            
           <div class="w-60    border border-gray-200">
                  <img class="" src="../images/reviewImg/reviewImage-01.png" alt="">
                  <div class="p-3 ">
                    <strong class=" text-xl pb-6 ">
                      We offer Best Food in town
                    </strong>
                    
                  </div>
                   
           </div>
           
           <div class="w-60   border border-gray-200">
            <img class="" src="../images/reviewImg/reviewImage-02.png" alt="">
            <div class="p-3">
              <strong class=" text-xl pb-6 ">
                With us you got fast delivery
              </strong>
              
            </div>
             
     </div>


     <div class="w-60     border border-gray-200">
      <img class="" src="../images/reviewImg/reviewImage-03.png" alt="">
      <div class="p-3">
        <strong class=" text-xl pb-6 ">
          Satisfy our Customer is our first priority
      </strong>
        
      </div>
       
</div>


        </div>
      
    </div>


    <div class="testimonials">
      <div class="inner">
        <h1 class="text-lg" style="font-size: 40px;">Testimonials</h1>
        <div class="borderr"></div>
        <div class="row">
          <div class="col">
            <div class="testimonil">
              <img src="../images/customer-2.jpg" alt="Customer" />
              <div class="name">Shafi</div>

              <p class="para">
                I really love quick food for their fast delivery and maintain
                the quality . Quick food is my fast choice for order food
                becuase there food is so testy.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="testimonil">
              <img src="../images/customer-2.jpg" alt="Customer" />
              <div class="name">Sofia</div>

              <p class="para">
                I really love quick food for their fast delivery and maintain
                the quality . Quick food is my fast choice for order food
                becuase there food is so testy.
              </p>
            </div>
          </div>
          <div class="col">
            <div class="testimonil">
              <img src="../images/customer-1 (2).jpg" alt="Customer" />
              <div class="name">Abdul Khalek</div>

              <p class="para">
                I really love quick food for their fast delivery and maintain
                the quality . Quick food is my fast choice for order food
                becuase there food is so testy.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>



    <footer class="footer">
      <div class="container grid grid--footer">
        <div class="logo-col">
          <a href="#" class="footer-logo">
            <img class="logos" alt="Omnifood logo" src="../images/q.jpg" />
          </a>
        </div>
        <div class="address-col">
          <p class="footer-heading">Contact us</p>
          <address class="contacts">
            <p class="address">
              Khulna university,Khan jahan ali Hall, 2nd Floor, Khulna, CA 94107
            </p>
            <p>
              <a class="footer-link" href="tel:415-201-6370">415-201-6370</a
              ><br />
              <a class="footer-link" href="mailto:hello@quickfood.com"
                >hello@quickfood.com</a
              >
            </p>
          </address>
        </div>
        <nav class="nav-col">
          <p class="footer-heading">Account</p>
          <ul class="footer-nav">
            <li><a class="footer-link" href="#">Sign in</a></li>
            <li><a class="footer-link" href="#">iOS app</a></li>
            <li><a class="footer-link" href="#">Android app</a></li>
          </ul>
        </nav>

        <nav class="nav-col ">
          <p class="footer-heading">Company</p>
          <ul class="social-links">
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="footer-link" href="#"
                ><ion-icon class="social-icon" name="logo-twitter"></ion-icon
              ></a>
            </li>
          </ul>

          <p class="copyright">
            Copyright &copy; 2025 by Quick Food, Inc. All rights reserved.
          </p>
        </nav>
      </div>
    </footer>
  </body>
</html>
<!-- 
      <div class=" ">
        <div class="flex justify-around  py-12">
          <div class="">
              <input type="text" placeholder="search" class="p-3 rounded-full  text-center " />  
          
          </div>
          <div class="flex gap-4">
            <button class="  hover:bg-red-500 hover:text-white px-3  border rounded-full text-black">pasta</button>
            <button class="  hover:bg-red-500 hover:text-white px-3  border rounded-full text-black">pitza</button>
            <button class="  hover:bg-red-500 hover:text-white px-3  border rounded-full text-black">Burger</button>
          </div>
        </div> -->