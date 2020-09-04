# WEBDEV REPOSITORY

<h2 align="center">Udemy's API Section</h2>

*Cascading Style Sheets*-**CSS** describes how HTML elements are to be displayed on screen, and it can control the layout of multiple web pages all at once.<a href="#biblio">¹</a> CSS arrived to solve a big issue that was arrising in the web development world. This problem was that developers were using HTML for styling, and it wasn't meant to that.(In the [HTML folder](https://github.com/ItaloSSilva19/webdev/tree/master/HTML) there are the explanation for this)."When tags like <font>, and color attributes were added to the HTML 3.2 specification, it started a nightmare for web developers. Development of large websites, where fonts and color information were added to every single page, became a long and expensive process. To solve this problem, the World Wide Web Consortium (W3C) created CSS. CSS removed the style formatting from the HTML page!"<a href="#biblio">²</a>
  
There are three usual ways to apply CSS to an HTML document: *Inline, Internal, and external*. 

*  **Inline CSS** is used as an attribute inside an HTML element:

<h6 align="center">Code Sample</h6>

```
<p style="color:red;">This is a text example.</p>
```

**Code explanation**: In that sample code, a CSS attribute inside an HTML paragraph tag is used to change the text's color to red.
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

**Code explanation**: In that sample code, an CSS element <style> is defined inside the head tags<head> of an HTML document. Inside of it, CSS is applied to change the colors of any h1 to yellow, and any p tags to brown. Also, it changes the background color to yellow. 

*  **External CSS** is used in a CSS file. This file is inserted inside an HTML document as a link element.

<h6 align="center">Code Sample</h6>

```
<html>
  <head>
    <link rel="stylesheet" href="thisIsExternalCSS.css">
    (...)
```

**Code explanation**: Here, a CSS file named thisIsExternalCSS.css is inserted inside an HTML file. This way this CSS file can be applied to multiple pages by just insert that line.

---

Also, another important feature in CSS is the possibility to create classes and ids. They seems the same in a first glance, but there is a fundamental difference between them. While a class name can be applied to several elements on a single page, an id name must be unique. One of the reasons is that "JavaScript depends on there being only one page element with any particular id, or else the commonly used `getElementById` function wouldn’t be dependable."
<h3 align="center">Table of Content:</h3>

*  <h5>Files:</h5>

*  *  **-Positioning_exercise.html** *Manipulate the position of an element trought the page*.  

<img src="http://g.recordit.co/J5pnt2TbMV.gif"></img>

*  *  **-aligning_exercise.html** *Manipulate the alignment of an element inside a page or a container*.
*  *  **-borders_exercise.html**
*  *  **-fonts_exercise.html**
*  *  **-margins_exercise.html**
*  *  **-styling_exercise.html**
*  *  **-webpage_div&color&floating.html**
*  *  **-webpage_with_style_CLASSES&ID.html**
*  *  **-webpage_with_style_INLINE.html**
*  *  **-webpage_with_style_INTERNAL.html**

*  <h5>Project:</h5>	
	
*  *  -[**BBC project:**](https://github.com/ItaloSSilva19/webdev/tree/master/CSS/BBC%20project) This project uses CSS to replicate the design of the BBC news webpage. 

---

<h3 align="center"><a name="biblio">Bibliography</a>:</h3>

¹ Introduction of CSS. Available at: https://www.w3schools.com/css/css_intro.asp. Accessed on: 03 sep. 2020.
² CSS introduction: CSS solved a big problem. Available at: https://www.w3schools.com/css/css_intro.asp. Accessed on: 03 sep. 2020.
 

