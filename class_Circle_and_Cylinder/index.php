<?php
include_once 'Circle.php';
include_once 'Cylinder.php';
$circle = new Circle('red', 3);
$circle->toString();
$cylinder = new Cylinder('blue', 3 , 4);
$cylinder->toString();