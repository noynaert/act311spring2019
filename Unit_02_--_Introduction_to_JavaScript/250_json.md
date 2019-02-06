# JSON

JSON stands for "JavaScript Object Notation"

## Uses

* JSON is used within JavaScript
* JSON is used to in other languages.  Most modern languages can read JSON
  * JSON is used to store configuration data
  * JSON is used to transfer data between applications.
* XML is another format that is commonly used like JSON.
  * XML is more like HTML syntax
  * XML has a lot of powerful tools that insure consistency in formatting data.

## Objects

An object corresponds to a record in databases.  One object holds all of the information about one entity.  Each object also has fields, just like a record

```javascript
let ElaineCar = {
    "make" : "Kia",
    "model" : "Soul",
    "year" : 2014
};

let EvanCar = {
   "make" : "Ford",
   "model": "F150",
   "year" : 1997
}
```
## Syntax

* { } define the begin and end
* The field names are usually in quotes, but in some cases they do not have to be.
* String values to the right of the : need to be in quotes, but numbers don't
* Commas separate the fields
* Objects may contain other objects
* Objects may contain arrays.  Elements of the arrays could be objects.

```javascript
let fleet = { 
    "count" : 2,
    "data" :
       [
          {
            "make" : "Kia",
            "model" : "Soul",
            "year" : 2014
         }
    ,
         {
            "make" : "Ford",
            "model": "F150",
            "year" : 1997
         }
     ]
}
```

## Dot notation

Dot notation is used to access the fields in the record

    console.log(EvanCar.make);
    console.log(EvanCar.model);
    EvanCar.year = 1996;
    console.log(fleet.count);
    console.log(fleet.data[0].make);