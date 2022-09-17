<?php
  Class QuickFood {
    private $conn;

    public function __construct(){
         $dbhost ='localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'quick_food';
 
      
         $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
         
         if (!$this->conn){
          die("could not connect");
         }
           

    }
    

    public function add($data){
            $name = $data['fullName'];
            $email =$data['emailID'];
            $phone = $data['phoneNumber'];
            $pass = $data['passwords'];
            $query = "INSERT INTO customers (fullName, emailID, phoneNumber, passwords) VALUES ('$name', '$email', $phone, '$pass')";

            if(mysqli_query($this->conn, $query)){
              return "success";
            }

    }


    public function login_info($login_data){
      $email = $login_data['email'];
      $password =$login_data['pass'];

     
      $query = "SELECT * FROM customers WHERE emailID = '$email' && passwords = '$password' ";

      echo "SELECT * FROM customers WHERE emailID = '$email' && passwords = '$password' ";

      if(mysqli_query($this->conn, $query)){
        $customerdata = mysqli_query($this->conn, $query);
        $row = mysqli_fetch_array($customerdata);
      
        if(is_array($row)){
          header("location:checkout.php");
          //$customer = mysqli_fetch_assoc($customerdata);
           session_start();
           
          $_SESSION['name'] =  $row['fullName'];
          $_SESSION['email'] =  $row['EmailID'];
           $_SESSION['phone'] =  $row['phoneNumber'];
        

        }
        else{
          echo "invalid ";
         
        }
       
      }

}
        
    }
  

?>