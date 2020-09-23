# WEBDEV REPOSITORY

<h2>PHP Section</h2>

<h3>Content</h3>

<a href="#intro">Introduction</a>  
<a href="#howto">How to use PHP</a>  
<a href="#exe">Exercises and Project</a>  
<a href="#biblio">References</a>  

---

<a name="intro"><h3>Introduction</h3></a>

PHP is the programming language used in web development on the server-side. "PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more."In this course, PHP was used to create arrays, get/post variables, loops, and a project.
This project consists of a contact form where the users could send an email to some web page. Check in the project folder for more info. 

---

<a name="howto"><h3>How to use PHP</h3></a>

<h4> Set up the server-side </h4>
 
 Until now, all the processing was done on the client-side, with the browser doing the rendering, but now, it is needed to set the backend. There are different ways to do that, a common way is to host your files in a web hosting provider. The one used here was: [ecohosting](https://www.ecowebhosting.co.uk/). But, you can host your files locally. To do that, follow the instructions below:
 
 1- Download XAMPP;  
 2- Install XAMPP;  
 3- In the XAMPP panel, start the server;  
 4- Open the xampp folder, then open htdocs and delete all folders inside of it;  
 5- Place the files here, and DONE!  

 <h4> Important concepts</h4>
 
 <sup>Check the [Javascript Readme](https://github.com/ItaloSSilva19/webdev/blob/master/JAVASCRIPT/README.md#howto) to see some important concepts.</sup>
 
 **Variable**: In PHP, most of the time, the variable collect from the HTML file. To connect them, there are two methods: $_GET and $_POST:
 *  **Get Method**: "PHP $_GET is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get". $_GET can also collect data sent in the URL."<a href="#biblio">¹</a>
 *  **Post Method**: "PHP $_POST is a PHP super global variable which is used to collect form data after submitting an HTML form with method="post". $_POST is also widely used to pass variables."² Also, the post variable is safer than get. If there is the need to store sensitive data, always use the post method.
 
 **PHP Database Connection**: To connect to a database, it is a little tricky. To do that, it is needed to open a connection.³(w3school) Check how to do it in the <a href="#exe">code sample section</a>
 
 <sup>To learn more about php, check the links bellow!</sup>
 
  <h4> PHP links</h4>
  
[PHP tutorial](https://www.w3schools.com/php/default.asp)  
[PHP documentation](https://www.php.net/)  
[PHP framework documentation](https://laravel.com/)  

---
 
<a name="exe"><h3>Exercises and Project: Code Sample</h3></a>

*  <h5>Exercises:</h5>

*  *  **-variable.php:** *How to create a variable.*

<h6 align="center">Code Sample</h6>

```
$name = "Peba";
```

*  *  **-get_variables.php:** *How to use $_GET.*

<h6 align="center">Code Sample</h6>

```
    if ($_GET) {
        $number = ($_GET["number"]);
        $i = ($_GET["number"] - 1);
        $notPrime = false;
```

*  *  **-post_variable.php:** *How to use $_POST.*

<h6 align="center">Code Sample</h6>

```
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
```

*  *  **-array.php:** *Create an array in php.*

<h6 align="center">Code Sample</h6>

```
$myArray = array("Peba", "Soldado Peba", "Oto Peba", "Marrum Peba");
$myArray[] ="PebaPeba";
$myArray[6] ="ThisPeba";
print_r($myArray);
echo $myArray[3];
```

*  *  **-if_statement.php:** *How to create a if statement.*

<h6 align="center">Code Sample</h6>

```
    if ($_GET) {
        $number = ($_GET["number"]);
        $i = ($_GET["number"] - 1);
        $notPrime = false;
```

*  *  **-loop.php:** *How to create a loop.*

<h6 align="center">Code Sample</h6>

```
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
```

*  *  **-while_loop.php:** *How to create a while loop.*

<h6 align="center">Code Sample</h6>

```
$myArray = array("P1", "P2", "P3", "P4");

$arrayLength = count($myArray);
$i = 0;
while ($i < $arrayLength) {
    echo $myArray[$i]."<br />";
    $i++;
}
```
*  *  **-Open a connection**: *How to open a connection:*

```
<?php
	$link = mysqli_connect("host","my_user","my_password","my_db");
		if (mysqli_connect_error()) {
			die ("Database Connection Error");
		}
?>
```


*  <h5>Project:</h5>

*  *  **-Contact form:** * This project is a form that send an email to the website company. Check the [project folder](https://github.com/ItaloSSilva19/webdev/tree/master/PHP/miniProject_A_Contact_Form) for more info!


<a name="biblio"><h3>References</h3></a>

¹ PHP $_GET. Available at:https://www.w3schools.com/php/php_superglobals_get.asp. accessed on 23 sep. 2020.  
² PHP $_POST. Available at:https://www.w3schools.com/php/php_superglobals_post.asp. accessed on 23 sep. 2020.  
³ PHP mysqli connect() function. Available at:https://www.w3schools.com/php/func_mysqli_connect.asp. accessed on 23 sep. 2020.  
