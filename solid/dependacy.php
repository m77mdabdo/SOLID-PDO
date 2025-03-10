<?php 

/*

dependacy.php - Dependency Inversion Principle (DIP)

This principle states that high-level modules 
should not depend on low-level modules,
 both should depend on abstractions.


Instead of directly depending on specific implementations, 
code should depend on interfaces or abstract classes,
 making the system more flexible and easier to modify.
*/

interface Payment{

    public function pay();
}

class Visa implements Payment{
    public function pay(){
      echo "Visa";
    }
}

class payPal implements Payment{
    public function pay(){
        echo "PayPal";
    }
}

class Pay{
    public function endPay($object){
      return $object->pay() ;
    }
}


$end=new Pay;
echo $end->endPay(new Visa);
echo $end->endPay(new payPal);