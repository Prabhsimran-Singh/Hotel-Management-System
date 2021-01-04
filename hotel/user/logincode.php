<?php
       
if($_REQUEST["email"]!=null && $_REQUEST["password"]!=null)
{
    
$a=$_REQUEST["email"];
$b=$_REQUEST["password"];

            $r = array();

           $dbhost = 'localhost';
           $dbuser = 'root';
           $dbname='hotel';
           $dbpass = '';

           $aa=0;
            $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die ("Database not correct");
            $db->set_charset("utf8mb4");
            $query = "SELECT * FROM `registration` WHERE email=? and password=? ";
            $stmt = $db->prepare($query);
            $stmt->bind_param("ss",$a,$b);

            $stmt->execute();

            $arr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
           
            if ($arr) {
                 foreach ($arr as $k)
                {
                $r[] = $k;
                }
            }             
                           
             
            if(count($r)>0)
            {
             
              header("Location:account.php"); 
            }
            else{
                header("Location:login.php?error=1"); 
            }
}
else{
    header("Location:login.php?error=1");
}

?>

