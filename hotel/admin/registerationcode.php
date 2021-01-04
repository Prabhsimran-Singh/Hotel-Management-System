<?php
if($_REQUEST["username"]!=null && $_REQUEST["password"]!=null)
{
    
$a=$_REQUEST["username"];
$b=$_REQUEST["password"];


$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';


$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");
$query="insert into adminlogin (username,password) values(?,?)";
$stmt = $db->prepare($query);
$stmt->bind_param("ss",$a,$b);
 $stmt->execute();
 echo "User Registeration Successfull";
 ?>
<br>
 <a href="adminlogin.php">Go to Login Page</a>

<?php 
 }
else
    {
header("Location:registeration.php?error=1");
}
?>