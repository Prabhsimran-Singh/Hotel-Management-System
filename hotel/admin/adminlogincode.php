<?php
session_start();
if($_REQUEST["username"]!=null && $_REQUEST["password"]!=null )
{
    
$a=$_REQUEST["username"];
$b=$_REQUEST["password"];

$_SESSION["user"]=$a;
$_SESSION["pass"]=$b;

$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';


$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");
$query="SELECT * FROM `adminlogin` WHERE username=? and password=? ";
$stmt = $db->prepare($query);
$stmt->bind_param("ss",$a,$b);
 $stmt->execute();

 $arr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
            print_r($arr);
            if ($arr) {
                 foreach ($arr as $k)
                {
                $r[] = $k;
                }
            }
                  if($a==$r[0]["username"] && $b==$r[0]["password"])
                        {
                         header("Location:main.php?username=$a"); 
                       }
                      else
                      {
                        header("Location:adminlogin.php?error=1"); 
                      }
                           
  
}
else {
   header("Location:adminlogin.php?error=1");   
} 

?>
