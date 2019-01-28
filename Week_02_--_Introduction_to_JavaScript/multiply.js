function multiply () {
    let x= document.getElementById ("multiplicand").value;
    console.log ("multiplicand is" + x);
    let y=document.getElementById ("multiplier").value;
    console.log ("multiplier is" + y);
    let z= x * y;
    document.getElementById ("showProduct").innerHTML=z;
    
    
}
