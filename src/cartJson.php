<?php 
try{
    $pdo = new PDO('mysql:host=localhost;dbname=quick_food','root','root');
    

    if(isset($_POST['foodId']) ){
        $requestedId = $_POST['foodId'];
        $query = "select productId from cart where productId = $requestedId" ;
        $statements = $pdo->prepare($query);
        $statements->execute();
        $inCArt = $statements->fetchAll();  
        
        if(count($inCArt)){
            $msg = "already in Cart";
        }else{
            $foodId = $_POST['foodId'];
            $foodName = $_POST['foodName'];
            $foodPrice = $_POST['foodPrice'];
            $userId = $_POST['userId'];
            
            $query = "insert into cart(
                        productId,quantity,price,userId,name,OrderDate)
                        values(?,?,?,?,?,now()
                      )"; 
            $statements = $pdo->prepare( $query);
            $statements->execute(array($foodId,1,$foodPrice,$userId, $foodName));
            $msg = "add to cart";
           
        }
    }else{
        $msg = "get not suprtd";
    }

    $statements = $pdo->prepare('select productId from cart');
    $statements->execute();
    $cart = $statements->fetchAll();
    

    $data = Array(
    "nProductInCart" => count($cart),
    "msg" => $msg ,
    "food"=> $_POST['userId'] ?? 'none',
   
    );
    echo $data = json_encode($data); 

}
catch(Exception $e){
    //echo $e;
    die('Could not connected');
}


?>

