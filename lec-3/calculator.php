<?php

class Calculator
{
    private $result;

    function __construct($initialValue)
    {
        $this->result = $initialValue;
    }

    public function add($n)
    {
        $this->result += $n;
        return $this;
    }

    // subtract
    public function subtract($n)
    {
        $this->result -= $n;
        return $this;
    }
    // multiply
    public function multiply($n)
    {
        $this->result *= $n;
        return $this;
    }
    // divide
    public function divide($n)
    {
        $this->result /= $n;
    }

    public function getResult()
    {
        return $this->result;
    }
}


$c = new Calculator(10);

$c->add(5)->subtract(3)->multiply(2)->divide(4);


echo $c->getResult();
