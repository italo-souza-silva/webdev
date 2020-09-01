<?php
	
	$weather = "";
	$error = "";
	
	if ($_GET["city"]) {
		$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".urlencode($_GET["city"])."&appid=e44bd71850adbc5315a25c2ec1df8244");
		$weatherArray = json_decode($urlContents, true);
		if ($weatherArray["cod"] == 200) {
			$weather = "The weather in ".$_GET["city"]." is currently '".$weatherArray["weather"][0]["description"]."'.<br /> ";
			$tempInCelcius = round(($weatherArray["main"]["temp"] - 273.15),2);
			$weather .= " The temperature is ".$tempInCelcius."&deg;c.";
		} else {
			$error = "Couldn't find ".$_GET["city"].".";
		};
	};

?>