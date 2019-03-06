# JQuery, gettting started

## Getting Started Quickly

Copy/Paste the following line into the &lt;head&gt; of your document.  There are other ways, but this is quick:

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

The essense of JQuery has been described as "Get something. Do something with it."

    $("#state").fadeOut(10000);

Usually the "Do Something" is more involved.  It is often one or more anonymous functions.

## JQuery is a Swiss-Army-Knife of web development.  
JQuery underlies a lot of things like Bootstrap that are built on top of it.

* JQuery does not replace JavaScript.  JQuery *is* JavaScript.
* JQuery used to be important because it fixed browser compatability issues.
* JQuery simplifies the bulk of raw JavaScript.
  * "document.getElementByID("#states") becomes $("#states")
  * Getting things like classes or tags is even worse because you get a collection of objects that must be converted to arrays.  In JQuery you don't need to use an array or loop through with a forEach.   $("p") gets all the &lt;p&gt; elements and lets you do something with them.
  * You can get events as well as elements.
* JQuery adds a lot of its own functionality.  Some are annimations like fade.
* JQuery has functions to make AJAX easier.

## Mainly, JQuery is a function.

The function is called "jQuery."

$ is just an alias for jQuery.  

So $("p") is just a function call to jQuery("p")

## Why we aren't going to do much jQuery

## Miscellaneous Fact

* 1 second has 1000 milliseconds.
* 2 seconds is the same as 2000 milliseconds
* Half a second is 500 milliseconds