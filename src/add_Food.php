<?php error_reporting(0); ?>
<?php 
include("function.php");

session_start();
  try{
    $email = $_SESSION['email'];
    if($email==null){
      header("location:../src/adminlogin.php");
      
    }
 }catch(Exception $e){

  }

$foodobj = new QuickFood();

if (isset($_POST['add_product'])){
  $datas = $_POST['foodID'];//new
 $message = $foodobj->food_info($_POST);


}

if (isset($_GET['status'])){
  if($_GET['status']='delete'){
   $id = $_GET['id'];
  $food = $foodobj->food_delete($id);
  }


}

 $fooddata = $foodobj->food_display();
 //new
 $Confirm_message = $foodobj->confirmation_messaage2($datas); 
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>add_food</title>
    <link rel="stylesheet" href="../dist/css/mehedi/style.css" />
   
  </head>
  <body>
    <div class="container">
      <div class="form_control">
        <form action="add_Food.php" method="POST" enctype="multipart/form-data">
          <h3>Add a new Food <?php echo $datas  ?> </h3>
          <h3>Message:) <?php echo  $Confirm_message  ?> </h3>
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
        
          <a href="admin.php" class="btn">Home</a>
        </form>   
      </div>
      <div class="table_container">
        <table class="td">
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
              <img src="./upload/<?php echo $food['image'] ?>" height="100" alt="" />
            </td>
            <td>
              <a href="admin_update.php? status=edit&&id=<?php echo $food['foodID'] ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
              <a href="?status=delete&&id=<?php echo $food['foodID'] ?>" class="btn" onclick = 'return checkedelet()'>  delete </a>
            </td>
          </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
  <script>
  function checkedelet(){
    return confirm('Are you sure you want to delete this food?');
    
  
  }
</script>
</html>


