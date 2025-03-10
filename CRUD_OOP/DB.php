<?php 

namespace DB;

class DB{

// connation database 
    private $conn;

    public function __construct($host,$username,$pass,$namedata){
        $this->conn=mysqli_connect($host,$username,$pass,$namedata) ;

    }

    //select all 

    // public function selectall($table,$columns="*"){
    //     $query="select $columns from $table" ;
    //     $ranquery=mysqli_query($this->conn,$query);
    //     if(mysqli_num_rows($ranquery)>0){
    //       return mysqli_fetch_all($ranquery,MYSQLI_ASSOC);
          
    //     }else{
    //         return "not data found";
    //     }

    // }


    // //select one 
    
    // public function selectWithCond($table,$columns,$cond){
    //    $query="select $columns from $table where $cond";
    //     $ranquery=mysqli_query($this->conn,$query);
    //     if(mysqli_num_rows($ranquery)>1){
    //         $arr=[];
    //      while( $users=mysqli_fetch_assoc($ranquery)){
    //         $arr[]=$users;
    //      }

    //      return $arr;

              
          
    //     }else{
    //         return "not data found";
    //     }

    // }

    

    // // insert 

    // public function insert($table,$columns,$values){
    //     $query="insert into $table($columns) values($values)";
    //     $ranaquery=mysqli_query($this->conn,$query);
    //     if($ranaquery){
    //         return "data succesfuly";
    //     }else{
    //         return "data not found";
    //     }
    // }

    // // update 

    // public function update($table,$data,$cond,$columns){

    //     //selectone 

    //     $relselt=$this->selectWithCond($table,$columns,$cond );
    //     if($relselt){
    //     $query="update $table set $data  where $cond";
    //     $ranaquery=mysqli_query($this->conn,$query);
    //     if($ranaquery){
    //         return " updata data succesfuly";
    //     }else{
    //         return "data not found";
    //     }
    // }else{
    //     return "data not found";
    // }

    // }
    



    // // delete 

    // public function delete($table,$cond,$columns){
    //     $reselte=$this->selectWithCond($table,$cond,$columns);

    //     if($reselte){
    //         $query="delete from $table where $cond";
    //         $ranaquery=mysqli_query($this->conn,$query);
    //         if($ranaquery){
    //             return "delete succesfuly";
    //         }else{
    //             return "data not delete";
    //         }

    //     }else{
    //         return "data not found";
    //     }
    // }


}