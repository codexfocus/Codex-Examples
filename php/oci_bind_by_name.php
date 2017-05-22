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

//Create a connection for a oracel database
$conn = oci_connect("user", "pass", "location");
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Example select statement.
$sql = "
  SELECT emp_no, birth_date, first_name, last_name
  FROM employees
  WHERE emp_no = :emp_no
  ";
  
$stmt = oci_parse($conn, $sql);
if (!$stmt) { 
   $oerr = oci_error($conn); 
   echo "Fetch Code 1:".$oerr["message"]; 
   exit; 
} 

$emp_no = 60;

oci_bind_by_name($stmt, ':emp_no', $emp_no);
oci_execute($stmt);
while ($row = oci_fetch_array ($stmt, OCI_ASSOC+OCI_RETURN_NULLS))
{
  $first_name = $row['first_name'];
}
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

/**
* Example Stored Procedure
* A good tutorial on using Stored Procedures with php:
* http://www.oracle.com/technetwork/articles/fuecks-sps-095636.html
*/

$sql = 'BEGIN sayHello(:emp_no, :first_name); END;';

$stmt = oci_parse($conn,$sql);

//  Bind the input parameter
oci_bind_by_name($stmt,':emp_no',$emp_no,32);

// Bind the output parameter
oci_bind_by_name($stmt,':first_name',$first_name,32);

$emp_no = '101';
oci_execute($stmt);
// $message is now populated with the output value

oci_close($conn);
?>
