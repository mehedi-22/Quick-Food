<?php error_reporting(0); ?>

<?php
     

try{

    $pdo = new PDO('mysql:host=localhost;dbname=quick_food','root','');
    $statements = $pdo->prepare('select * from foods');
    $statements->execute();
    $foods = $statements->fetchAll();
       
    
   
}catch(Exception $e){
    echo $e;
    die('Could not connected');

}
   
require '../src/manue.php';


?>