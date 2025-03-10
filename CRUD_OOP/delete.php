<?php 

require_once 'DB.php';
use DB\DB;

class Delete extends Selectwithcond {

    private $conn;
     // delete 
     public function delete($table,$cond,$columns){
        $reselte=$this->selectWithCond($table,$cond,$columns);

        if($reselte){
            $query="delete from $table where $cond";
            $ranaquery=mysqli_query($this->conn,$query);
            if($ranaquery){
                return "delete succesfuly";
            }else{
                return "data not delete";
            }

        }else{
            return "data not found";
        }
    }
}


  