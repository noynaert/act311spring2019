function displayNews(news){
  articles = news.articles;

  let headlines = "";
  articles.forEach(function(item){
     headlines += '<div class="headline">';
     if(item.urlToImage){
       headlines += '<div class="picture"><img src="' + item.urlToImage + '" style="height:150px;"/></div>';
     }
     headlines += '<h2>' + item.title +'</h2>';
     if(item.description){
       headlines += '<p>'+ item.description + '</p>';
     }
     headlines += '<p><a href="'+item.url+'">LINK</a>';
     headlines += '</div>';
     console.log(headlines);

  });
  document.getElementById("news").innerHTML = headlines;

}
/*  What I would like a news article to look like

    <div class="headline">
       <div class="picture"> 
           <img src="{{item.urlToImage}}"
       </div>
       <h2>{{item.title}}</h2>
       <p>{{item.description}}</p>
       <p><a href="{{item.url}}">LINK</a>
    </div>

*/


function getNews(){
    let newsJson = {"dummy":"nothing yet"};
    let phpURL = 'https://webservices.missouriwestern.edu/users/noynaert/act311spring2019/news/getNews.php';
    let newsFetcher = new XMLHttpRequest();
    newsFetcher.onreadystatechange = function(){
        console.log("Ready state is " + newsFetcher.readyState);
        if(newsFetcher.readyState == 4){
            console.log("I got 4!");
            //console.log(newsFetcher.responseText);
            newsJson = JSON.parse(newsFetcher.responseText);
            //console.log(newsJson);
            displayNews(newsJson);
        }
    }

    newsFetcher.open("GET", phpURL, true);
    newsFetcher.send(null);
}