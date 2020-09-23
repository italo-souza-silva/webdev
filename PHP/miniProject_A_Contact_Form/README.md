# PHP FOLDER

<h2>MINI PROJECT: CONTACT FORM</h2>


This is a form to send an email.
It was developed using HTML, jQuery, Bootstrap(CSS; Javascript), and PHP as backend.
***
Somethings that I learn along the way:
*	Using $_POST instead of $_GET it is a lot safer;
*	PHP is at the back-end, so you can't directly connect a button to it. Instead of that, you should use the .submit() method to submit a form with the method="POST" attribute.
Then, if needed, use the $_POST to connect the input to it, remember to set the attribute name="yourInputName" in your input first;
*	htmlspecialchars() is a great way to prevent hackers. If someone tries to insert something in the client-side with an XSS(Cross-site scripting) with the script tag, the htmlspecialchars() won't let them, because of its translates the HTML code. Example: if someone insert a tag <sript> it will be translated as &lt;script&gt;. So, no harm was done!
*	Start with HTML, Bootstrap, then PHP. It's a waste of time to try backward.
*	With this form, you could send an email from email-A to email-B even if you don't have access to either account. 
***
The most difficult part was to figure out how to connect the submit button with the PHP mail() function. Tried to use AJAX, other fancy codes, but in the end, was the simple $_POST with a form with some attributes.
  
If there are any doubts about the process, check the code to understand how it was done.
