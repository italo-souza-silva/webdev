# WEBDEV REPOSITORY

<h2>Bootstrap Section</h2>

---

<h3>Content</h3>

<a href="#before">Before Start</a>  
<a href="#intro">Introduction</a>  
<a href="#components">Components</a>  
<a href="#examples">Code and Image Examples</a>  

---

<a name="before"><h3>Before Start:</h3></a>

Before diving into Bootstrap it is ~~REQUIRED~~ recommended to check these sections:

*  [**HTML**](https://github.com/ItaloSSilva19/webdev/tree/master/HTML)  
*  [**CSS**](https://github.com/ItaloSSilva19/webdev/tree/master/CSS)  
*  [**JAVASCRIPT**](https://github.com/ItaloSSilva19/webdev/tree/master/JAVASCRIPT)  

To **use Bootstrap here**, there is **NO** need to download or install anything. Just go to [Bootstrap site](https://www.bootstrapdash.com/use-bootstrap-with-html/) and use **Bootstrap CDN**(Content Delivery Network). This means that you have to embed bootstrap links to your HTML file.

---

<a name="intro"><h3>Introduction</h3></a>

Bootstrap, according to its page, is the **most popular Javascript and CSS framework for building responsive, mobile-first sites**, and it is currently at the 4.5 version<a href="#biblio">¹</a>. This means that *bootstrap styling and scripting will accommodate any screen size device*. Also, with bootstrap, you have to copy and paste the template code of a component that you want to apply to your website. Moreover, to make the job easier, it is possible to purchase the themes offered. Although the fact that bootstrap can be applied fast and easy, to master the functionalities of this framework might be a little tricky. 

---

<a name="components"><h3>Components:</h3></a>

*  **Alerts**: "Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages."<a href="#biblio">²</a>  
*  **Buttons**: "Use Bootstrap’s custom button styles for actions in forms, dialogs, and more with support for multiple sizes, states, and more."<a href="#biblio">³</a>  
*  **Card**: "A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options."<a href="#biblio">⁴</a>  
*  **Forms**: "Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms."<a href="#biblio">⁵</a>  
*  **Jumbotron**: "A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site."<a href="#biblio">⁶</a>  
*  **Navbar**: "Bootstrap’s powerful, responsive navigation header, the navbar. Includes support for branding, navigation, and more."<a href="#biblio">⁷</a>  
*  **Popovers**: "The Popover (...) is a pop-up box that appears when the user clicks on an element. The difference is that the popover can contain much more content." <a href="#biblio">⁸</a>  

---

<a name="examples"><h3>Code and Image Examples:</h3></a>

**Alert:**

<img src="https://urless.in/ggIHn"></img>
<h6 align="center">Code Sample:</h6>

```
<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
```


**Button:**

<img src="https://urless.in/z6Co3"></img>
<h6 align="center">Code Sample:</h6>

```
<button type="button" class="btn btn-primary">Primary</button>
```


**Card:**

<img src="https://urless.in/RUBbG" width="200%"></img>
<h6 align="center">Code Sample</h6>

```
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
```


**Form:**

<img src="https://urless.in/563MS"></img>
<h6 align="center">Code Sample</h6>

```
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
```


**Jumbotron:**

<img src="https://urless.in/mjvSo" width="150%"></img>
<h6 align="center">Code Sample</h6>

```
<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
```


**Navbar:**

<img src="https://urless.in/QbFXY"></img>
<h6 align="center">Code Sample</h6>

```
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-abel="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
	<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
	<a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	  Dropdown
	</a>
	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
	  <a class="dropdown-item" href="#">Action</a>
	  <a class="dropdown-item" href="#">Another action</a>
	  <div class="dropdown-divider"></div>
	  <a class="dropdown-item" href="#">Something else here</a>
	</div>
      </li>
      <li class="nav-item">
	<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
```


**Popover:**

<img src="https://urless.in/LiuCO" width="150%"></img>
<h6 align="center">Code Sample</h6>

```
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
```

All of these components were used to build the project and the files in this folder, check it out or go to bootstrap web page to know more about it.
To check the **complete Bootstrap documentation**, [<sup>**click here**</sup>](https://getbootstrap.com/docs/4.5/getting-started/introduction/)

---

<h3>Exercises and Project:</h3>

*  <h5>Exercises:</h5>

*  *  **-bootstrap.html:** How to apply the bootstrap in an HTML file, using a grid;
*  *  **-form&tables.html:** How to apply forms and tables using bootstrap;
*  *  **-navbar.html:** How to apply a navigation header;
*  *  **-jumbotron:** How to apply jumbotron. A jumbotron element is like a banner. It's like a container focus on showing a specific aspect of a webpage.
	
*  <h5>Project:</h5>	
	
*  *  -[**Project_App_Landing_page:**](https://github.com/ItaloSSilva19/webdev/tree/master/BOOTSTRAP/Project_App_Landing_Page) The section project. The goal was to create an Landing page for an app. Open the folder to know more about it.

---

<h3><a name="biblio">References</a>:</h3>

¹ BUILD fast, responsive sites with Bootstrap. Available on: https://getbootstrap.com/. Access on: set. 03 2020.  
² ALERTS. Available on: https://getbootstrap.com/docs/4.5/components/alerts/. Access on: sep. 03 2020.  
³ BUTTONS. Available on: https://getbootstrap.com/docs/4.5/components/buttons/. Access on: sep. 03 2020.  
⁴ CARDS. Available on: https://getbootstrap.com/docs/4.5/components/card/. Access on: sep. 03 2020.  
⁵ FORMS. Available on: https://getbootstrap.com/docs/4.5/components/forms/. Access on: sep. 03 2020.  
⁶ JUMBOTRON. Available on: https://getbootstrap.com/docs/4.5/components/jumbotron/. Access on: sep. 03 2020.  
⁷ NAVBAR. Available on: https://getbootstrap.com/docs/4.5/components/navbar/. Access on: sep. 03 2020.  
⁸ POPOVERS. Available on: https://www.w3schools.com/bootstrap/bootstrap_popover.asp#:~:text=The%20Popover%20plugin%20is%20similar,user%20clicks%20on%20an%20element.&text=Tip%3A%20Plugins%20can%20be%20included,js%22%20or%20%22bootstrap. Access on: sep. 03 2020.  


