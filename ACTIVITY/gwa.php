<?php
class Average {
    private function addition($num1, $num2, $num3, $num4) {
        return ($num1 + $num2 + $num3 + $num4) / 4;
    }

    public function calculateAverage($num1, $num2, $num3, $num4) {
        return $this->addition($num1, $num2, $num3, $num4);
    }
}

$sum = new Average();
echo "GWA: " . $sum->calculateAverage(1.50, 1.50, 2.00, 1.25);
?>