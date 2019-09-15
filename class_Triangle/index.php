<?php
include_once 'shape.php';
include_once 'triangle.php';
$shape=new shape("tam giac");
$triagle=new triangle("tam giac",3,4,5);
$triagle->toString();