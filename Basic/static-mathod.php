<?PHP

class Details{
    public $profession;
    public static $name;

    public function __construct($n){
        self::$name = $n;
    }
    static function name(){
        echo "My Name Is ".self::$name."\n";
    }

    public function work($w){
        $this->profession = $w;
        echo "I'm a professional ".$this->profession."\n";
    }
}

$bio = new Details('Sakib');
Details::name();
$bio->work("Wordpress Developer");

echo "<br>";
$bio2 = new Details('Rakib');
Details::name();
$bio->work("Softwar Developer");