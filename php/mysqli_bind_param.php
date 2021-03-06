<? php

/**
* Examples of select, update, insert, delete using mysqli bind_param in php
*
* Note: bind_param type specification chars
* i has type integer
* d has type double
* s has type string
* b is a blob and will be sent in packets
*
* Further examples and explanations can be found at:
* http://php.net/manual/en/mysqli-stmt.bind-param.php
* http://www.w3schools.com/php/php_mysql_prepared_statements.asp
*
* All examples use mysql test database:
* https://github.com/datacharmer/test_db
*
* @author codexfocus
* https://github.com/codexfocus
*/

//Connection variables
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

//Start a new connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Select employee data from employees table using prepared statement
$stmt = $conn->prepare("
  SELECT emp_no, birth_date, first_name, last_name
  FROM employees
  WHERE emp_no = ?
  ");
$stmt->bind_param("i", $emp_no);
$emp_no = 1;
$stmt->execute();
//Output results
//Need to bind all the column names to a variable from the select statement.
$stmt->bind_result($emp_no, $birth_date, $first_name, $last_name);
while ($stmt->fetch())
{
  echo $last_name . "<br>";
}
$stmt->close();

//Select prepared statment with no bind_param example.
$stmt = $conn->prepare("
  SELECT emp_no, birth_date, first_name, last_name
    FROM employees
  ");
$stmt->execute();
$stmt->bind_result($emp_no, $birth_date, $first_name, $last_name);
$stmt->fetch();
$stmt->close();
var_dump($emp_no, $birth_date, $first_name, $last_name);

//Select prepared statement into an array
$stmt = $conn->prepare("
SELECT emp_no, birth_date, first_name, last_name
  FROM employees WHERE birth_date = ?");
$stmt->bind_param("i", $day);
$month = "2000-01-01";
$stmt->execute();
$results = $stmt->get_result();
$stmt->close();
while($row = $result->fetch_assoc())
{
  echo "Happy Birthday: " . $row['first_name'];
}

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
