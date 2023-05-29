<?php
//interface class
interface Father{
    const a = 10;       //interface class contains constant.
    public function displayValue();     //interface class contains abstract methods which have only declarations.
}
class Son implements Father{
    function displayValue(){
        echo self::a;
    }
}
$object = new Son;
$object->displayValue();


?>