function wasClicked(){
    let firstBox = document.getElementById("startNumber");
    console.log("firstBox is " + firstBox);
    let startNumber = firstBox.value;
        //if the first number is NaN, then make it red, otherwise make it black.
    let secondBox = document.getElementById("endNumber");
    let endNumber = secondBox.value;
        //if the second number is Nan, then make it red, otherwise make it black
    let line = "";  //empty line to start
    for(let i = startNumber; i <= endNumber; i++){
        line+= "<li>The square root of "+i+" is "+Math.sqrt(i).toFixed(3)+"</li>\n";
    }
    console.log(line);
    //put line as the innerHTML of the <ul>
    // https://mwsu.zoom.us/my/noynaert
}

function isANumber(x){
    return !isNaN(x);
}