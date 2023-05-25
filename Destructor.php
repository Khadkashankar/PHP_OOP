<?php
class Bike{
    public $name;
    public $price;

    function __construct($name,$price)
    {
        $this->name=$name;
        $this->price=$price;
        echo"the name of motorbike is $this->name and price is $this->price <br>";
    }
    function __destruct()
    {
        echo "object is destroyed";
    }
}
$hero = new Bike("hero honda","Rs.2744848");//constructor called
echo $hero->name;
echo $hero->price;




?>