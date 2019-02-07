function displayQuote(jsonString){
    console.log("The jsonString is " + jsonString);
    var target = document.getElementById("ajaxTarget");
    var quote = jsonString.contents.quotes[0];
    target.innerHTML = quote;
}

function getQuote(){
    var myPHPurl = "https://webservices.missouriwestern.edu/users/noynaert/act311spring2019/qotd/qotd.php";

    let quoteFetcher = new XMLHttpRequest();

        quoteFetcher.onreadystatechange = function(){
            console.log("Ready State is " + quoteFetcher.readyState);
            if(quoteFetcher.readyState == 4){
                console.log("I got a 4!");
                console.log("The status is " + quoteFetcher.status);
                console.log("The response text is " + quoteFetcher.responseText);
                displayQuote(quoteFetcher.responseText);
            }
        }
    
    quoteFetcher.open("GET", myPHPurl, true);
    quoteFetcher.send(null);
}