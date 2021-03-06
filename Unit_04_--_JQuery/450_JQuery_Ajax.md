# jQuery and AJAX

## $.ajax(url, options)

The URL is straightforward.  

* We still need to encode the URL (but I avoided url encoding in my example)
* The Cross-Domain References (CORS) must still be observed.

### Options
There are a lot of options.  See https://www.w3schools.com/jquery/ajax_ajax.asp

The options are represented as a JSON object.  You do not need to implement all of the options.

I am only going to use 3 options.  We could have done these things with our raw methods, but it would have been more complicated.  We only did the "success" part.

* timeout -- How many milisecions to wait for the server.  Usually a good idea.
* success  -- A function to do on success
* error -- A function to do if there is a problem

```javascript
			{	timeout: 1000,

				success: function(result, status, xhr){
					       //This is where we would have called the display() method
				        },
				
				error: function(xhr,status,errorMessage){
					
				       }
			}
```
## A note about the URL

The rules about cross domain access (CORS) still apply to jQuery forms of AJAX.  

I am using https://swapi.co/api/people/1/?format=json

This server is set up specifically to allow CORS.  