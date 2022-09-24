<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=quick_food','root','root');

    if(isset($_GET['id']) ){
        $requestedId = $_GET['id'];
        $query = 'select * from cart where productId ='.  $requestedId ;
        $statements = $pdo->prepare($query);
        $statements->execute();
        $inCArt = $statements->fetchAll();
        
        if(count($inCArt)){
            $msg = "already in Cart";
        }else{
            $query = 'INSERT INTO cart (productId) VALUES(' . $requestedId.')';
            $statements = $pdo->prepare($query);
            $statements->execute();
            $msg = "add to cart"; 
        }
    }
    $statements = $pdo->prepare('select * from cart');
    $statements->execute();
    $cart = $statements->fetchAll();
    $msg = $msg ?? '' ;
    $data = Array(
    "nProductInCart" => count($cart),
    "msg" => '<div class=" bg-red-600 p-2 rounded-full text-white ">'.$msg .'</div>'
    );
    echo $data = json_encode($data); 

}
catch(Exception $e){
    echo $e;
    die('Could not connected');
}


?>

