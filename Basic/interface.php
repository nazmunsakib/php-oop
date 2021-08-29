<?php

interface Human{
    public function knickName($newname);
    public function MainName($newname);
}
class Name implements Human{
    public function knickName($newName){
        echo "My KnickName is $newName \n";
    }
    public function MainName($newName){
        echo "My Name is $newName \n";
    }
}

interface Animal extends Human{

}

$nm = new Name();

$nm->knickName("Arif");
$nm->MainName("Sakib");

echo PHP_EOL;
echo PHP_EOL;

//Interface live example

class districtCollection implements IteratorAggregate{
    protected $districts;

    function __construct()
    {
        $this->districts = [];
    }

    function addDistrict($newDistrict){
        array_push($this->districts, $newDistrict );
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

}

$districts = new districtCollection;

$districts->addDistrict("Comilla");
$districts->addDistrict("Dhaka");
$districts->addDistrict("Chattomgram");
$districts->addDistrict("Rajshahi");

foreach ($districts as $district) {
    echo $district."\n";
}


