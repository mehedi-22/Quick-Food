<?php error_reporting(0); ?>

<?php
 include_once './queryBuilder.php';
 require_once './Connection.php';

 $query =  new QueryBuilder(Connection::make());
 $foods = $query->fetchAll('foods');
 require '../src/manue.php';

?>