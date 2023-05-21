<?php 

$connection = require_once './pdo.php';

$connection->removeNote($_POST['delete_note']);

header("Location: index.php");