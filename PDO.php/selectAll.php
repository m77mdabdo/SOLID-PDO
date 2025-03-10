<?php 
require_once "pdo.php";

//select all 

$reselt=$conn->query("select * from users ");
$user=$reselt->fetchAll();

if(count($user)>0){
    foreach($user  as $use){
        echo $use['name']."<br>";
            echo $use['email']."<br>";
             echo $use['phone']."<hr>";
    }


}else{
    echo "not found";
}