<?php

    class Connection{
           public static function make()
           {
                try{
                    return new PDO(
                        'mysql:host=localhost;dbname=quick_food','root','root'
                    );
                       
                }catch(Exception $e){
                        die('Could not connected'.$e->getMessage());
                    }
            }          
    } 
?>