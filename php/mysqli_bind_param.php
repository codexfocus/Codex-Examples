<? php

/**
* Examples of select, update, insert, delete using mysqli bind_param in php
*
* Further examples can be found at:
* http://php.net/manual/en/mysqli-stmt.bind-param.php
* http://www.w3schools.com/php/php_mysql_prepared_statements.asp
*
* All examples use mysql test database:
* https://github.com/datacharmer/test_db
*
* @author codexfocus
* https://github.com/codexfocus
*/
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// New connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Select needs a better loop example
//Select employee data from employees table using prepared statement
$stmt = $conn->prepare("
  SELECT emp_no, birth_date, first_name, last_name
  FROM employees
  WHERE emp_no = ?
  ");
$stmt->bind_param("i", $emp_no);

$emp_no = 1;

$stmt->execute();
$stmt->close();

//Insert employee data into the table
$stmt = $conn->prepare("
  INSERT INTO employees(emp_no, birth_date, first_name, last_name)
  VALUES (?, ?, ?, ?)
  ");
$stmt->bind_param("isss", $emp_no, $birth_date, $first_name, $last_name);

$emp_no = 1234;
$birth_date = 2000-01-01;
$first_name = "John";
$last_name = "Doe";

$stmt->execute();
$stmt->close();

//Update employee data into the table
$stmt = $conn->prepare("
  UPDATE employees
  SET birth_date=?,  first_name=?, last_name=?
  WHERE emp_no=?
  ");
$stmt->bind_param("sssi", $birth_date, $first_name, $last_name, $emp_no);

$emp_no = 1234;
$birth_date = 2000-01-01;
$first_name = "John";
$last_name = "Doe";

$stmt->execute();
$stmt->close();

//DELETE employee data from the table
$stmt = $conn->prepare("
  DELETE
  FROM employees
  WHERE emp_no=?
  ");
$stmt->bind_param("i", $emp_no);

$emp_no = 1234;

$stmt->execute();
$stmt->close();

$conn->close();

?>
