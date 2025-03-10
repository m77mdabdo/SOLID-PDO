<?php 
//insert


require_once 'pdo.php';

$reseltInsert= $conn->query("insert into users(`name`,`email`,`phone`) values('namen' ,'nmfm@mmfm.com' ,'64337843')");

if($reseltInsert){
    echo "seccessefuly";
}else{
    echo "not found";
}