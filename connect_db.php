<?php
$servername= "localhost";
$mybase = "lesson_php";
$user = "root";
$password = "";
$charset = "utf8";
$pdo = new PDO("mysql:host=$servername;dbname=$mybase;charset=$charset", $user, $password);