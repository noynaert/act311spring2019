# APIs and Authorization

## API

There are a lot of different things called "API."  They all mean "Application Programming
Interface."

List of free API's:  https://github.com/toddmotto/public-apis

## Market realities

Providing information seems like one of those things that seems cheap, but it can get expensive quickly.

Many API's allow light developer and testing use, but charge money (sometimes a *lot* of money) for high-volume access

Methods of controlling access to the API

* Rate Limits.  So many hits per hour or per day.  Rate limits may apply fee and paid accounts.
* API key.  
  * Each developer or project gets an API key.
  * The key must be kept secret
  * The key can be changed if it is compromised.
  * Mainly used for GET situations where you are mostly retrieving information
* Oauth
    * Basically, it is like a login.
    * Most sites use OAuth2.  It does the same thing as original OAuth, but has different mechanisms.
    * We won't use OAuth in this class unless you want to seriously overachieve.
    * Tends to be used more for services where you are storing data or interacting more with the system.

## Attribution

* Most free and some paid sites require attribution or credit.  Always check arround the site for attribution requirements.

## API styles

* Some use GET or other HTTP verbs
* Some are "Restful."