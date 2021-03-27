<?php 
    class DB{
        
        public static function getConnect(){
            
            // $database = "exe";
            $database = "a1";
            $conn = new mysqli("localhost","root","",$database);
            if($conn->connect_errno){
                 echo "error connect DB".$conn->error;
            }
            $conn->charset = "utf8mb4";
            return $conn;
        }
    }
?>
