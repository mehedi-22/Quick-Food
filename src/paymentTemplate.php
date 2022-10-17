<div>
            <div class="flex justify-center  ">
                
                <form class=" my-16 text-xl p-16 font-semibold 
                 w-2/3" action="payment_bksh.php" method="post" enctype="multipart/form-data">

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
                <form action="payment_bksh.php" method="post" enctype="multipart/form-data">
                    <div class="m-4 p-3 flex">
                        <div class="w-1/4">
                             Transaction Id   
                        </div> 
                        <div class="w-1/2">
                            <input type="text" name="transactionId" placeholder="full Name" class="rounded-lg border text-center border-gray-300 font-light text-sm px-5 py-2 w-full">
                        </div>
                        
                    </div> 
                        <div class="m-4 p-3 flex">
                            <div class="w-1/4">
                                Address   
                            </div> 
                            <div class="w-1/2">
                                <input type="text" name="address" placeholder="Type your address" class=" border-gray-300 rounded-full border text-center font-light text-sm px-5 py-2 w-full">
                            </div>
                            
                        </div>
                        <div class="m-4 p-3 flex">
                            <div class="w-1/4">
                                Phone    
                            </div> 
                            <div class="w-1/2">
                                <input type="text" name="phone" placeholder="number" class=" border-gray-300 rounded-full border text-center font-light text-sm px-5 py-2 w-full">
                            </div>
                            
                        </div> 
                        <div class="m-4 p-3 flex ">
                            <div class="w-1/4">
                                products   
                            </div> 
                            <div class="w-1/2 font-bold text-xl justify-end ">
                                <?php  echo $orderInformation ?>
                            </div>
                            
                        </div> 
                        <div class=" text-green-600 flex justify-between font-bold m-4 p-3">
                        
                            Total : <?php echo $total ?> tk
                            
                         <input  class="my-3 block rounded-md w-full text-white bg-green-400 py-2 border border-gray-400" type="submit" value="Payment" name="submit">
                            
                        </div>
                        
    
                </form>

               <!--  -->
             </div>

           </div>