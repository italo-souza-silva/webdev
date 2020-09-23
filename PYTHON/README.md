# WEBDEV REPOSITORY

<h2 align="center">Python Section</h2>

<h3>Content</h3>

<a href="#intro">Introduction</a>  
<a href="#howto">Important Concepts</a>  
<a href="#links">Important Links</a>  
<a href="#sample">Exercises and Project</a>  
<a href="#biblio">References</a>  

---

<a name="intro"><h3>Introduction:</h3></a>

Python is a language used in a wide range of areas, from web development to data science, python has left its footprint there. According to its official documentation: "Python’s elegant syntax and dynamic typing, together with its interpreted nature, make it an ideal language for scripting and rapid application development in many areas on most platforms."<a href="#biblio">¹</a> Thanks to its syntax python ending up being the first language taught to beginners, but this doesn't mean that Python is weaker by any sense. Because of its communities and functionalities, python is the number one choice when it comes to data science or artificial intelligence.<a href="#biblio">²</a>(CUSTER, 2020) Also, due to its popularity, it is really easy to find free online courses of python. So it is just google it and found some courses that will help you learn Python. Furthermore, to use python as a server-side programming language it is needed to import the CGI library.Its just a import command: ```import cgi```."The Common Gateway Interface, or CGI, is a standard for external gateway programs to interface with information servers such as HTTP servers." <a href="#biblio">³</a> Also, it is possible to use a framework to make it easier to develop web site, two of python frameworks are: Django and Flask. Check the <a href="#links"> important links sections</a> to learn more about it.

---

<a name="howto"><h3>Important Concepts</h3></a>

<sup> Check the <a href="https://github.com/ItaloSSilva19/webdev/blob/master/JAVASCRIPT/README.md#howto">Javascript Readme</a> for more important concepts</sup>

**Library:** "Python’s standard library is very extensive, offering a wide range of facilities as indicated by the long table of contents."<a href="#biblio">⁴</a> Check the <a href="#links">links section bellow</a> to learn more about it.  
**List:** List is a compound data type, "(...) used to group together other values. The most versatile is the list, which can be written as a list of comma-separated values (items) between square brackets. Lists might contain items of different types, but usually the items all have the same type."<a href="#biblio">⁵</a>  
**Tuple:** "Tuples are immutable, and usually contain a heterogeneous sequence of elements that are accessed via unpacking (see later in this section) or indexing (or even by attribute in the case of namedtuples)." <a href="#biblio">⁶</a>  
**Sets:** "A set is an unordered collection with no duplicate elements. Basic uses include membership testing and eliminating duplicate entries.!"<a href="#biblio">⁷</a>  
**Dictionary:** "It is best to think of a dictionary as a set of key: value pairs, with the requirement that the keys are unique (within one dictionary). A pair of braces creates an empty dictionary: {}. Placing a comma-separated list of key:value pairs within the braces adds initial key:value pairs to the dictionary"<a href="#biblio">⁸</a>  
**Setting up a server** Open the prompt and go to the python folder. There type this command ```$ python -m SimpleHTTPServer```. And thats it! In your browser you can access your localhost:8000 to see the files.  

---

<a name="links"><h3>Important Links</h3></a>

[Tutorial](https://realpython.com/tutorials/web-dev/)  
[CGI-Programming](https://www.tutorialspoint.com/python/python_cgi_programming.htm)  
**Frameworks: [Django](https://www.djangoproject.com/); [Flask](https://flask.palletsprojects.com/en/1.1.x/)  
[Documentation](https://docs.python.org/3/tutorial/index.html)  

---
<a name="sample"><h3>Exercises and Project: Code samples:</h3></a>

*  <h5>Exercises:</h5>

*  *  **MMC** a function that return the MMC of two numbers.

<h6 align="center">Code Sample</h6>

```

def mmc(number1, number2):
    numbers = []
    if number1 <= number2:
        for i in range(1,number2+1):
            if number1 % i == 0 and number2 % i == 0:
                numbers.append(i)
            return numbers
```

*  <h5>Project:</h5>

*  *  **MASTERMIND** It is a text game. The user most guesses a 4 digits number. In each turn, the players receive hints to know if its guess were right. Check the [project folder](https://github.com/ItaloSSilva19/webdev/tree/master/PYTHON/MASTERMIND) to know more about it.
---

<a name="biblio"><h3>References:</h3></a>

¹ ⁴⁻⁸ Python tutorial Available at:https://docs.python.org/3/tutorial/index.html. Accessed on: 23 sep. 2020.  
²  Custer, C. How to learn Python for data science. Available at: https://www.dataquest.io/blog/how-to-learn-python-for-data-science-in-5-steps/. Accessed on: 23 sep. 2020.  
³  Python = CGI Programming. Available at:https://www.tutorialspoint.com/python/python_cgi_programming.htm. Accessed on: 23 sep. 2020.  

