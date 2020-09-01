<?php
    $arrayName = array("Peba", "Pebinha", "Senhor Peba", "Oto Peba");
    
    if ($_POST) {
        $dontKnowYou = true;
        foreach ($arrayName as $value) {
            if ($value == $_POST["name"]) {
                echo "Hello, ".$_POST["name"].", my friend!";
                $dontKnowYou = false;
                $break;
            }
        }
    }
    if ($dontKnowYou) {
        echo "I don't know you!";
    }
?>

<p>Please enter your name</p>

<form method="post">
    <input name="name" type="text">
    <input type="submit" value="Go!">
    
    
</form>