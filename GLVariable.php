<?php


$x = 30;
$y = 10;

function test(){
global $x , $y;
$x = $x + $y;

}

test();
echo $x;

?>