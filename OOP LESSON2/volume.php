<?php
class Volume {
    public $sideLength;

    public function calculateVolume($sideLength) {
        return pow($sideLength, 4);
    }
}

$square = new Volume(); 
$sideLength = 5; 
$volume = $square->calculateVolume($sideLength); 
echo "VOLUME OF SQUARE: ". $volume; 
?>