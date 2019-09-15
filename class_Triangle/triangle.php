<?php
include_once 'shape.php';

class triangle extends shape
{
public $side1;
public $side2;
public $side3;
    public function __construct($name,$side1,$side2,$side3)
{
   parent::__construct($name);
    $this->side1=$side1;
    $this->side2=$side2;
    $this->side3=$side3;
}
public function getPerimeter(){
    return ($this->side1+$this->side2+$this->side3);
}
public function getHalfPerimeter(){
 return ($this->getPerimeter()/2);
}
    public function Subtraction1(){
        return $this->getHalfPerimeter()-$this->side1;
    }

    public function Subtraction2(){
        return $this->getHalfPerimeter()-$this->side2;
    }

    public function Subtraction3(){
        return $this->getHalfPerimeter()-$this->side3;
    }
public function getArea(){
    return sqrt(($this->getHalfPerimeter()*$this->Subtraction1()*$this->Subtraction2()*$this->Subtraction3()));
}
public function toString(){
    echo ('chu vi:'. $this->getPerimeter());
    echo '<br>';
    echo ('nua chu vi:'.$this->getHalfPerimeter());
    echo '<br>';
    echo ('dien tich:' .$this->getArea());
}
}