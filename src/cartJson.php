<?php 

if(isset($_GET['id']) ){
    $requestedId = $_GET['id'];
    $query = 'INSERT INTO cart (productId) VALUES(' . $requestedId.')';
    
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=quick_food','root','root');
        $statements = $pdo->prepare($query);
        $statements->execute();
        $statements = $pdo->prepare('select * from cart');
        $statements->execute();
        $cart = $statements->fetchAll();
    
    }catch(Exception $e){
        echo $e;
        die('Could not connected');
    }    
    
}


try{
    $pdo = new PDO('mysql:host=localhost;dbname=quick_food','root','root');
    $statements = $pdo->prepare('select * from cart');
    $statements->execute();
    $cart = $statements->fetchAll();
   
}catch(Exception $e){
    echo $e;
    die('Could not connected');
}    


$data = Array(
  "nProductInCart" => count($cart) 
);
echo $data = json_encode($data); 

?>