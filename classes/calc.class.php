<?php

class Calc {

    //this properties don't have a value, we haven't set it yet
    //once we instantiate this class and create and object, we need to fill in these properties
    public $operator;
    public $num1;
    public $num2;

    // the information we have inside the construct parenthesis is actually the data that gets passed from the user inside the form. not the properties up here.
    public function __construct(string $one, int $two, int $three) {
        $this->operator = $one;
        $this->num1 = $two;
        $this->num2 = $three;
        
        /*once we create this object based on the class here, at the same moment we're going to take
        three different parameters ($one,$two,$three) and we're going to assign them to these properties inside the class($operator,$num1,$num2);
        */
    }

    public function calculator() {
        switch($this->operator) { //when we create the object the $operator property is going to be set,it will be created
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
            break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
            break;
            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
            break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
            break;
            default:
              echo "Error";
            break;

        }
    }


}

?>