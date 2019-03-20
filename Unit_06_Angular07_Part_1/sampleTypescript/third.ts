class Person{
    moniker:string;
    age:number;

    constructor(nm:string, years:number){
        this.moniker = nm;
        this.age = years;
    }

    display():string{
        let result:string = this.moniker + " is " + this.age+ " years old.";

        return result;
    }
}

let p:Person = new Person("BillyBob", 21);
console.log(p.display());