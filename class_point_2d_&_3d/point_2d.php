<?php


class point_2d
{
public $x;
public  $y;
public function __construct($x ,$y)
{
$this->x=$x;
$this->y=$y;
}
public function setX($x){
    $this->x=x;
}
public function getX(){
    return $this->x;
}
public function setY($y){
    $this->y=y;
}
public function getY(){
        return $this->y;
}
public function setXY($x,$y){
    $this->x=$x;
    $this->y=$y;
}
public function getXY(){
    return [$this->x,$this->y];
}
public function toString(){
    echo  ($this->x . $this->y);
}
}