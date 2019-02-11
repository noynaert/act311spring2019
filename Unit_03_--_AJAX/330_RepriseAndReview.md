# AJAX Reprise and Review

## GET method

GET is an html "verb" that is used to specify what informatoin is to be retreived from a url

GET data is embedded in the url itself

### Symbols
* ? Starts the argument list
* & Separates fields in the argument list
  
Blanks and special characters are encoded.  In the following, the First name was "John Q." so the blank was encoded as a +.  Blanks may also be encoded as %20

    /process.php?first=John+Q.&last=Public&course=ACT301&SelectButton=Submit

## Reprise of AJAX

I am trying to stay with the same basic model when doing AJAX.  The model I am using involves 3 (or possibly 4) files.

* the main .html page
  * This page somehow triggers loading of dynamic content
* doAJAX.js file -- The javascript file typically contains two functions
  * display() -- This function takes the json object and displays the data
  * getData() -- This function actually does the AJAX part.  It contains the XMLHttpRequest object.  Once it gets the data it actually displays the data.
* the getData.php file -- This is the PHP file that fetches the content.  This file has two main jobs:
  * Job #1 -- Fetch the data from a remote site
  * Job #2 -- echo the data as a JSON string.