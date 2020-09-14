#! /usr/bin/python

print ('Content-type: text/html')
print ('')

import cgi
import random
form = cgi.FieldStorage()

if "answer" in form:
    answer = form.getvalue("answer")
else:
    answer = ""
    for i in range(4):
        answer += str(random.randint(0, 9))

print ('<h1>Mastermind</h1>')
print ("<p>" + message + "</p>")
print ('<form method="post">')
print ('<input type="text" name="guess" value="' + guess + '">')
print ('<input type="hidden" name="answer" value = "' + answer + '">')
print ('<input type="hidden" name="numberOfGuesses" value = "' + str(numberOfGuesses) + '">')
print ('<input type="submit" value="Guess!">')
print ('</form>')