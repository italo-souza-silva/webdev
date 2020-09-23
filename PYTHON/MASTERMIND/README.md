# Python FOLDER
<h2 align="center">Mastermind Project</h2>

<h3> Introduction </h3>

Mastermind is a game that can be played by one person, in this version, but in the live version it can be played by two persons. One is the code creator, and the other is the codebreaker.
In this version, the computer takes the code creator role. The game starts with the code creator selection a 4 digit number. After that, the codebreaker try to guess what is that number.
After the guess, the code creator provides feedback telling how many digits is the right one in the right position or how many digits are correct but in the wrong position.

---

<h3>How Does it work?</h3>

*  First import the libraries and store the HTML form in a variable:

```
#! /usr/bin/python

print ('Content-type: text/html')
print ('')

import cgi
import random
form = cgi.FieldStorage()
```

*  Create the numbercode and verify the guess:

```
reds = 0
whites = 0

if "answer" in form:
    answer = form.getvalue("answer")
else:
    answer = ""
    for i in range(4):
        answer += str(random.randint(0, 9))
        
if "guess" in form:
    guess = form.getvalue("guess")
    for key, digit in enumerate(guess):
        if digit == answer[key]:
            reds += 1
        else:
            for answerDigit in answer:
                if answerDigit == digit:
                    whites += 1
                    break
        
else:
    guess = ""

```

*  Storage the numbers of guesses:

```
if "numberOfGuesses" in form:
    numberOfGuesses = int(form.getvalue("numberOfGuesses")) + 1
else:
    numberOfGuesses = 0

if numberOfGuesses == 0:
    message = "I've chosen a 4 digit number. Can you guess it?"
elif reds == 4:
    message = "Well done! You got in " + str(numberOfGuesses) + " guesses. <a href=''>Play again</a>"
else:    
    message = "You have " + str(reds) + " correct digit(s) in the right place, and " + str(whites) + " correct digit(s) in the wrong place. You have had " + str(numberOfGuesses) + " guess(es)."
```

*  Create the form:

```
print ('<h1>Mastermind</h1>')
print ("<p>" + message + "</p>")
print ('<form method="post">')
print ('<input type="text" name="guess" value="' + guess + '">')
print ('<input type="hidden" name="answer" value = "' + answer + '">')
print ('<input type="hidden" name="numberOfGuesses" value = "' + str(numberOfGuesses) + '">')
print ('<input type="submit" value="Guess!">')
print ('</form>')
```





