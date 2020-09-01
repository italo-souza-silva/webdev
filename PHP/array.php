<?p

$myArray = array("Peba", "Soldado Peba", "Oto Peba", "Marrum Peba");
$myArray[] ="PebaPeba";
$myArray[6] ="ThisPeba";
print_r($myArray);
echo $myArray[3];
echo "<br /><br />";
$anotherArray[0] = "torresmo";
$anotherArray[1] = "feijoada";
$anotherArray[2] = "orelha de porco";
$anotherArray["comida favorita"] = "abacate";
print_r($anotherArray);
echo "<br /><br />";
$thirdArray = array(
    "France" => "Paris",
    "USA" => "Washington",
    "Germany" => "Berlim");
    
print_r($thirdArray);
echo sizeof($thirdArray);

?>
