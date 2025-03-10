<?php 

//update 

require_once 'pdo.php';

$id=7;
$reseltUpdate=$conn->query("update users set name='name nameddd' where id=$id");

if($reseltUpdate){
    echo " update seccessefuly";
}else{
    echo "not found";
}