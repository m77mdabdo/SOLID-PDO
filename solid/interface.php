<?php 


// interface segragation 


/*
interface.php - Interface Segregation Principle (ISP)

According to this principle, classes should 
not be forced to implement interfaces they don’t use.

Instead of creating large interfaces with
 multiple responsibilities, it’s better to create smaller, 
more specific interfaces tailored to different functionalities.
*/

interface Printer {
    public function print();
}

interface Scanner {
    public function scann();
}

class Dell implements Printer,Scanner{
    public function print(){

    }
    public function scann(){

    }
     
}

class hp implements Printer{
    public function print(){

    }
}

