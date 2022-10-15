<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>

<?php error_reporting(0); ?>
<?php 
include("function.php");


$foodobj = new QuickFood();

if (isset($_POST['add_product'])){
 $message = $foodobj->food_info($_POST);


}

if (isset($_GET['status'])){
  if($_GET['status']='delete'){
   $id = $_GET['id'];
  $food = $foodobj->food_delete($id);
  }


}

 $fooddata = $foodobj->food_display();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>admin page</title>

    <!-- font awesome cdn link  
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    /> -->

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../dist/css/mehedi/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="admin-product-form-container">
        <form action="admin_page.php" method="POST" enctype="multipart/form-data">
          <h3>Add a new Food </h3>
          <input
            type="number"
            placeholder="Enter Food ID"
            name="foodID"
            class="box"
            required
          />
          <input
            type="text"
            placeholder="Enter Food name"
            name="foodName"
            class="box"
          />
          
          <input
            type="text"
            placeholder="enter food details"
            name="details"
            class="box"
          />
          <input
            type="text"
            placeholder="enter availablity"
            name="availability"
            class="box"
          />
          <input
            type="number"
            placeholder="enter price"
            name="price"
            class="box"
          />
          <input
            type="text"
            placeholder="enter quantity"
            name="quantity"
            class="box"
          />
          <input
            type="file"
            name="image"
            class="box"
           
          />
          <input
            type="submit"
            class="btn"
            name="add_product"
            value="add product"
          />
        </form>
      </div>

      <div class="product-display">
        <table class="product-display-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Details</th>
              <th>Availabiliy </th>
              <th>price</th>
              <th>Quantity</th>
              <th>Image</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>
            <?php while($food = mysqli_fetch_assoc( $fooddata )){ ?>
          <tr>
           
            <td> <?php echo $food['foodID'] ?></td>
            <td><?php echo $food['foodName'] ?></td>
            <td><?php echo $food['details'] ?></td>
            <td><?php echo $food['availability'] ?></td>
            <td><?php echo $food['price'] ?></td>
            <td><?php echo $food['quantity'] ?></td>
            <td>
              <!-- <img src="./upload/<?php echo $food['image'] ?>" height="100" alt="" /> -->
            </td>
            <td>
              <a href="admin_update.php? status=edit&&id=<?php echo $food['foodID'] ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
              <a href="?status=delete&&id=<?php echo $food['foodID'] ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
