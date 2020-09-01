<?php

$family = array("Pai Peba", "Mae Peba", "Filho Peba", "Pebinha Junior");
$familyLength = count($family);

for ($i = 0; $i < $familyLength; $i++) {
    echo $family[$i]."<br />";
}

foreach ($family as $key => $value) {
    echo "Array item ".$key." is ".$value."<br />";
    
}
?>