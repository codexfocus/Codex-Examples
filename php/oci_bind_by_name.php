<?php

/**
* Examples of select, update, insert, and delete using php oracle extension oci_bind_by_name
*
* Further examples can be found at:
* http://php.net/manual/en/function.oci-bind-by-name.php
*
* @author codexfocus
* https://github.com/codexfocus
*/

/**
* Example connection string for a oracle database.
*/

$conn = oci_connect("user", "pass", "location");

/**
* Example select statement.
*/

$sql = "
  SELECT emp_no, birth_date, first_name, last_name
  FROM employees
  WHERE emp_no = :emp_no
  ";
  
$stmt = oci_parse($conn, $sql);

$emp_no = 60;

oci_bind_by_name($stmt, ':emp_no', $emp_no);
oci_execute($stmt);
oci_free_statement($stmt);


/**
* Example insert statement.
*/

$stmt = oci_parse($conn,"
INSERT INTO employees(emp_no, birth_date, first_name, last_name)
  VALUES (:emp_no, :birth_date, :first_name, :last_name)
  ");
  
$emp_no = 1;
$birth_date = "01-JAN-2000";
$first_name = "John";
$last_name = "Doe";

oci_bind_by_name($stmt, ":emp_no", $emp_no);
oci_bind_by_name($stmt, ":birth_date", $birth_date);
oci_bind_by_name($stmt, ":first_name", $first_name);
oci_bind_by_name($stmt, ":last_name", $last_name);
oci_execute($stmt);
oci_free_statement($stmt);

/**
* Example update statement.
*/

$stmt = oci_parse($conn,"
  UPDATE employees
  SET birth_date = :birth_date,  first_name = :first_name, last_name = :first_name
  WHERE emp_no = :emp_no
  ");
  
$emp_no = 1;
$birth_date = "01-JAN-2000";
$first_name = "John";
$last_name = "Doe";

oci_bind_by_name($stmt, ":emp_no", $emp_no);
oci_bind_by_name($stmt, ":birth_date", $birth_date);
oci_bind_by_name($stmt, ":first_name", $first_name);
oci_bind_by_name($stmt, ":last_name", $last_name);
oci_execute($stmt);
oci_free_statement($stmt);

/**
* Example delete statement.
*/

$stmt = oci_parse($conn,"
  DELETE
  FROM employees
  WHERE emp_no = :emp_no
  ");
  
$emp_no = 1;

oci_bind_by_name($stmt, ":emp_no", $emp_no);
oci_execute($stmt);
oci_free_statement($stmt);

oci_close($conn);
?>
