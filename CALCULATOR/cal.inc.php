<?php
class Calc {

    public $num1;
    public $num2;
    public $cal;
    private $result;

    public function __construct($num1Inserted, $num2Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->cal = $calInserted;
        $this->result = null;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sub':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
        case 'div':
            $result = $this->num1 / $this->num2;
            break;

        default:
            $result = "Error";
            break;
      }
      $this->result = $result;
      return $result;
    }

    public function getResult(){
        return $this->result;
    }

}
 ?>