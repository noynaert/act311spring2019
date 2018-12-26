# Files and Tables

**"Any language that has explode() and die() as functions can't be all bad."** -- former student

## File

* There are several commands for using files
  * We will use file().  It opens the file, *reads the file contents into an array of strings,* and closes the file.
  * You should always check to make sure the file operation happened successfully.
  * "die" is a useful command for debugging, but it is bad for production.
* file()
  *  Each line of the file comes in as a string.  If a file contains 50 lines, file() will return an array of 50 strings.

## Tab delimited files

* A line of the file may contain several fields.  The "explode()" function splits up the line into different fields.
* The "\t" character means the "tab" character.

## Tables

    <table border="1">
    <tr>
        <th>Month</th>
        <th>Savings</th>
    </tr>
    <tr>
        <td>January</td>
        <td>$100</td>
    </tr>
    <tr>
        <td>February</td>
        <td>$80</td>
    </tr>
    </table>

Month | Savings
------|--------
January | $100
February| $80

