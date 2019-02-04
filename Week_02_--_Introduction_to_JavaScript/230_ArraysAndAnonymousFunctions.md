# Some more Syntax, Arrays and functions

## Arrays, in general

* JavaScript only has numerically indexed arrays. There are no associative arrays
* Creating Arrays

```javascript
    let list = ["Abe", "Bob", 86, true, "Sue"];
    let emptyList = [];
    let list2 = new Array("Hamburger", "Cabbage", 88);
    let emptyList2 = new Array();
```
 * Adding items to an array
   * list.push("Mary");
 * list size
   * list.length;
 * Indexing
   * First item is at [0]
   * Last item is at [(list.length)-1]
  
  ## Arrays that contain functions

  Arrays can contain other arrays, objects, and functions.  Yes, functions.  It can actually be kind of handy.

  This will be our first exposure to "anonymous functions."  Anonymous functions do not have a name (I find that kind of sad).  They don't need a name because they are called in ways that do not use a name.

  ```javascript
   list drawing = [
       function(){
           //A circle
           var c = document.getElementById("myCanvas");
           var ctx = c.getContext("2d");
           ctx.beginPath();
           ctx.arc(100, 75, 50, 0, 2 * Math.PI);
           ctx.stroke();
       }
       , //Comma between functions
       function(){
           //A square
           var c = document.getElementById("myCanvas");
           var ctx = c.getContext("2d");
           ctx.rect(20, 20, 150, 100);
           ctx.stroke();
       }
   ];
  ```

  ## Callback functions and foreach

  The foreach method uses a "callback function" as an argument.  Callback functions freak people out, but they are very simple.  In Java they are usually called "lambda functions."

  ### Basic Function

  ```javascript
       //If you just need the item
       list.forEach(function(item){console.log("Item is " + item) });

       //or, if you need the item and the index
       list.forEach(function(item, index){"Item: "+item+" Index: '+index}));
  ```
  Note the funky punctuation at the end 
  
       });

We will see it a lot.