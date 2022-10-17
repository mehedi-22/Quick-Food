<?php 

require_once "../Database/Connection.php";
    require_once "./testQuery.php";

    $query = new TestQuery(Connection::make());
        $orderProducts = $query->fetchAll("cart");
        $orderInformation = "";
        $total = 0;
        // var_dump($orderProducts);
        foreach($orderProducts as $product){
             $quantity = strval($product["quantity"]);
             $producrName = $product["name"];
             $price = $product["price"];
             $orderInformation = $orderInformation ."#".$producrName . "( $quantity )\t";
             $total = $total + intval($price) * intval($quantity);
        }
        
       $orderInformation;
        echo "Iam in";
        echo $_SESSION['name'] ;
        var_dump($_SESSION['name']);

    if(isset($_POST['submit'])){
        echo "i am in";
        $name = $_SESSION['Name'] ?? "unknown";
        $email = $_SESSION["Email"] ?? "unknown";
        $transactionId = $_POST["transactionId"] ?? "unknown";
        $address = $_POST["address"] ?? "unknown";
        $phone = $_POST["phone"] ?? "unknown";
        

        $products = $orderInformation;
        $dateAndTime = date('Y-m-d H:i:s');
        try{
            $query->insertNew(
                "transactions",[$name,$email,$transactionId,$address,$phone,$products,$total,$dateAndTime]
            );
            header("Location: http://localhost/src/");

        }catch(PDOException $e){

        }
        
    }
    



?>