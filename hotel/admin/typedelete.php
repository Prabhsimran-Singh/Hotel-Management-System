

<?php

$typeid=$_REQUEST["typeid"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="delete from type where typeid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("s",$typeid);
$stmt->execute();

header("Location:typeshow.php");

?>
