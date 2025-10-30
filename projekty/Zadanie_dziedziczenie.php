<?php
class osoba {
    public $imie;
    public $wzrost;
    public function __construct($imie,$wzrost) {
        $this->imie =$imie;
        $this->wzrost =$wzrost;
    }
    protected function intro(){
        echo "ta osoba to {$this->imie} i ma wzrost {$this->wzrost}.";
    }
}
class uczen extends osoba {
    public function message() {
        echo "Am i a fruit or a berry?";
    }
}
$uczen = new Strawberry("Strawberry", "red");
$uczen ->message();
$uczen->intro();
?>