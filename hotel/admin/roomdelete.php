

<?php

$roomid=$_REQUEST["roomid"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

$query="delete from room where roomid=?";

$stmt = $db->prepare($query);
$stmt->bind_param("s",$roomid);
$stmt->execute();

header("Location:roomshow.php");

?>
