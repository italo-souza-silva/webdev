# WEBDEV REPOSITORY

<h2 align="center">CSS Section</h2>

<h3>Contents</h3>

<a href="#intro">Introduction</a>  
<a href="#HWA">HOW TO APPLY CSS</a>  
<a href="#working">Working with CSS</a>  
<a href="#exe">Exercises and Project</a>  
<a href="#biblio">References</a>

---

<a name="intro"><h3>Introduction</h3></a>

*Cascading Style Sheets*-**CSS** describes how HTML elements are to be displayed on screen, and it can control the layout of multiple web pages all at once.<a href="#biblio">¹</a> CSS arrived to solve a big issue that was arrising in the web development world. This problem was that developers were using HTML for styling, and it wasn't meant to that.(In the [HTML folder](https://github.com/ItaloSSilva19/webdev/tree/master/HTML) there are the explanation for this)."When tags like <font>, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process. To solve this problem, the World Wide Web Consortium (W3C) created CSS. CSS removed the style formatting from the HTML page!"<a href="#biblio">²</a>   
Also, another important feature in CSS is the possibility to create **classes and ids**. They seems the same in a first glance, but there is a fundamental difference between them. While a class name can be applied to several elements on a single page, an id name must be unique. One of the reasons is that "JavaScript depends on there being only one page element with any particular id, or else the commonly used `getElementById` function wouldn’t be dependable."
  
---

<a name="HWA"><h3>HOW TO APPLY CSS:</h3></a>

There are three usual ways to apply CSS to an HTML document: *Inline, Internal, and external*. 

*  **Inline CSS** is used as an attribute inside an HTML element:

<h6 align="center">Code Sample</h6>

```
<p style="color:red;">This is a text example.</p>
```

<sup>**Code explanation**: In that sample code, a CSS attribute inside an HTML paragraph tag is used to change the text's color to red.</sup>

*  **Internal CSS** is used to apply CSS styling inside a <style> element:
  
  <h6 align="center">Code Sample</h6>

  ```
<!DOCTYPE html>
<html>
  <head>
    <style>
    body {background-color: red;}
    h1   {color: yellow;}
    p    {color: brown;}
    </style>
  </head>
  <body>
    <h1>This Internal CSS will be aplied here</h1>
    <p>Also here.</p>
  </body>
</html>
  ```

<sup>**Code explanation**: In that sample code, an CSS element <style> is defined inside the head tags<head> of an HTML document. Inside of it, CSS is applied to change the colors of any h1 to yellow, and any p tags to brown. Also, it changes the background color to yellow.</sup>

*  **External CSS** is used in a CSS file. This file is inserted inside an HTML document as a link element.

<h6 align="center">Code Sample</h6>

```
<html>
  <head>
    <link rel="stylesheet" href="thisIsExternalCSS.css">
    (...)
```

<sup>**Code explanation**: Here, a CSS file named thisIsExternalCSS.css is inserted inside an HTML file. This way this CSS file can be applied to multiple pages by just insert that line.</sup>

---

<a name="working"><h3> Working with CSS </h3></a>

The most usual way to use CSS is applying is as an external file. To do this, you must link the the CSS file to the HTML file. For instance, You have an html file named: **file.html**, and a CSS file named: **ndfile.css**, to connect them, in the <head> of the html file, place a link tag with the *rel* attribute with stylesheet value and *href* attribute with the name of the css file(if they are in the same folder). like this:

	<link rel="stylesheet" type="text/css" href="ndfile.css">
	
After that, using classes and ids, you can change the styles of entire pages. Check bellow to see some features of CSS.

---

<a name="exe"><h3>Exercises and Project:</h3></a>

*  <h5>Exercises:</h5>

*  *  **-Positioning_exercise.html** *Manipulate the position of an element trought the page*.  

<img src="http://g.recordit.co/J5pnt2TbMV.gif"></img>

*  *  **-aligning_exercise.html** *Manipulate the alignment of an element inside a page or a &lt;div&gt container*.

<img src="http://g.recordit.co/GyerzT5Dne.gif"></img>

*  *  **-borders_exercise.html** *Manipulate the style and property of a &lt;div&gt; container*.

<img src="http://g.recordit.co/Y9nvRANqiy.gif"></img>

*  *  **-fonts_exercise.html** *Manipulate the text font type for the header, page, paragraph or &lt;div&gt; container*.

<img src="http://g.recordit.co/GL9kF6TLhY.gif"></img>

*  *  **-margins_exercise.html** *Manipulate the tmargin properties for the header, page, paragraph or &lt;div&gt; container*.

<img src="http://g.recordit.co/5szW2fA4h8.gif"></img>

*  *  **-styling_exercise.html** *Manipulate the style of texts*.

<img src="http://g.recordit.co/yEdOyPAlkV.gif"></img>

*  *  **-webpage_div&color&floating.html** *Manipulate the &lt;div&gt container*.

<img src="http://g.recordit.co/arnvkjR4wb.gif"></img>

*  *  **-webpage_with_style_CLASSES&ID.html** *Manipulate the style of classes and ids*.

<img src="http://g.recordit.co/O86iIX2cFt.gif"></img>

*  *  **-webpage_with_style_INLINE.html** *Manipulate the style of an element inside of it*. <a href="HTA">CHECK IT HERE!</a>

*  *  **-webpage_with_style_INTERNAL.html** *Manipulate the style of an element inside of an HTML &lt;style&gt; tag*. <a href="HTA">CHECK IT HERE!</a>

---

*  <h5>Project:</h5>	
	
*  *  -[**BBC project:**](https://github.com/ItaloSSilva19/webdev/tree/master/CSS/BBC%20project) 

This project uses CSS to replicate the design of the BBC news webpage. This project was done by visualizing the real web page and trying to replicate it through brute force by creating div boxes and guessing what's what.

<img src="http://g.recordit.co/kYNFDhzm2d.gif"></img>

---

<a name="biblio"><h3>References</h3></a>

¹ Introduction of CSS. Available at: https://www.w3schools.com/css/css_intro.asp. Accessed on: 03 sep. 2020.  
² CSS introduction: CSS solved a big problem. Available at: https://www.w3schools.com/css/css_intro.asp. Accessed on: 03 sep. 2020.  
 

