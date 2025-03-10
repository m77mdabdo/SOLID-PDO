<?php 
namespace Solid;
//o-> open for extension , clae for edit 

/*
open_clos.php - Open/Closed Principle (OCP)

This principle ensures that code is open for extension but closed for modification.
This means that you should be able to add new functionality without modifying existing code, typically achieved through inheritance or interfaces.

*/

//  opration 

interface Opration{
    public function oprate($x,$y);
}

class Sum implements Opration{
    public function oprate($x,$y){
        return $x+$y ;

    }
}

class Sub implements Opration {
    public function oprate($x,$y){
        return $x-$y ;

    }

}
class Milte implements Opration {
    public function oprate($x,$y){
        return $x*$y ;

    }

}

