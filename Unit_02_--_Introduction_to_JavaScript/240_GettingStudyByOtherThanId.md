

These are the ways Javascript can retreive items.  We won't use all of them right now because JQuery will do it better.

* Finding HTML elements by id
  * document.getElementById
* Finding HTML elements by tag name
* Finding HTML elements by class name
  * document.getElementsByClass
* Finding HTML elements by CSS selectors

## Collections
In getElementByID the singular "Element" is used.  In getElementsByClass notice that the plural "Elements" is returned.

Does the above square with what you learned about ID's and Classes in ACT102?

Anything that returns multiple elements returns a *Collection* of HTML elements.  A collection is not an array.

## Converting collection to an array, and processing

```javascript
let shadyArray = Array.from(shadyCollection);
        console.log("The array is " + shadyArray);
        shadyArray.forEach(function (e){
            e.style.backgroundColor = theColor;
        });
```