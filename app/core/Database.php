<?php

/**
 * Trait cannot be instantiated like classes, can use multiple Traits inside a class
 */

Trait Database {

  private function connect() {
    $string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
    $con = new PDO($string, DBUSER, DBPASS); // will fail silenty default
    return $con;
  }

  public function query($query, $data = []) {
    $con = $this->connect();
    $stmt = $con->prepare($query);
    $check = $stmt->execute($data); // fails return false

    if($check) {
      $result = $stmt->fetchAll(PDO::FETCH_OBJ); // fetchAll will return a [] if there is no rows
      if(is_array($result) && count($result)) {
        return $result;
      }
    }

    return false;
  }

  public function get_row($query, $data = []) {
    $con = $this->connect();
    $stmt = $con->prepare($query);
    $check = $stmt->execute($data); // fails return false

    if($check) {
      $result = $stmt->fetchAll(PDO::FETCH_OBJ); // fetchAll will return a [] if there is no rows
      if(is_array($result) && count($result)) {
        return $result[0];
      }
    }

    return false;
  }


}
