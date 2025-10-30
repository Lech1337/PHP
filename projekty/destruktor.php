<?php
class Fruit {
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }
    Function __destruct() {
        echo "The fruit is {$this ->name}.";
    }
}
$apple = new Fruit("Apple");