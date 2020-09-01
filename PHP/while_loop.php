<?php

$i = 5;
$flag = 1;
while ($flag <=10) {
    echo $i."<br />";
    $i +=5;
    $flag ++;
}


$myArray = array("P1", "P2", "P3", "P4");

$arrayLength = count($myArray);
$i = 0;
while ($i < $arrayLength) {
    echo $myArray[$i]."<br />";
    $i++;
}
?>