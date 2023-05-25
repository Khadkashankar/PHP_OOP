<?php
class Bike{
    //properties for bike class
    public $brand;
    public $price;

    // parameterized constructor method to display
    function __construct($brand, $price)
    {
        //assign the constructor variable to class variable
     $this->brand=$brand;
     $this->price=$price;
     echo "the brand name of motorbike is ".$this->brand." and price is  ".$this->price."<br>";


    }
}
$hero = new Bike("hero honda","Rs.232434");//constructor called for object hero
$yamaha= new Bike("yamaha ytr32","Rs.263678");//constructor called for object yamaha

?>