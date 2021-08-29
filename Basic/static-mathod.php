<?PHP

class Details{
    public $profession;
    static $name;
    static function name($n){
        self::$name = $n;
        echo "My Name Is ".self::$name."\n";
    }
    Public function work($w){
        $this->profession = $w;
        echo "I'm a professional ".$this->profession."\n";
    }
}

$bio = new Details();
Details::name("Sakib");
$bio->work("Wordpress Developer");