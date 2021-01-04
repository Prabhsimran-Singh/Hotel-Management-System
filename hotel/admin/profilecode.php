<?php
session_start();
if($_REQUEST["oldpassword"]!=null && $_REQUEST["newpassword"]!=null && $_REQUEST["confirmpassword"]!=null )
{
    
$old=$_REQUEST["oldpassword"];
$new=$_REQUEST["newpassword"];
$confirm=$_REQUEST["confirmpassword"];

$a=$_SESSION["user"];
$b=$_SESSION["pass"];

$dbhost = 'localhost';
$dbuser = 'root';
$dbname='hotel';
$dbpass = '';

    if($b==$old)
    {
          
        if($new==$confirm){

           $_SESSION["pass"]=$new;
            $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");
            $query="update adminlogin set password=? where username=?";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ss",$new,$a);
             $stmt->execute();
             
             ?>
            <script>alert("Password Changed")</script> 
                <?php
                 header("Location:profile.php?error=4");   
            }
            else {
                header("Location:profile.php?error=3");    
                }
    } 
    else {
        header("Location:profile.php?error=2");   
    }


}
else {
   header("Location:profile.php?error=1");   
} 

?>
