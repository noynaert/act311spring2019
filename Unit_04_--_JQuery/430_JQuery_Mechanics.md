# 430 Mechanics of JQuery

## How to get JQuery

https://jquery.com/download/

## Uncompressed and Compressed or "Minified"

* Uncompressed -- 
  * For Debugging
  * For Customizing (customize, then minify it yourself)
* Compressed or "Minified" -- For Production

## To Download or Not To Download, that is the question

* Downloading the code to your folder
  * Gives you direct control of what the user gets
  * You don't have to worry about things like Google dropping support
  * You can customize it and chop out parts that you are not using.  For example, cut out fadeIn() and fadeOut() if you don't need them
  * The user must download it from your site -- Probably slows first load of page
    * It uses your bandwidth
    * It probably comes from just your server
    * User must download your version
* CDN
  * Does not use your bandwidth
  * Probably faster load time
    * Google is generally going to be at a higher tier
    * Google has its CDN servers all over the world, and your call to a CDN will get the closest one to the user
    * The user may already have it cached on their machine so they don't have to download it at all.

