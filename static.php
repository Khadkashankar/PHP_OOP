<?php
//static variable
class Father{
    public static $a;
    function display($num){
        self::$a = $num;        //accessing the static variable/properties by using self keyword
        echo "the value of A: ".self::$a."<br>";   //but non-static properties cannot be accessed by static method
    }
}
$obj = new Father;
$obj->display(120);

//static method
class StaticFun{
    static function showValue($b){
        echo "the value of B: ".$b;
    }
}
// $ob = new StaticFun;       //we can also call by creating object
// $ob->showValue(123);
StaticFun::showValue(130);    //static method directly call by class name 


//static with inheritance
class Mother{
    public static $c = 145;

}
class Daughter extends Mother
{
    function getValue(){
        echo "<br>the value of C :".self::$c;   //we can access the static variable using class name,parent or self keyword
    }
}
$object = new Daughter;
$object->getValue();
?>