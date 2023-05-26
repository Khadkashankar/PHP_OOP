<?php
//Single inheritance
class Father{                //super class, base class
public $a;
public $b;

function getValue($x, $y)
{
 $this->a=$x;
 $this->b=$y;
}
}

class Son extends Father{                   //child class 
    function displayValue()
    {
        echo " the value of A : $this->a and value of B: $this->b <br>";     //inheriting the properties

    }
}
$obj = new Son;  //object of child class
$obj->getValue(20, 30);  //object of child class accessing the method of parent class
$obj->displayValue();



//multilevel inheritance
class Shape{
    public $length;
    public $breadth;

    function setValue($l, $b){
        $this->length = $l;
        $this->breadth = $b;
    }
}
class Rectangle extends Shape
{
    public $area;
    function calculateArea(){
        $this->area = $this->length * $this->breadth;
        return $this->area;
    }
}
class Show extends Rectangle{
    function display(){
        
        echo "Area of rectangle is : ".$this->area."<br>";
    }
}
$ob = new Show;
$ob->setValue(20, 23);
$ob->calculateArea();
$ob->display();

//Hierarchical inheritance

class Calculation
{
    public $x;
    public $y;

    function setAttribute($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}
class Perimeter extends Calculation
{
    public $peri;
    function calculatePerimeter()
    {
    $this->peri = 2*($this->x + $this->y);
    }
    function displayPerimeter()
    {
        echo "Perimeter of rectangle is : ".$this->peri."<br>"; 
    }
}
class Area extends Calculation
{  
    public $area;
    function calculateArea(){
        $this->area = $this->x * $this->y;
    }

    function displayArea()
    {
        echo "Area of rectangle is : ".$this->area."<br>";
    }

}
$t1 = new Perimeter;      //object of class Perimeter
$t1->setAttribute(3, 2);
$t1->calculatePerimeter();
$t1->displayPerimeter();

$t2 = new Area;    //object of class Area
$t2->setAttribute(3, 2);
$t2->calculateArea();
$t2->displayArea();

//inheritance with default constructor

// class Mother{
//     function __construct(){
//         echo "parent constructor";
//     }
// }
// class Daughter extends Mother{
//     function __construct(){
//         echo "child constructor";
//     }
// }
// $c1 = new Daughter;


//inheritance with parameterized constructor
class Mother{
    public $a;
    function __construct($x){
        echo "parent constructor ";
        $this->a = $x;
        echo $this->a."<br>";
    }
}
class Daughter extends Mother{
    public $b;
    function __construct($x,$y){
        $this->b = $y;

        parent::__construct($x);
        echo "child constructor ";
        echo $this->b;
    }
}
$c1 = new Daughter(10,20);

?>