<?php

class Addition {
    private function addition($num1, $num2) {
        return $num1 + $num2;
    }

    public function calculate($num1, $num2) {
        return $this->addition($num1, $num2);
    }
}

$sum = new Addition();
echo "ADDITION: ". $sum->calculate(1, 1);
?>

<?php

class Multiplication {
    private function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function calculate($num1, $num2) {
        return $this->multiply($num1, $num2);
    }
}

$sum = new Multiplication();
echo "MULTIPLICATION: ". $sum->calculate(1, 1);
?>

<?php

class Subtraction {
    private function minus($num1, $num2) {
        return $num1 - $num2;
    }

    public function calculate($num1, $num2) {
        return $this->minus($num1, $num2);
    }
}

$sum = new Subtraction();
echo "SUBTRACTION: ". $sum->calculate(1, 1);
?>

<?php

class Division {
    private function divide($num1, $num2) {
        return $num1 / $num2;
    }

    public function calculate($num1, $num2) {
        return $this->divide($num1, $num2);
    }
}

$sum = new Division();
echo "DIVISION: ". $sum->calculate(1, 1);
?>
