# XMLHttpRequest Mechanics

## Standard http protocol operations

* The basic mechanics you are used to using in the browser also apply to the HTTP request.
  * We still use urls to give the address of the resource (actually, a uri)
  * XMLHttpRequests use standard http verbs:
    * GET
    * POST
    * DELETE
    * PATCH
  * XMLHttpRequests use standard status codes
    * 404 Not found
    * 403 Forbidden
    * 200 OK   -- This will be the important one for us
    * [More](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)
  
## XMLhttpRequests have their own "Ready States" or status codes

Value|State|Description
:---:|---|---
0|UNSENT|Client has been created. open() not called yet.
1|OPENED|open()|has been called.
2|HEADERS_RECEIVED|send() has been called, and headers and status are available.
3|LOADING|Downloading; responseText holds partial data.
4|DONE|The operation is complete.

In practice only ready state 4 matters to us.  It means our string is ready for our web page to use.

## Fields of an XMLHttpRequest

I generated this in the Chrome console.  The basic steps were to type

```javascript
let sampleRequest = new XMLHttpRequest();
console.log(sampleRequest);
```
Then I expanded the output to see the following

```javascript
XMLHttpRequest {onreadystatechange: null, readyState: 0, timeout: 0, withCredentials: false, upload: XMLHttpRequestUpload, …}
onabort: null
onerror: null
onload: null
onloadend: null
onloadstart: null
onprogress: null
onreadystatechange: null
ontimeout: null
readyState: 0
response: ""
responseText: ""
responseType: ""
responseURL: ""
responseXML: null
status: 0
statusText: ""
timeout: 0
upload: XMLHttpRequestUpload {onloadstart: null, onprogress: null, onabort: null, onerror: null, onload: null, …}
withCredentials: false
__proto__: XMLHttpRequest
```

Important fields we will be using

* .readyState -- When readyState === 4, we should have output
* .onreadystateChange -- We will have to define a function that says what to do when the ready state changes
* .status  -- we will look for status of 200 to detect that the request was successful
* .responseText -- This is where we will get the string returned by the URL

* .open() -- this is a function (or nethod) that is not shown on the list.
  * the open method takes the verb and the url