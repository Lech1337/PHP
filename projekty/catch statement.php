<?php
function divide($dividend, $divisor){
    if($divisor ==0){
        throw new exception("division by zero");
        }
    return $dividend/ $divisor;
    }
try {
    echo divide(5,0);
}
catch (exception $e){
    echo "unable to divide";
}
?>
