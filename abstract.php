<?php
//abstract class cannot be instantiated. abstract method must be declared inside abstract class. abstract class may have or have not abstract method. cannot declare abstract constructors and abstract static methods.
abstract class Father{
    function display(){
        echo "this is abstract class";
    }
    abstract function show();
} 
class Son extends Father{
    function show(){
        echo "abstract method defined in child class";
    }
}
$obj = new Son;
$obj->show();


?>