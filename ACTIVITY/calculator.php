<?php

class Addition {
    private $add;
    public function addition($num1, $num2)
	{
		$this->add = $num1 + $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new Addition();
$sum->addition(1, 1);
echo "ADDITION: ". $sum->calcu();
?>

<?php

class Multiplication {
    private $add;
    public function multiply($num1, $num2)
	{
		$this->add = $num1 * $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new Multiplication();
$sum->multiply(1, 1);
echo "MULTIPLICATION: ". $sum->calcu();
?>

<?php

class Subtraction {
    private $add;
    public function minus($num1, $num2)
	{
		$this->add = $num1 - $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new Subtraction();
$sum->minus(1, 1);
echo "SUBTRACTION: ". $sum->calcu();
?>

<?php

class Division {
    private $add;
    public function divide($num1, $num2)
	{
		$this->add = $num1 / $num2;
	}
    public function calcu() {
        return $this->add;
    }
}
$sum = new Division();
$sum->divide(1, 1);
echo "DIVISION: ". $sum->calcu();
?>
