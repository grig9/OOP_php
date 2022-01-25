<?php
$db = include "./database/start.php";
$db->update('books', $_POST, $_GET['id']);
header("Location: ./index.php");