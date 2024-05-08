<?php
require_once './second.php';

use MyLibrary\MyClass;

$myObject = new MyClass();

$myObject->x = 1;
$myObject->y = 1;

echo $myObject->x . ' ' . $myObject->y;

$num = mt_rand(1,10);
$name = "VALUE($num)";
// define new constant
define($name, $num);
// echo new constant with random name
echo constant($name);