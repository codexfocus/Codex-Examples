<?php
/**
  * prepared_mysql
  *
  * Send the sql statements in prepared form and receive the output in an array.
  * I orginally found this on the php manual in a comment. I adopted it to my own uses and modified a few things from the orginal.
  * I like using this method because it lays the ground work for prepared statements
  * allowing me to focus on other things rather than debugging prepared statement syntax.
  *
  * @param string $sql = Statement to execute;
  * @param $parameters = array of type and values of the parameters (if any)
  * @param $close 0 return an array with the values, 1 return rows affected, 2 return last inserts id
  * @return
  *  //example output for $close = 0
  * array(1) { [0]=> array(10) { ["username"]=> string(4) "test" ["last_name"]=> NULL ["first_name"]=> NULL 
  ["main_phone"]=> NULL ["cell_phone"]=> NULL ["address"]=> * NULL ["city"]=> NULL ["state"]=> NULL 
  ["zipcode"]=> NULL ["role"]=> NULL } }
  */

  public function prepared_mysql($sql, $params, $close, $conn_choice) 
  {

    //check required inputs
    
    if (!$sql) throw new Exception('No sql input.');

    //Pick a connection string
    
    if ($conn == "1") 
    {
      $conn = $this->first_conn();
    } elseif ($conn_choice == "2") 
    {
      $conn = $this->second_conn();
    } else 
    {
      $conn = $this->conn();
    }

    $stmt = $conn->prepare($sql);

    if ( !$stmt ) throw new Exception('Sql Statement Error: ' . $stmt->error);

    if(!empty($params)) 
    {

      if (!$params) throw new Exception('No parameters input.');

      call_user_func_array(array($stmt, 'bind_param'), $this->refValues($params));
    }

    $stmt->execute();

    switch ($close) 
    {
      case 0:
        //false to return an array with the values
        $meta = $stmt->result_metadata();

        while ( $field = $meta->fetch_field() )
        {
          $parameters[] = &$row[$field->name];
        }

        call_user_func_array(array($stmt, 'bind_result'), $this->refValues($parameters));

        while ( $stmt->fetch() )
        {
          $x = array();
          foreach( $row as $key => $val )
          {
            $x[$key] = $val;
          }
          $results[] = $x;
        }
        $result = $results;
        break;
      case 1:
        //true to return rows affected
        $result = $conn->affected_rows;
        break;
      case 2:
       //return the id of the last row inserted
        $result = $conn->insert_id;
        break;
    }

    $stmt->close();
    $conn->close();

    return  $result;
  }

  private function refValues($arr) 
  {

    if (strnatcmp(phpversion(),'5.3') >= 0) //Reference is required for PHP 5.3+
    {
      $refs = array();
      foreach($arr as $key => $value)
        $refs[$key] = &$arr[$key];
      return $refs;
    }
    return $arr;
  }
  
?>
