<?php 
require_once 'pdo.php';
//select one 
$id=7;
$reseltOne=$conn->query("select * from users where id=$id");
$userOne=$reseltOne->fetch(PDO::FETCH_ASSOC);

if(count($userOne)>0){
   
    echo $userOne['name'];


}else{
    echo "not found";
}
