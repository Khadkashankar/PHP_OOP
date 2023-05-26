<?php
//public access modifier
echo "<h3> Public Access Modifier </h3>";

class Father{
    public $a; //by default public method and properties
    public function displayParent(){
        echo "value of parent class is $this->a";
    }
}
class Son extends Father{
function displayChild($x){
    $this->a = $x;
    echo "value of child class is $this->a <br>";
    $this->displayParent();
}
}
$obj = new Son;
$obj->displayChild(20);//accessing through the object of child class


echo "<h3> Private Access Modifier </h3>";
//private access modifier
class Shape{
    //private properties
    private $l = 20;
    private $b = 30;
   public $area;   //public property
   
    private function calculatePerimeter(){
     $this->peri = 2*($this->l + $this->b);
     echo "Perimeter of shape is ".$this->peri;
    }

    public function calculateArea(){
        $this->area = $this->l * $this->b;
        return $this->area;
    }


}
class Show extends Shape{
function displayArea(){
    echo "Area of shape is ".$this->area;
}
}
$object = new Show;
// $ob = new Shape;
// $ob->calculatePerimeter(); //cannot access from the same class object
// $object->calculatePerimeter(); //not accessing due to private method
$object->calculateArea();  //public function of parent class is accessing through the object of child class
$object->displayArea();


//Protected access modifier
echo "<h3> Protected Access Modifier </h3>";
class One{
    protected $a;
    protected function showOne(){
        $this->a = 20;
     echo "value of a: ".$this->a."<br>";
    }
}
class Two extends One {
    protected $b = 30;


}
class Three extends Two{
    function showThree(){
        One::showOne();
        echo "value of b: ".$this->b;
    }
}

$th = new  Three;    //object for class three
$th->showThree();
// $th->showOne(); protected method cannot access from the object of their class and other class
//protected properties and method are accessed within the class and derived class


?>