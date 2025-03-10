<?php 

require_once 'DB.php';
require_once 'selectwithcond.php';

use DB\DB;

 // update 
class Update extends Selectwithcond {
    private $conn;
 public function update($table,$data,$cond,$columns){

    //selectone 

    $relselt=$this->selectWithCond($table,$columns,$cond );
    if($relselt){
    $query="update $table set $data  where $cond";
    $ranaquery=mysqli_query($this->conn,$query);
    if($ranaquery){
        return " updata data succesfuly";
    }else{
        return "data not found";
    }
}else{
    return "data not found";
}

}
}