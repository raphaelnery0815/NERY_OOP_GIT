<?php
class Apple {
    private $taste = "sweet";
    public $color = "red";

    public function taste($a) {
        return $a;
    }
 
    private $texture;

    public function texture($a) {
        return $a;
    }
}
$fruits = new Apple();

$fruits->color = "blue";

echo $fruits ->texture("rough ");

echo $fruits->taste("sour "); 

echo $fruits->color; 
?>