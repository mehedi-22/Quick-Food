<?php error_reporting(0); ?>
<?php 
include("function.php");


$ufoodobj = new QuickFood();
$fooddata = $ufoodobj->food_display();
if (isset($_GET['status'])){
   if($_GET['status']='edit'){
    $id = $_GET['id'];
   $food = $ufoodobj->food_display_id($id);
   }
 
 
 }

 if (isset($_POST['update_product'])){
  $message = $ufoodobj->food_info_update($_POST);

 }



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../dist/css/mehedi/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="admin-product-form-container centered">
        <form action="" method="post" enctype="multipart/form-data">
          <h3 class="title">update the Food</h3>
          <?php echo $message ?>
          <input
            type="number"
            value="<?php echo $food['foodID'] ?>";
            name="ufoodID"
            class="box"
            required
          />
          <input
            type="text"
            value="<?php echo $food['foodName'] ?>";
            name="ufoodName"
            class="box"
          />
          
          <input
            type="text"
            value="<?php echo $food['details']; ?>"
            name="udetails"
            class="box"
          />
          <input
            type="text"
            value="<?php echo $food['availability']; ?>"
            name="uavailability"
            class="box"
          />
          <input
            type="number"
            value="<?php echo $food['price']; ?>"
            name="uprice"
            class="box"
          />
          <input
            type="text"
            value="<?php echo $food['quantity']; ?>"
            name="uquantity"
            class="box"
          />
          <input
            type="file"
            name="uimage"
            class="box"
           
          />

          <input
            type="submit"
            value="update product"
            name="update_product"
            class="btn"
          />
          <a href="admin_page.php" class="btn">go back!</a>
        </form>
      </div>
    </div>
  </body>
</html>
