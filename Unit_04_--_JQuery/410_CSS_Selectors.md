# CSS Selectors

## Why do we care?

We are going to be doing JQuery, and selectors are at the heart of JQuery.  Sometimes we use the simple selectors you learned in ACT 102.  But sometimes we use the very advanced selectors to get the page to do what we want.

Honestly, with just the "Pseudo Selectors" we can make some dynamic looking web pages with nothing but css.  These are modifiers like :hover and :active

## It's all about the DOM

First, [about the DOM itself](http://www.w3webtutorial.com/javascript/javascript-html-dom-nodes.php)

Second, Some terms

* Sibling -- Elements that are on the same horizontal level.  In a family siblings would be brothers and sisters.
* Child
* Parent (not really used very often)

## Review of CSS

"Selectors" are the things in CSS that appear before the { }

```CSS
h1 {color: pink;}

#thing {color: green;}

.lotsOfThings {color: blue;}

table,td,th,tr {border: 1px solid black;}
```
The above are the ones you have probably seen most often.  Just use a tag name, . for classes, and # for ids.  Commas can be used to apply several selectors to the same style.  Tables is probably the most common use of the commas.

## But Wait :exclamation:  There's More :exclamation:

* See [this list](https://www.sltrib.com/religion/2018/10/01/commentary-more-mormon/)
* There are a lot of CSS selector cheat sheets.  Some are bad, some are good.  They all seem to try to explain and demo the selectors differently.  Find some that speak to you.
* A really good demo is at [this link](https://www.w3schools.com/cssref/trysel.asp)  You just click on the links on the left. and you will see the expanation and the effect.

## About the *

The * selector by itself is generally a bad idea because it applies to every element on the page.  However, it can be useful as the last selector in a multi-layered scheme.

For example, the following would select all elements in a div with an id of "target."

```CSS
#target * {color:purple;}
```