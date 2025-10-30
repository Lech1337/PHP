<?php
class car {
    public $moc;
    private $model;
    private $marka;
        function __construct($moc) {
        $this->moc = $moc;
    }
    Function __destruct() {
        echo "The car is {$this ->moc}.";
    }
}

$model = new car();
$model->$model = 'Punto'; //OK
$model->$moc = '30 koni'; //ERROR
$model->$marka = 'Fiat'; //ERROR
?>