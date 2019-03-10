# $( document ).ready() 

## Fixes the problem of when JavaScript loads

* Sometimes you need the elements to load so JavaScript can grab them (so put &lt;script>&gt; tag at the end
* Sometimes the JavaScript needs to be loaded first, (so put &lt;script&gt; tag at the top).
* The $(document).ready() method fixes this.  It is a function that happens after the document html loads, but before the images and media.

## The .ready() method takes an anonymous function. 

## Alternative syntax

* $ready()
* Just $() and put an anonymous function in it
* Several other options

### And example with several handlers

```javascript
        $(document).ready(function(){
            console.log("I am ready!");

            //Change the css of the header
            $("h1").css("color","red");

            //Adding a class to the h2
            $("h2").addClass("highlight");

            //Activate the "click" listener
            $('#showSnoopy').click(function(){
                snoopy();
            }); //end of click on showSnoopy

            $("li").hover(function(){
                $(this).addClass("highlight");
            }, 
            function(){
                $(this).removeClass("highlight");
            });//end of line hover

            //fetch the picked city on change and plug it into the h4 tag
            $("#pickCity").change(function(){
                let city = $(this).val();
                $("#pickedCity").html("City is " + city);
            });

        });//end of document ready
```