<?php
class Average {
    private $gwa;
    public function calculateAverage($num1, $num2, $num3, $num4) {
        $this->gwa = ($num1 + $num2 + $num3 + $num4) / 4;
        return $this->gwa;
    }
}
$sum = new Average();
echo "GWA: ". $sum->calculateAverage(99, 1.50, 2.00, 1.25);
?>