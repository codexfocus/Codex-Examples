### Useful Date Functions in php

A few useful php date functions and explanations.

`date();`

# Mysql Timestamp
Get the current date and time from the server. The format for this first one is good for inserting a mysql timestamp.

`$date = date('Y-m-d H:i:s');`

Outputs: 2016-07-13 14:26:4

# Oracle Database Date format
`$date = date('d-M-y');`
Output: 09-Aug-16

# U.S. Standard Format
Get the datetime in a more standard U.S. human readable format.
`$date = date('m/d/Y h:i:s a', time());`

# Default Server Time Zone
These datetimes are based on the default server time zone. To change that declare the default time zone first then the date function.

```
date_default_timezone_set('America/Los_Angeles');
$date = date('Y-m-d H:i:s');
echo “The first time zone:$date<br>”;
```
[List of Supported Timezones](php.net/manual/en/timezones.php)

# Adding or Subtracting Time to a Date

```
$date = date('Y-m-d');
echo "Today: $date<br>";
 
$date = date('Y-m-d', strtotime($date. ' - 30 days'));
echo "30 days previous: $date<br>";
 
$date = date('Y-m-d', strtotime($date. ' + 30 days'));
echo "30 days in future: $date<br>";
```

Output: Today: 2016-08-25
Output: 30 days previous: 2016-07-26
Output: 30 days in future: 2016-08-25

# Formatting a Date
I find when formating output from a database source, oracle for example, I need to first run the variable through date_create(); then date_format();.

```
$date = date_create($db_output);
$formated_output = date_format($date, 'Y-m-d H:i:s');
```

The same applies for a date coming from a form. For example if you have an html 5 type=”date” input.
`<input type=’date’ name=’meeting date”>`

You need to run the variable through date_create(); in order for date_format(); to work properly.
```
$meeting_date = $_POST['meeting_date'];
$date = date_create($meeting_date);
$formated_meeting_date = date_format($date, 'Y-m-d H:i:s');
```

- Source(s)
  - [date php manual](http://php.net/manual/en/function.date.php)
  - [Stackoverflow question Adding Days to the Date](http://stackoverflow.com/questions/3727615/adding-days-to-date-in-php)
  - [Stackoverflow question: Get current date and time in php](http://stackoverflow.com/questions/470617/get-current-date-and-time-in-php)
