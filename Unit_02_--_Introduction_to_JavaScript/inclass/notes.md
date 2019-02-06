Some things to point out:

* There are 3 places CSS can go.  One of them is in the code itself
```html
    <p id="hot" style="color:red">Some text</p>
```

* JavaScript can add or change the attributes of an element, including CSS

```javascript
  document.getElementById("hot").style.color = "red";
```

* JavaScript is actually kind of clunky at this type of thing.  Later we will use JQuery and Angular to make it easier.