<?php

function connect_database() {
  $servername= "localhost";
  $mybase = "lesson_php";
  $user = "root";
  $password = "";
  $charset = "utf8";
  $pdo = new PDO("mysql:host=$servername;dbname=$mybase;charset=$charset", $user, $password);
  return $pdo;
}

function getAllPosts() {
  $pdo = connect_database();
  $sql = "SELECT * FROM posts";
  $statement = $pdo->prepare($sql);
  $statement->execute();
  $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
  return $posts;
}