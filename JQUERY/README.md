# WEBDEV REPOSITORY

<h2>jQuery Section</h2>

<h3>Content</h3>

<a href="#intro">Introduction</a>  
<a href="#exe">Exercises and Project: Code Sample and Images</a>  
<a href="#biblio">References</a>  



---

<a name="intro"><h3>Introduction</h3></a>

To use this sections, just download the files and open it in your browser. **Jquery is a Javascript library.** It can be used to do more with less coding.<a href="#biblio">¹</a> But there are differences between them. While "JavaScript and jQuery are mentioned so interchangeably, it can be confusing to separate the two. Just remember: JavaScript is a standalone programming language, while jQuery is a collection of JavaScript code (not its own language)"<a href="#biblio">²</a>(MORRIS).  

This library makes it **easier** to do things like:
-HTML document transversal and manipulation;
-Event handling;
-Animation;
-Ajax.


In this course, it was made an introduction to Jquery. Here, in these files, there are examples of animating, ajax, how to detect a click, changing the style, etc. At the end of this section, there is a project. Also check the [jQuery documentation](https://api.jquery.com/) to learn more about it.

---

<a name="exe"><h3>Exercises and Project: Code Sample and Images</h3></a>

*  <h5>Exercises:</h5>

*  *  **-ajax.html:** *How to use ajax.*

<h6 align="center">Code Sample</h6>

```
 <script type="text/javascript">
    $.ajax("info.txt").done(function(data){
        $("p").html(data);
        
    }).fail(function(){
        alert("could not get data");
    });
        
      
      
      
  </script>
  ```

*  *  **-animating.html:** *How to apply animation with jquery.*

<img src="http://g.recordit.co/RBIfj9I4OJ.gif"></img>

*  *  **-Changing_Website_Content.html:** *How to change the content of a webpage.*

<img src="http://g.recordit.co/aIrOd9jcbe.gif"></img>

*  *  **-Changing_Website_Style:** *How to change the style of a webpage.*

<img src="http://g.recordit.co/NTvHChT6wF.gif"></img>

*  *  **-Detecting_a_click.html:** *How to detect a click.*

<img src="http://g.recordit.co/Po9q87z15K.gif"></img>

*  *  **-Fade_out.html:** *How to apply a fade out effect.*

<img src="http://g.recordit.co/h9S413f70m.gif"></img>

*  *  **-using_jQyery.html:** *How to check if jQuery is working*

<h6 align="center">Code Sample</h6>

```		
  <script type="text/javascript">
		if (typeof jQuery == "undefined") {
			alert("not installed")
    } else {
	  		alert("installed")
  		}
		
	</script>
```

*  *  [**-regEx**](https://github.com/ItaloSSilva19/webdev/tree/master/JQUERY/regEx) *How to use regEx with jQuery.*


<h6 align="center">Code Sample</h6>

```
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
```

*  <h5>Project:</h5>	
	
*  *  [**-Project_codePalyer**](https://github.com/ItaloSSilva19/webdev/tree/master/JQUERY/Project_codePlayer).*This project consists of making a code player where you can code and see the output on the same page. Also, you can code in HTML, CSS, and Javascript.*

<img src="http://g.recordit.co/9Lwo2xj4LS.gif"></img>

---

<a name="biblio"><h3>References</h3></a>

¹ ² MORRIS, Scott. TECH 101: WHAT IS JQUERY, AND WHAT IS IT USED FOR? Available at: https://skillcrush.com/blog/what-is-jquery-used-for/. Accessed on: 07 sep. 2020.
