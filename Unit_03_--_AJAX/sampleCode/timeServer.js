function displayTime(message){
    var target = document.getElementById("ajaxTarget");
    target.innerHTML = message;
}

function getServerTime(){
    let url = "https://webservices.missouriwestern.edu/users/noynaert/act311spring2019/timeServer/timeServer.php";

    let timeFetcher = new XMLHttpRequest();

            timeFetcher.onreadystatechange = function(){
                console.log("Ready State is " +timeFetcher.readyState);
                if(timeFetcher.readyState == 4){
                    console.log("I hit 4!");
                    console.log('The response text is "timeFetcher.responseText"');
                    displayTime(timeFetcher.responseText);
                }
            }

    timeFetcher.open("GET", url, true);
    timeFetcher.send(null);


    //displayTime("I should have gone home an hour or two ago.");
}