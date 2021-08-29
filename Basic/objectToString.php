<?PHP

class FavFruts{

    private $fruts;

    function __construct($newFruts){
        $this->fruts = $newFruts;
    }

    function __toString()
    {
        return "My favourit Fruts is {$this->fruts}";
    }

}

$ff = new FavFruts("Mangu");

echo $ff;
