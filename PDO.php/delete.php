<?php 

//delete 

require_once 'pdo.php';

$id=7;
$reseltdelete=$conn->query("delete from users where id=$id");

if($reseltdelete){
    echo " delete seccessefuly";
}else{
    echo "not found";
}ffsd