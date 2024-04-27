<?php
class Calc {

    public $num1;
    public $num2;
    public $num3;
    public $num4;
    public $cal;
    private $result;

    public function __construct($num1Inserted, $num2Inserted, $num3Inserted, $num4Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->num2 = $num2Inserted;
        $this->num3 = $num3Inserted;
        $this->num4 = $num4Inserted;
        $this->cal = $calInserted;
        $this->result = null;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'div':
            $result = ($this->num1 + $this->num2 + $this->num3 + $this->num4) / 4;
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