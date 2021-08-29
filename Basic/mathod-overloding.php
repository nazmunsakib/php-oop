<?php 

class Mobile{
    private $display, $battery, $internat;

    function __construct($displaySize="", $batteryMh="", $internetCp="")
    {
        $this->display = $displaySize;
        $this->battery = $batteryMh;
        $this->internat = $internetCp;
    }

    function setDisplay($NewDisplay){
        $this->display = $NewDisplay;
    }
    function getDisplay(){
       return $this->display."\n";
    }
}

$myMobile = new Mobile("6 inc");
$myMobile->setDisplay("7 Inc");
echo $myMobile->getDisplay();

// Overload With __set() / __get() Masic mathod

class NewMobile{

    protected $display, $battery, $internat;

    function __construct($displaySize="", $batteryMh="", $internetCp="")
    {
        $this->display = $displaySize;
        $this->battery = $batteryMh;
        $this->internat = $internetCp;
    }

    function __set($name, $value){
        $this->$name = $value;
    }

    function __get($name){
        return $this->$name."\n";
    }

}

$nMobile = new NewMobile("6 inc");

$nMobile->display = "8 inc";
$nMobile->battery = "10hr";
$nMobile->internat = "5G";

echo $nMobile->display;
echo $nMobile->battery;
echo $nMobile->internat;
