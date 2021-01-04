<?php

$facilityname = $_REQUEST["facilityname"];
$facilitycharges = $_REQUEST["facilitycharges"];
$facilityid = $_REQUEST["facilityid"];
$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="update facility set facilityname=? , charges=? where facilityid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("sss",$facilityname,$facilitycharges,$facilityid);
$stmt->execute();

header("Location:facilityshow.php");
