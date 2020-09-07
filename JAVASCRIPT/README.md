# WEBDEV REPOSITORY

<h2 align="center">Udemy's Javascript Section</h2>

Javascript is the most popular programming language. It was standardized to ECMAScript<a href="#biblio">¹</a> as a cross-platform Internet standard for scripting, but everyone calls it Javascript. "JavaScript can be learned quickly and easily and used for a wide variety of purposes, from simply enhancing the functionality of a website to running games and web-based software. Better still, there are thousands of JavaScript templates and applications available for free thanks to sites like Github"<a href="#biblio">²</a>(DOMANTAS, 2019). Like CSS, Javascript can be applied into HTML as an internal or external file.  
In this section, Javascript was used to create iterators, conditional statements, functions, buttons, loops, and more.Also at the end a project was developed. 

---

<h3 align="center">Table of Content:</h3>

---

*  <h5>Files:</h5>

*  *  **-array.html** *How to create an array*.  

<h6 align="center">Code Sample</h6>

```
	<script type="text/javascript">
		var firstArray = new Array();
		firstArray[0] = "pizza";
		firstArray[1] = "chocolate";
		firstArray.push("ice cream");
		firstArray.splice(1, 0, "steak");
		firstArray.push("salad");
		firstArray.splice(2,2);
		console.log(firstArray);
	
	</script>
```

*  *  **-Disappearing_circles_MINI_CHALLENGE.html** *How to create a clickable div element*.

<h6 align="center">Code Sample</h6>

```
  <body>

    <div class="circles" id="red"></div>
    <div class="circles" id="blue"></div>
    <div class="circles" id="green"></div>


    <script type="text/javascript">
      document.getElementById("red").onclick = function() {document.getElementById("red").style.display = "none";}
      document.getElementById("blue").onclick = function() {document.getElementById("blue").style.display = "none";}
      document.getElementById("green").onclick = function() {document.getElementById("green").style.display = "none";}			
    </script>
  </body>
```

<img src="http://g.recordit.co/Vz3OpQhSzF.gif"></img>

*  *  **-functions.html** *How to create a function*.

<h6 align="center">Code Sample</h6>

```
	function fingerGuess(answer) {
		var guess = Math.random();
			guess = guess * 6;
			guess = Math.floor(guess);
			if (guess == answer) {
				return (true);
							
			}	else {
					return(false);
			}
	}

```


*  *  **-if_statements.html** *How to create a coditional structure*.

<h6 align="center">Code Sample</h6>

```
<script type="text/javascript">
	if (condition is true) {
		Do something;
	}	else {
		Do another thing;	
	  }
</script>
```

*Code explanation*: First verifies if the condition is true. If it is, then it will execute the *Do something*, if it doesn't, it will execute the *"else condition"*.

*  *  **-Javascript_button.html** *How to create a button in Javascript*.

<h6 align="center">Code Sample</h6>

```
<script type="text/javascript">
  document.getElementById("button").onclick = function() {			
		alert(" button clicked and text updated!");
		document.getElementById("text").innerHTML = "Hello brow!";			
	}
		
  document.getElementById("2ndbutton").onclick = function() {			
		document.getElementById("2ndtext").innerHTML = document.getElementById("2ndtext").innerHTML + " easier than python!";
	}
			
  document.getElementById("3rdbutton").onclick = function() {
		document.getElementById("3rdtext").innerHTML = "something";
	}
</script>
```

<img src="http://g.recordit.co/X7nCoFAGbY.gif"></img>

*  *  **-Javascript_intro.html** *Section introduction. How to use Js inline and internal*.

<h6 align="center">Code Sample</h6>

```
<body>		 
	<button onclick="alert('hi!')">Click me!</button><!--INLINE JAVASCRIPT-->
	<p id="text">This is just html.</p>
		
  <script type="text/javascript"> // INTERNAL JAVASCRIPT		
		alert('Page is loaded!');
		document.getElementById("text").innerHTML = "This text was modified by Javascript";	
	</script>
		
</body>
```

*  *  **-loops** *How to create a for loop*.

<h6 align="center">Code Sample</h6>

```	
  <script type="text/javascript"> 	
    for (var i = 0; i < tweets.length; i++) {
				tweetsString = tweetsString + "<p>" + tweets[i] + "</p>";
			}
	</script>

```

*  *  **-variables.html** *How to create a variable*.

<h6 align="center">Code Sample</h6>

```	
  <script type="text/javascript"> 	
    var x = 5;
	</script>

```

---

*  <h5>Project:</h5>	
	
*  *  -[**REACTIONS_PROJECT:**](https://github.com/ItaloSSilva19/webdev/tree/master/JAVASCRIPT/REACTIONS_PROJECT) *It consists of a game that calculates the time that the user takes to click at a circle or a rectangle that appears and disappears randomly in the browser*. 

<img src="http://g.recordit.co/EY07qQFDXf.gif"></img>
---

<h3 align="center"><a name="biblio">Bibliography</a>:</h3>

¹ ² DOMANTAS, G. What is JavaScript? A basic introduction to JS for beginners. 2019. Available at: https://www.hostinger.com/tutorials/what-is-javascript. Accessed on: 07 sep. 2020.
