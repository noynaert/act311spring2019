# AJAX Reprise and Review

## GET method

GET is an http "verb" that is used to specify what information is to be retreived from a url.

GET data is embedded in the url itself.

### Symbols
* ? Starts the argument list
* & Separates fields in the argument list
  
Blanks and special characters are encoded.  In the following, the First name was "John Q." so the blank was encoded as a +.  Blanks may also be encoded as %20

    /process.php?first=John+Q.&last=Public&course=ACT301&SelectButton=Submit

## Reprise of AJAX

### What is going on with AJAX?

* JavaScript is client-side.  It is not allowed to deal with the server after the page is loaded.
* The XMLHttpRequest Object is a way to weaken this restriction.  It allows JavaScript a limited amount of freedom to contact a server on its own server
  * The restriction can be loosened further if you have access to the server configuration

### The *XMLHttpRequest Object

* It is an Object!
  * It is more dynamic than the JSON objects we have been deeling with because it can have methods stored as some of the fields.

### The files I am using

I am trying to stay with the same basic model when doing AJAX.  The model I am using involves 3 (or possibly 4) files.

* the main .html page
  * This page somehow triggers loading of dynamic content
* doAJAX.js file -- The javascript file typically contains two functions
  * display() -- This function takes the json object and displays the data
  * getData() -- This function actually does the AJAX part.  It contains the XMLHttpRequest object.  Once it gets the data it actually displays the data.
* the getData.php file -- This is the PHP file that fetches the content.  This file has two main jobs:
  * Job #1 -- Fetch the data from a remote site
  * Job #2 -- echo the data as a JSON string.

