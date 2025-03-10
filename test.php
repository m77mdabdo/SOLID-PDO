<?php 
use DB\DB;

use liskoe\Pata;
use Solid\Sum;

require_once 'DB.php';
require_once 'solid/open_clos.php';
require_once 'solid/liskove.php';



$db=new DB('localhost','root','','rana') ;

// $users=$db->selectall('users','name,email,phone') ;
// foreach($users as $user){
//     echo $user['name']."<br>";
//     echo $user['email']."<br>";
//     echo $user['phone']."<hr>";
// }

// $users=$db->selectWithCond('users','id=5,name,email,phone',1) ;
// foreach($users as $user){
//         echo $user['name']."<br>";
//         echo $user['email']."<br>";
//         echo $user['phone']."<hr>";


//     }

// $users=$db->update("users","name='abdo'","id=8",'name') ;

// echo $users;


// $users=$db->delete("users","name='abdo'","id=8") ;

// echo $users;
// $op=new Sum;
// $reselt=$op->oprate(4,8);
// echo $reselt;

// $los=new Pata;
// $los->eat();


