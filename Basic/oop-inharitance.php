<?php 

//OOP Inheritance / Uttor Adikar shutre

class Human{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }
    public function run(){
        echo " $this->name Is Running\n";
    }
    public function sleep(){
        echo " $this->name Is Sleeping";
    }
}

$human = new Human("Sakib");
$human->run();

class Animal extends Human{

}

$animal = new Animal("Tom");
$animal->sleep();



echo PHP_EOL;
echo PHP_EOL;
//Parent Class And Child Class

class ParentClass{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHello();
    }
    public function sayHello(){
        echo " Hello From $this->name ";
    }
}

class ChildClass extends ParentClass{
    public function sayHello(){
        echo "Hello World From $this->name \n";

        parent::sayHello();
    }
}
$pc = new ChildClass("sakib");


echo PHP_EOL;
echo PHP_EOL;


//Foruse For wright a good Code
Class Foods{

    public $foods;

    public function __construct(){
        $this->foods = [];
    }

    function addfood($newFood){
        array_push($this->foods, $newFood);
    }

    function getFood(){
       return count($this->foods);
    }

}
class Mango{

}
class Banana{

}
class Apple{
  
    
}

$food = new Foods();

$food->addFood(new Mango());
$food->addFood(new Banana());
$food->addFood(new Apple());
$food->getFood();
