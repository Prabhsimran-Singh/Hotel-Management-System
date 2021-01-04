<?php

$typename = $_REQUEST["typename"];
$typecharges = $_REQUEST["typecharges"];
$typeid = $_REQUEST["typeid"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="update type set typename=? , charges=? where typeid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("sss",$typename,$typecharges,$typeid);
$stmt->execute();

header("Location:typeshow.php");
