

<?php

$facility_typeid=$_REQUEST["facility_typeid"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="delete from facility_type where facility_typeid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("s",$facility_typeid);
$stmt->execute();

header("Location:facility_typeshow.php");

?>
