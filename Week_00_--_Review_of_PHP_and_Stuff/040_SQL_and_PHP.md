#MYSQL

* Acutally using "MariaDB"

## Database Browsers

* HeidiSQL
* VScode plugin

##  Query String

* Good to test these in the database browser.

## Steps in PHP

1. Make a connection to the database server
2. Send a query string to the server with mysqli_query() command.  It returns something like array with each row being 1 record
3. Close the database connection
4. Use a while loop to step through the results above
   * In most cases you will transfer the records to an array with array_push().  This helps keep the view separated from the model (data).
