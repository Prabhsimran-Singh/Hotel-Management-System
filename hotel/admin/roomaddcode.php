<?php

$typeid= $_REQUEST["droptype"];
$floor = $_REQUEST["floor"];
$number = $_REQUEST["roomno"];

$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

for($i=0;$i<$number;$i++)
{
$query="insert into room (typeid,floor) values(?,?)";

$stmt = $db->prepare($query);
$stmt->bind_param("ss",$typeid,$floor);
$stmt->execute();
}
header("Location:roomshow.php");

?>