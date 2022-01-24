<?php 
class Connection {
  public static function make() {
    $servername= "localhost";
    $mybase = "lesson_php";
    $user = "root";
    $password = "";
    $charset = "utf8";
    return new PDO(
      "mysql:host=$servername;
      dbname=$mybase;
      charset=$charset", 
      $user, 
      $password
    );
  }
}