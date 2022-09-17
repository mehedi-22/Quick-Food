<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="../tailwind.css">
    <link rel="stylesheet" href="../dist/css/general.css" />
    <link rel="stylesheet" href="../dist/css/style.css" />
</head>
<body>
      <!--  -->
        
       <section class=" bg-gray-50 w-screen h-full">
       <?php  require('nav.php')    ?>
        
        <nav class="mt-10 flex justify-center gap-2 p-5">
            <a href="./payment_bksh.php" class=" bg-green-400 border drop-shadow-lg text-sm p-2 rounded-lg text-white">Bkash</a>
            
            <a href="./payment_rckt.php" class=" bg-green-400 border drop-shadow-lg text-sm p-2 rounded-lg text-white">Rocket</a>
            
            <a href="././payment_nagad.php" class=" bg-green-400 border drop-shadow-lg text-sm p-2 rounded-lg text-white">Nagad</a>
            
        </nav>

           <div class="flex mx-auto justify-center w-1/2 ">
                   <img src="../images/nagad.jpeg" alt="">
           </div>   
           <div>
            <div class="flex justify-center  ">
                
                <div class=" my-16 text-xl p-16 font-semibold 
                 w-2/3">
                    <div class="m-4 p-3 flex">
                        <div class="w-1/4">
                            Name   
                        </div> 
                        <div class="w-1/2">
                            <div type="text" placeholder="full Name" class="rounded-lg border text-center border-gray-300 font-light text-sm px-5 py-2 w-full">Mushfiq Sahriar Safi</div>
                        </div>
                        
                    </div>
                      
                 <div class="m-4 p-3 flex">  
                    <div class="w-1/4">
                        Email   
                    </div> 
                    <div class="w-1/2">
                        <div type="text" placeholder="full Name" class="rounded-lg border text-center border-gray-300 font-light text-sm px-5 py-2 w-full">Sahriar_Safi@gmail.com</div>
                    </div>
                    
                </div> 
                <div class="m-4 p-3 flex">
                    <div class="w-1/4">
                        Transaction Id   
                    </div> 
                    <div class="w-1/2">
                        <input type="text" placeholder="full Name" class="rounded-lg border text-center border-gray-300 font-light text-sm px-5 py-2 w-full">
                    </div>
                    
                </div> 
                    <div class="m-4 p-3 flex">
                        <div class="w-1/4">
                            Address   
                        </div> 
                        <div class="w-1/2">
                            <input type="text" placeholder="Type your address" class=" border-gray-300 rounded-full border text-center font-light text-sm px-5 py-2 w-full">
                        </div>
                        
                    </div>
                    <div class="m-4 p-3 flex">
                        <div class="w-1/4">
                            Phone    
                        </div> 
                        <div class="w-1/2">
                            <input type="number" placeholder="number" class=" border-gray-300 rounded-full border text-center font-light text-sm px-5 py-2 w-full">
                        </div>
                        
                    </div> 
                    <div class="m-4 p-3 flex ">
                        <div class="w-1/4">
                            products   
                        </div> 
                        <div class="w-1/2 font-light justify-end text-sm">
                            #burger  #pitza  #sandwitch
                        </div>
                        
                    </div> 
                    <div class=" text-green-600 flex justify-between font-bold m-4 p-3">
                       
                        Total : 300 tk
                        <div>
                            <button class=" bg-green-400 border drop-shadow-lg text-sm p-2 rounded-lg text-white">Payment</button>
                        </div>
                    </div>
                    
  
                </div>
             </div>

           </div>

       </section>
</body>
</html>