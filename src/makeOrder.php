<?php
 

 require_once './Connection.php';
 include_once './Cart.php';

 class QueryBuilderForOrder{
      protected $pdo;
      public function __construct($pdo)
      {
      $this->pdo = $pdo;
      }
      
      function fetchAll($table){
           $statements = $this->pdo->prepare("select * from {$table}");
           $statements->execute();
           return  $statements->fetchAll();    
           }
      
      function fetchAllWithClass($table,$className ){
           $statements = $this->pdo->prepare("select * from {$table}");
           $statements->execute();
           return  $statements->fetchAll(PDO::FETCH_CLASS,$className);    
      }
      
 }

 $query =  new QueryBuilderForOrder(Connection::make());
 $foodsIncart = $query->fetchAll('cart');
 

?>