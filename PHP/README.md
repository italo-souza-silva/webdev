# WEBDEV REPOSITORY

<h2 align="center">Udemy's PHP Section</h2>

PHP is the programming language used in web development on the server-side. "PHP is mainly focused on server-side scripting, so you can do anything any other CGI program can do, such as collect form data, generate dynamic page content, or send and receive cookies. But PHP can do much more."In these course PHP was used to  create arrays, get/post variables, loops, and a project.
This project consists in a contact form were the users could sent an email to some web page. Check in the project folder for more info. 


<h3 align="center">Table of Content:</h3>

*  <h5>Files:</h5>

*  *  **-array.php:** *Create an array in php.*

<h6 align="center">Code Sample</h6>

```
$myArray = array("Peba", "Soldado Peba", "Oto Peba", "Marrum Peba");
$myArray[] ="PebaPeba";
$myArray[6] ="ThisPeba";
print_r($myArray);
echo $myArray[3];
```

*  *  **-get_variables.php:** *How to use $_GET.*

<h6 align="center">Code Sample</h6>

```

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

*  *  **-variable.php:** *How to create a variable.*

<h6 align="center">Code Sample</h6>

```
$name = "Peba";
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
