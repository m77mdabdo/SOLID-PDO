<?php 


require_once 'DB.php';

use DB\DB;

 //select one 
 class Selectwithcond{
    private $conn;

 public function selectWithCond($table,$columns,$cond){
    $query="select $columns from $table where $cond";
     $ranquery=mysqli_query($this->conn,$query);
     if(mysqli_num_rows($ranquery)>1){
         $arr=[];
      while( $users=mysqli_fetch_assoc($ranquery)){
         $arr[]=$users;
      }

      return $arr;

           
       
     }else{
         return "not data found";
     }

 }
}