function multiply() {
    let x = document.getElementById ("multiplicand").value;
    console.log ("multiplicand is" + x);
    let y = document.getElementById ("multiplier").value;
    console.log ("multiplier is" + y);
   
    document.getElementById ("showProduct").innerHTML=x * y;
    
    
}
