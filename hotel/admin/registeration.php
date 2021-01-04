<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <div>
            <?php
            $a=0;
             if (isset($_REQUEST["error"])) {
            $a = $_REQUEST["error"];
        }
        ?>
            <form name="f1" action="registerationcode.php">
                  
            <input style="margin-left: 100px; width:450px;" type="text" name="username" placeholder="username"><br><br>
            <input style="margin-left: 100px; width:450px;" type="text" name="password" placeholder="password"><br><br>
              
             <input style="margin-left: 200px; width:250px;background-color:lightcyan;border-color:lightcyan;  " type="submit" value="register">
             
            
            
               <?php
            if ($a == 1) {
             echo "Invalid user/pass";
            }   
            ?>
              </form>
           
         </div>   
    </body>
</html>
