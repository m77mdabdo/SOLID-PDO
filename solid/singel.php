<?php 


// single responsability

/*
singel.php - Single Responsibility Principle (SRP)

 This principle states that a class should have only one reason to change, meaning it should have only one responsibility.
 In other words, a class should focus on a single task, and it shouldn't handle multiple unrelated functions like database operations and user notifications in the same class.
 
*/ 

class User {
    public function __construct(){
        echo "hello User";
    }

    public function setname(){

    }
}

class Requsest {

    public function Request(){

    }
}

class Atho {

    public function loin(){

    }

    public function Register(){
        
    }
}