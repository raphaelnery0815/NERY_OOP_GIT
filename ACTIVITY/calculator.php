<?php

class Addition {
    public function addition($num1, $num2) {
        return $num1 + $num2;
    }
}

$sum = new Addition();
echo "ADDITION: ". $sum->addition(1, 1);
?>

<?php
class Multiplication {
    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }
}

$sum = new Multiplication();
echo "MULTIPLICATION: ". $sum->multiply(1, 1);

?>

<?php
class Subtraction {
    public function minus($num1, $num2) {
        return $num1 - $num2;
    }
}

$sum = new Subtraction();
echo "SUBTRACTION: ". $sum->minus(1, 1);

?>

<?php
class Division {
    public function divide($num1, $num2) {
        return $num1 / $num2;
    }
}

$sum = new Division();
echo "DIVISION: ". $sum->divide(1, 1);

?>
