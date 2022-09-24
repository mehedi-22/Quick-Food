<?php error_reporting(0); ?>


<?php 

session_start();
$phone = null;
try{
  $phone = $_SESSION['phone'];

}catch(Exception $e){

}

?>

<?php  require('nav.php')    ?>


    <main class="bg-gray-50 w-screen h-screen p-16 relative">
      <div id="msg" class="text-lg absolute"></div>     
      
      <div class="flex justify-center">
        <input id="searchId"
          type="text"
          class="w-1/2 border border-gray-400 outline-none rounded-full px-8 py-4"
          placeholder="Search"
          onkeyup="searchFood()"
        />
      </div>
      
       

      <div id="imgContainerId" class="grid grid-cols-4  mt-14 px-60">
        <?php foreach($foods as $food): ?>
        <div  class=" imgClass w-52 p-2 rounded-lg border border-gray-500">

          <img src="data:image/jpg;charset=utf8;base64,
          <?php echo base64_encode($food['image']); ?>" >        
               
          <img class="w-auto" src="" alt="" />
          <div class="p-3">
            <strong class="foodNameClass font-bold text-sm pb-6"> 
             <?php  echo $food['foodName']  ?>
            </strong>
            <div class="text-sm">
            <?php  echo $food['details']  ?>
            </div>
          </div>
          <button class="p-2 mb-2 w-full border border-gray-500 rounded-lg">
            <a href="../src/productDetails.php">Details</a>
          </button>
          <button data-id="<?php echo $food['foodID']  ?>"
            class="cartButton text-white w-full p-2 text-whitemt-10 bg-red-600 rounded-full"
          >
            Add to cart
          </button>
        </div>
        <?php endforeach ?>
      </div>   
         

      
      
      
      
    </main>
  </body>
</html>
