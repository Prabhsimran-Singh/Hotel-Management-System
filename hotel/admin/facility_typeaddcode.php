<?php

$typeid= $_REQUEST["droptype"];
$facilityid = $_REQUEST["dropfacility"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");

foreach($facilityid as $k)
{
$query="insert into facility_type (facilityid,typeid) values(?,?)";

$stmt = $db->prepare($query);
$stmt->bind_param("ss",$k,$typeid);
$stmt->execute();
}
header("Location:facility_typeshow.php");

?>