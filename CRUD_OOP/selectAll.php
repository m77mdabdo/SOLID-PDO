<?php 
require_once 'DB.php';
use DB\DB;
  //select all 
class selectAll{
    private $conn;
  public function selectall($table,$columns="*"){
    $query="select $columns from $table" ;
    $ranquery=mysqli_query($this->conn,$query);
    if(mysqli_num_rows($ranquery)>0){
      return mysqli_fetch_all($ranquery,MYSQLI_ASSOC);
      
    }else{
        return "not data found";
    }

}
}