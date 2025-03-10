<?php 
require_once 'DB.php';
use DB\DB; 

 // insert 
class Insert{

 private $conn;

 public function insert($table,$columns,$values){
    $query="insert into $table($columns) values($values)";
    $ranaquery=mysqli_query($this->conn,$query);
    if($ranaquery){
        return "data succesfuly";
    }else{
        return "data not found";
    }
}
}