<?php

include_once 'Circle.php';
class Cylinder extends Circle
{
public $height;
public function __construct($color, $radius,$height)
{
    parent::__construct($color, $radius);
    $this->height=$height;
}
    public function calculateArea()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(){
        return parent::calculateArea() * $this->height;
    }
    public function toString()
    {
       echo $this->getColor().$this->getRadius().$this->height;
    }
}