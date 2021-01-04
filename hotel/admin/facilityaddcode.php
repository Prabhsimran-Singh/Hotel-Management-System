<?php

$facilityname = $_REQUEST["facilityname"];
$facilitycharges = $_REQUEST["facilitycharges"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="insert into facility (facilityname,charges) values(?,?)";

$stmt = $db->prepare($query);
$stmt->bind_param("ss",$facilityname,$facilitycharges);
$stmt->execute();

header("Location:facilityshow.php");

?>