

<?php

$facilityid=$_REQUEST["facilityid"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="delete from facility where facilityid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("s",$facilityid);
$stmt->execute();

header("Location:facilityshow.php");

?>
