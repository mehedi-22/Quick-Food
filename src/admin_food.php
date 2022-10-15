<?php 
  require_once "./hndlImage.php";
  require_once "./testQuery.php";

  if(isset($_POST['submit'])){
    $firsKey = array_key_first($_FILES);
    $imageName = $firsKey;
    //var_dump($_FILES);
    $uploadedImgName = uploadImage($imageName);
    $query = new TestQuery(Connection::make());
    $query->insert("reviewfoods",$uploadedImgName);
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../dist/output.css"/>
</head>
<body class=" bg-gray-100 w-full">

<h2 class=" font-serif text-3xl ">Select Rivew  Possster : </h2>

<div class="grid grid-cols-4 gap-10 mt-14  px-48">
    <div>
        <div class="imgClass  ">
            <img class=" m-auto object-fill  h-72" src="../images/reviewImg/reviewImage-01.png" alt="image">
        </div>
        <div>
            <form action="admin_food.php" method="post" enctype="multipart/form-data">
                <input type="file" name="reviewImage-01" id="none">
                <input class="  my-3 block rounded-md w-full text-white bg-blue-400 py-2 border border-gray-400" type="submit" value="upload" name="submit">
            </form>
        </div>
    </div>

    <div>
        <div class="imgClass ">
            <img class=" object-fill  h-72" src="../images/reviewImg/reviewImage-02.png" alt="image">
        </div>
            
        <div>
            <form action="admin_food.php" method="post" enctype="multipart/form-data">
                <input type="file" name="reviewImage-02" id="none">
                <input class="my-3 block rounded-md w-full text-white bg-blue-400 py-2 border border-gray-400" type="submit" value="upload" name="submit">
            </form>
        </div>
    </div>  
    
    <div>
        <div   class="imgClass  ">
          <img   class=" object-fill  h-72" src="../images/reviewImg/reviewImage-03.png" alt="image">
        </div>
              
        <div>
            <form action="admin_food.php" method="post" enctype="multipart/form-data">
                <input type="file" name="reviewImage-03" id="none">
                <input class="  my-3 block rounded-md w-full text-white bg-blue-400 py-2 border border-gray-400" type="submit" value="upload" name="submit">
            </form>
        </div>
    </div>      
</div>




</body>
</html>