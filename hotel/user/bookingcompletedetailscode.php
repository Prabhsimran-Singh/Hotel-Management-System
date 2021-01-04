<?php

$title= $_REQUEST["title"];
$firstname = $_REQUEST["firstname"];
$lastname = $_REQUEST["lastname"];
$telephone = $_REQUEST["telephone"];
$email = $_REQUEST["email"];

if(isset($_REQUEST["checkbox1"]))
$checkbox= $_REQUEST["checkbox1"];

$address = $_REQUEST["address"];
$city = $_REQUEST["city"];
$state = $_REQUEST["state"];
$country=$_REQUEST["country"];
$pincode = $_REQUEST["pincode"];
$cardnumber = $_REQUEST["creditcard"];
$cardtype = $_REQUEST["cardtype"];
$expmonth = $_REQUEST["expmonth"];
$expyear= $_REQUEST["expyear"];
$password=$_REQUEST["password"];

$dbhost = 'localhost';
$dbuser = 'root';
$dbname = 'hotel';
$dbpass = '';

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");


$query="insert into registration (title,firstname,lastname,telephone,email,checkbox,address,city,state,country,pincode,cardnumber,cardtype,expmonth,expyear,password ) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $db->prepare($query);
$stmt->bind_param("ssssssssssssssss",$title,$firstname,$lastname,$telephone,$email,$checkbox,$address,$city,$state,$country,$pincode,$cardnumber,$cardtype,$expmonth,$expyear,$password);
$stmt->execute();

header("Location:bookingconfirm.php");

?>

