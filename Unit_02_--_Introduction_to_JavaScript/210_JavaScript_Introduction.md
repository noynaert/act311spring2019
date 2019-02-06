# JavaScript, part 1

## Terms:

* ***Front End*** -- What happens in the browser
* ***Back End*** -- What happens on the server
* ***Full Stack*** -- Both front end and back end.

## JavaScript's role

* Started as purely front end
* "Node" or "Node.js" added the backend
* So now JavaScript may be either frontend, backend,or full Stack

## Packages to install.

### In VS Code

* Live Server by Ritwick Dey
  * ext install ritwickdey.LiveServer

### In your OS.

* Node.js
  * For deb based Linux systems
    * sudo apt install nodejs npm
    * For Windows and Mac: https://nodejs.org/en/download/


## JavaScript's role

* Started as purely front end
* "Node" or "Node.js" added the backend
* So now JavaScript may be either frontend, backend,or full Stack

## JavaScript and the browser

* JavaScript Engine is build into every pupular browser.
* Now all browsers conform fairly well to the ECMA standard.  
  * Sometimes JavaScript is called ECMAscript
* In many ways, front-end JavaScript is an extension of html

## Really basic syntax

* <script> ... </script> tags
* Whenever possible, we will use <script src="something.js"></script>
  * Separating the view and the model.
  * Best practice is to put this tag at the end of the body
  * Data Types
    * Javascript is loosely typed like php.
  * Semicolons
    * Technically only needed when two statements are on the same line
    * In practice, always include the ; using about the same rules as Java, Php, and C++
  * Variables
    * Variables do not need leading $
      * Don't use the $ because we will use it for something else.
    * Avoid using _ as the first character because it has other meaning
  * Declaring variable
    * ***let*** for declaring variable.  This should be your default way of declaring
      * let x=99.0;
      * let word="Happy";
    * ***var*** another way of declaring variables, but it makes the variable global (usually a bad thing to use too much)
    * Output
      * document.write(...);  
        * Seems like the main way to do output, but it is rarely used.
      * console.log(...); 
        * Used for debugging
      * Manipulating the DOM
        * This is the main method of input and output
        * Basically we put out our html elements on the web page and then change their text and properties.
        * We are going to create a lot of html with **id=** attributes.
    * Functions
      * Functions are almost the same syntax as php functions.

```javascript
function square(x){
  let y = x * x;
  return y;
}
```
