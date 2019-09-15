<?php

include_once 'point.php';
class Move extends point
{
public $xSpeed;
public $ySpeed;
public function __construct($x, $y,$xSpeed,$ySpeed)
{
    parent::__construct($x, $y);
    $this->xSpeed=$xSpeed;
    $this->ySpeed=$ySpeed;
}
    public function setXSpeed($xSpeed){
        $this->xSpeed=$xSpeed;
    }
    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function setYSpeed($ySpeed){
        $this->ySpeed=$ySpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed=$xSpeed;
        $this->ySpeed=$ySpeed;
    }
    public function getSpeed(){
    return [$this->xSpeed,$this->ySpeed];
    }
    public function toString()
    {
       echo ($this->x.$this->y.$this->xSpeed.$this->ySpeed);
    }
    public function Move($x,$y,$xSpeed,$ySpeed)
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->x.$this->y;
    }
}