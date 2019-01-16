# Doing some JavaScript

## The All-Powerful Console

* Always open the console if you are doing JavaScript
* To open the console
  * Right click on an open area
  * Click "Inspect"
  * Click on Console

## Some DOM terms

* ***value*** For text boxes (and some other controls) what the user enters into the text box is the "value" property.
* ***innerHTML*** This is the plain text that shows up between the tags.
  * In the following, the current innerHTML is "Something"
  
  ```html
  <h1>Something</h1>
  ```

## The entire rest of the course reduced to one block of code

```javascript
let input = document.getElementById("firstName");
let firstName = input.value;
let heading = document.getElementById("top");
heading.innerHTML = firstName;
```