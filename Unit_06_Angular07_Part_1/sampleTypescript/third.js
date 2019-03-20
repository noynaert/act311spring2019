var Person = /** @class */ (function () {
    function Person(nm, years) {
        this.moniker = nm;
        this.age = years;
    }
    Person.prototype.display = function () {
        var result = this.moniker + " is " + this.age + " years old.";
        return result;
    };
    return Person;
}());
var p = new Person("BillyBob", 21);
console.log(p.display());
