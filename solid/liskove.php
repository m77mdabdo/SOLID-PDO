<?php 
namespace liskoe;
//3-> liskove substion 

/*
liskove.php - Liskov Substitution Principle (LSP)

This principle states that subclasses should be able to replace their parent classes without breaking functionality.
A subclass should extend the behavior of a parent class without altering its expected behavior to ensure smooth functionality.


*/

class Bird {
    public function eat(){
           echo "eat";
    }
}

class FlyBird extends Bird{
    public function fly(){
           echo "fly";
    }
}

class Eagle extends FlyBird{

}


class Pata extends Bird{

}