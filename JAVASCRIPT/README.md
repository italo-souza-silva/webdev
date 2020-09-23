# WEBDEV REPOSITORY

<h2 align="center">Javascript Section</h2>

<h3>Content</h3>

<a href="#intro">Introduction</a>  
<a href="#howto">How to use this section</a>  
<a href="#exe">Exercises and Project: Code sample and images</a>  
<a href="#biblio">References</a>
---

<a name="intro"><h3>Introduction</h3></a>

Javascript is the most popular programming language. It was standardized to ECMAScript<a href="#biblio">¹</a> as a cross-platform Internet standard for scripting, but everyone calls it Javascript. "JavaScript can be learned quickly and easily and used for a wide variety of purposes, from simply enhancing the functionality of a website to running games and web-based software. Better still, there are thousands of JavaScript templates and applications available for free thanks to sites like Github"<a href="#biblio">²</a>(DOMANTAS, 2019). Like CSS, **Javascript can be applied into HTML as an internal or external file.**  
In this section, Javascript was used to create iterators, conditional statements, functions, buttons, loops, and more.Also at the end a project was developed. 

---

<a name="howto"><h3>How to use this section:</h3></a>

*  <h4>Download or installation:</h4>

There is no need to install anything to follow through this readme, also, there is no need to download the files, but it could be a lot easier to run the files in your browser. Also, to see the code, if you have downloaded the file, it is possible to execute it in any text editor.

*  <h4>Important concepts</h4>

**Variable:** "Variables are used to **store information** to be referenced and manipulated in a computer program. They also provide a way of labeling data with a **descriptive name**, so our programs can be understood more clearly by the reader and ourselves."<a href="#biblio">³</a> Each programming language has its way to create a variable, and the javascript create a variable this way: Declare a variable with the var statement, and define the variable name; and in javascript is optional to assign a value to the variable, by default, the value is *undefined*. 

**Conditional statement:** "Conditional statements are used to perform different actions based on different conditions."<a href="#biblio">⁴</a>

**Loops statements:** "JavaScript loops are used to repeatedly run a block of code - until a certain condition is met. When developers talk about iteration or iterating over, say, an array, it is the same as looping. JavaScript offers several options to repeatedly run a block of code, including while, do while, for and for-in."<a href="#biblio">⁵</a>

**Functions:** "Functions are one of the fundamental building blocks in JavaScript. A function in JavaScript is similar to a procedure—a set of statements that performs a task or calculates a value, but for a procedure to qualify as a function, it should take some input and return an output where there is some obvious relationship between the input and the output."<a href="#biblio">⁶</a>

<sup> **Ps**.: *These concepts are not exclusive for javascript, they are universal.*</sup>  
<sup> **Ps**.: *In the <a href="#exe">Exercises section</a>, you can see the code of those process explained above.*</sup>

*  <h4>Links to learn more about it:</h4>

[Javascript](https://developer.mozilla.org/en-US/docs/Web/JavaScript)  
[Variable](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/var)  
[Conditional statement](https://javascript.info/ifelse)  
[Loops statements](https://www.freecodecamp.org/news/javascript-loops-explained-for-loop-for/)  
[Funtions](https://www.geeksforgeeks.org/functions-in-javascript/)  

---

<a name="exe"><h3>Exercises and Project: Code sample and images</h3></a>

*  <h4>Exercises:</h4>

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
*  *  **-variables.html** *How to create a variable*.

<h6 align="center">Code Sample</h6>

```	
  <script type="text/javascript"> 	
    var x = 5;
	</script>

```

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

<sup>*Code explanation*: First verifies if the condition is true. If it is, then it will execute the *Do something*, if it doesn't, it will execute the *"else condition"*.</sup>

*  *  **-loops** *How to create a for loop*.

<h6 align="center">Code Sample</h6>

```	
  <script type="text/javascript"> 	
    for (var i = 0; i < tweets.length; i++) {
				tweetsString = tweetsString + "<p>" + tweets[i] + "</p>";
			}
	</script>

```

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

*  <h4>Project:</h4>	
	
*  *  -[**REACTIONS_PROJECT:**](https://github.com/ItaloSSilva19/webdev/tree/master/JAVASCRIPT/REACTIONS_PROJECT) *It consists of a game that calculates the time that the user takes to click at a circle or a rectangle that appears and disappears randomly in the browser*. 

<img src="http://g.recordit.co/EY07qQFDXf.gif"></img>

---

<a name="biblio"><h3>References</h3></a>:

¹ ² DOMANTAS, G. What is JavaScript? A basic introduction to JS for beginners. 2019. Available at: https://www.hostinger.com/tutorials/what-is-javascript. Accessed on: 07 sep. 2020.  
³ What is a variable?. Available at:https://launchschool.com/books/ruby/read/variables. accessed on: 23 sep. 2020.  
⁴ Javascript if else and else if. Available at:https://www.w3schools.com/js/js_if_else.asp. accessed on: 23 sep. 2020.  
⁵ Javascript loops. Available at:https://www.dofactory.com/javascript/loops. accessed on: 23 sep. 2020.  
⁶ Functions-Javascript. Available at:https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Functions#:~:text=A%20function%20in%20JavaScript%20is,the%20input%20and%20the%20output.. accessed on: 23 sep. 2020.  
