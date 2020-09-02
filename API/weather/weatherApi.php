<?php
	include ("APIpasswordKey.php");
	$weather = "";
	$error = "";
	
	if ($_GET["city"]) {
		$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET["city"])."&appid=".$password);
		$weatherArray = json_decode($urlContents, true);
		if ($weatherArray["cod"] == 200) {
			$weather = "The weather in ".$_GET["city"]." is currently '".$weatherArray["weather"][0]["description"]."'.<br /> ";
			$tempInCelcius = round(($weatherArray["main"]["temp"] - 273.15),2);
			$weather .= " The temperature is ".$tempInCelcius."&deg;c.";
		} else {
			$error = "Couldn't find ".$_GET["city"].".";
		};
	} else if (isset($_GET["submit"])){
		$error = "Type the name of a city before submit";
	};
	

?>