# API FOLDER
<h2 align="center">Weather Project</h2>

This project is based on one of the Open Weather Map's API called: [Current weather data](https://openweathermap.org/current).  
As the name suggests, it returns the current weather information of any location on Earth.  
In this project, the city name is the parameter to define the area to get the information from.  
Before using the API in a project, it is needed to sign up, *for free*. After that, an API key to use one of the weather API is provided.  
With this API key on hand, it is possible to add to your project an URL that returns a JSON format array with the climate info.  

---

<h3 align="center">Table of Content:</h3>

*  **-gifs/** This is a folder with the gifs to this readme.	
*  **-APIpasswordKey.php** This file contains the API key. For safety, here is just a sample. Go to <a href="https://openweathermap.org/">OpenWeatherMap</a> to get yours.
*  **-background.jpg** This is the image used in the background. It was downloaded from Unsplash. According to them: Unsplash photos are made to be used freely. Check it out: <a href="https://unsplash.com/license">Unsplash</a>.
*  **-index.php** It's an HTML file, also is the main file of the project. It contains the title, the form(input and submit button), and the alert of the results of the consult. In the bootstrap folder, there are explanations about how these were done.
*  **-style.css** The background image was applied by these files. Also, the style of the body, image, container, and the margin of the weather message was done here.
*  **-weatherApi.php** This is where the API goes. The explanation of this process is below.

---
<h3 align="center">How Does it work?</h3>

The process starts with the **index.php** file, where the styles are applied(_style.php file_), and the users may type a name of a city and click on the submit button.  
After that, in the **weatherAPI.php** file, the _APIpasswordkey.php_ is included, and an if statements verify if a city name was typed, and if it does, its proceeds; else, an error message it will be sent back to the **index.php** file. The next step, if there is a city name input, it's to pass the API URL(_with the API key of the _APIpasswordkey.php_ file_) to a variable, which will hold the weather information as JSON format.  
Next, this variable is decoded in an array, that will be verified if the city typed has a valid code. If it does, then some information will be appended to a weather variable and sent back to the index file. Otherwise, an error message is sent back to the index file.
Back to the index file, in a PHP tag, an if statement will check if there is valid weather information of the city typed or if the API couldn't find that city. 

---

<h3 align="center">API sample code</h3>

	<?php
		include ("APIpasswordKey.php");
		$weather = "";
		$error = "";

		if ($_GET["city"]) {
			$urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_GET["city"]."439d4b804bc8187953eb36d2a8c26a02");
			$weatherArray = json_decode($urlContents, true);
			$weather = "The weather in ".$_GET["city"]." is currently '".$weatherArray["weather"][0]["description"]."'.<br /> ";
			$tempInCelcius = round(($weatherArray["main"]["temp"] - 273.15),2);
			$weather .= " The temperature is ".$tempInCelcius."&deg;c.";
		};	
	?>

<h2> Check it out:</h2>

<h4 align="center">City name correct</h4>
<img src="gifs/apiWorking.gif" width="100%" height="100%" />

<h4 align="center">City name wrong</h4>
<img src="gifs/apiNotWorking.gif" width="100%" height="100%" />

<p align="center">Click <a href="http://ldkwebdev-api-com.stackstaging.com/weather/"><sup>**here**</sup></a> to try for yourself!</p>

