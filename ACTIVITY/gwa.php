<?php
class Average {
    public function addition($num1, $num2, $num3, $num4) {
        return ($num1 + $num2 + $num3 + $num4) / 4;
    }
}

$sum = new Average();
echo "GWA: " . $sum->addition(1.50, 1.50, 2.00, 1.25);

?>
