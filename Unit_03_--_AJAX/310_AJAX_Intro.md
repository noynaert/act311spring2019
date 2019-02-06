# Introduction to AJAX

* AJAX stands for "Asynchronous JavaScript And XML"
  * It comes froma time when XML was the primary mechanism for data exchange

## What it is

* AJAX lets you have an area of the screen that loads data separately from another part of the page.
  * There can be one, two, or many parts of the page loading at different times.

### What's going on

  Bascially what goes on is that at some trigger part of the page gets new content *from the server.*  That is different from what we have been doing because we have been rewriting parts of the code from *information that was already hidden away in the html and javascript.*

### The Problem

For security reasons, JavaScript in the browser can't go get information from the server after the page loads.  It also can't upload information.  (We will mostly be getting information, but AJAX can also be used for uploading data.)

We need an intermediate operation that allows JavaScript to trigger something on the server.  This "something" is often a PHP script that lies on the server.  But it can be other languages.  Basically, modern AJAX can use anything that returns a string.

## History

* Microsoft developed the ***XMLHttpRequest***
  * XMLHttpRequest is a JavaScript Object
  * Microsoft marketed this as "Active X"
  * Roughly 1999ish
  * Only returned an XML Object
* Other Venders banded together to make a generic XMLHttpRequest
  * Still an Object
  * Open Source
  * Became known as AJAX
  * Could return either an XML object *or* a string
    * Abiltiy to return a string opened the door to returning JSON because JSON is a string.

## Another bit of security

* Generally, XMLHttpRequests can't do "cross domain requests"
  * So if a web page uses an XMLHttpRequest to get a php file, both the web page *and* the php file must be on the same server
  * There is kind of a way around this with a server mechanism called .htaccess.  It allows some relaxation of the cross server request.