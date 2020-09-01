<?php

    if ($_GET) {
        $number = ($_GET["number"]);
        $i = ($_GET["number"] - 1);
        $notPrime = false;
        
        while ($i > 1) {
            if (($number % $i) == 0) {
                $notPrime = true;
            }    
            $i--;

            
        }
    } 
    if ($notPrime) {
        echo "This is not a prime number: ".$number;
    } else {
        echo "This is a prime number: ".$number;
    }    

 
?>

<p>Please enter a whole number</p>

<form>
    <input name="number" type="number">
    <input type="submit" value="Go!">
    
    
</form>