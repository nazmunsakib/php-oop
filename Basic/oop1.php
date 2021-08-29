<?php

class Profile{

    private $name = "Nazmun Sakib";
    private $age = "24 Years";
    public $profession = "Web Developer";
    function myName(){
        echo "{$this->name} \n";
    }
    function myAge(){
        echo "{$this->age} \n";
    }
    function myProfession(){
        echo "{$this->profession} \n";
    }
}

$myDetail = new Profile();

$myDetail->myName();
$myDetail->myAge();
$myDetail->myProfession();

//DATA Assign in Ovject mathod
//$myDetail->profession = "Wordpress Developer";
//echo $myDetail->profession;

echo PHP_EOL;
class Bio{
    public $name;
    public $age;
    public $profession;
    public function __construct($myName = 0, $myAge = 0, $myProfession = 0)
    {
        $this->name = $myName;
        $this->age = $myAge;
        $this->profession = $myProfession;
    }
    function myDetail(){
        if($this->name && $this->age && $this->profession ){
            printf("My name is: %s\n", $this->name);
            printf("I'm: %s Years old \n",  $this->age);
            printf("My profession is: %s\n", $this->profession);
        }else{
            echo "Your Bio is incomplete please provide yor (Name / Age & profession)  \n";
        }
        
    }

}

$bio = new Bio("Nazmun Sakib", 24);
$bio->myDetail();