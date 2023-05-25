<?php
class Bike{
    //properties
    public $name;
    public $price;

    public function showModel($name,$price){
        $this->name=$name;
        echo "this motorbike is ".$this->name;
$this->price=$price;
        echo " and price ".$this->price;

    }

}
$hero = new Bike;//object created
$hero->showModel(" hero honda 1420","RS. 44221");

?>