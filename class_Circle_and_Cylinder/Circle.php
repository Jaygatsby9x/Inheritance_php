<?php


class Circle
{
    public $radius;
    public $color;
    public function __construct($color,$radius)
    {
        $this->color=$color;
        $this->radius=$radius;
    }

    public function setRadius($radius){
    $this->radius=$radius;
}
    public function getRadius(){
        return $this->radius;
    }
    public function setColor($color){
    $this->color=$color;
}
    public function getColor()
    {
        return $this->color;
    }
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
    public function toString(){
        echo $this->getColor().$this->getRadius();
    }
}