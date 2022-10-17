<?php 
require_once '../Database/Connection.php';
    
class TestQuery{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    function pdoExecutes($query,$ara=[]){
        try{
            $statements = $this->pdo->prepare($query);
            $statements->execute($ara);
            return $statements;
                   
        }catch(PDOException $e){
            echo $e;
        }
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
    function deleteRowById($table , $id)
    {     
        $query = "delete from  {$table} where productId = {$id}";
        $statements = $this->pdoExecutes($query);
        echo $statements->execute();
    }

    function insert($table , $field){
         $query =  "insert into $table values(?)";
         $statements = $this->pdoExecutes($query,[$field]);
   
    }
    function insertNew($table , array $fields){
        $rpt = str_repeat("?,",count($fields)-1);
        $query =  "insert into $table values($rpt ?)";
        echo $query;
        $statements = $this->pdoExecutes($query,$fields);
  
   }
}

   
?>