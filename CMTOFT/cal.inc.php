<?php
class Calc {

    public $num1;
    public $cal;
    private $result;

    public function __construct($num1Inserted, $calInserted) {
        $this->num1 = $num1Inserted;
        $this->cal = $calInserted;
        $this->result = null;
    }

    public function calcMethod() {
      switch ($this->cal) {
        case 'cmft':
            $result = ($this->num1) * 0.0328084;
            break;
        case 'ftcm':
            $result = ($this->num1) * 30.48;
            break;
        case 'cmmm':
            $result = ($this->num1) * 10;
            break;
        case 'cmic':
            $result = ($this->num1) * 0.393701;
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