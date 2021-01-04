<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <script src="bootstrap/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="bootstrap/jquery.validate.min.js" type="text/javascript"></script>
     
      
        <title>Booking</title>
        <title></title>
          <style>
   
        #up{
            height:60px;
            width:174px;
            padding-top:20px; 
            display:inline-block; 
            background-color:#f0f0f1;
            color:black;
            text-decoration:none; 
           border:1px solid lightgray;
           border-collapse:collapsel; 
           margin-left:-5px;
           
            
        }
        #up:focus{
            background-color:white;
            border-bottom:none;
        }
        
    </style>
          <script>
               $(document).ready(
                    function ()
            {
                $("form").validate(
                        {
                    
                        });

            });
                
      </script>  
    </head>
    <body>
        
       
        <div class="cointainer-fluid" style="background-color:#cacaca ">
            
            <div>
            <div class="row" style="background-color:black;width:101%" align="center">
                <h3 style="font-family:Garamond ;font-size: 30px;letter-spacing:1px;color:#c29c68;">The Majestic Hotel<br>Booking Portal </h3>
            </div>
            </div>
              <br>
            <div class="container" style="background-color: white" >
                <div class="row" style="height:600px;">
                    <?php
                    $a=0;
                    if(isset($_REQUEST["error"])){
                        $a=$_REQUEST["error"];
                    }
                    ?>
                   <form role="form" action="logincode.php">
                                <div class="panel panel-default ">
                                    <div class="panel-heading " style="color:#c29c68;">
                                       Member Sign In
                                    </div>
                                    <div class="panel-body" align="center" >
                                       <div style="height:500px;width:500px; border-width:5px; border-style:groove;">
                                           <div class="form-group " style="margin-top: 70px;">

                                               <label>Email*</label>
                                               <input class="form-control required email " name="email" style="width:250px;" />
                                           </div>  
                                           <div class="form-group " style="margin-top: 50px;">

                                               <label>Password*</label>
                                               <input class="form-control required " type="password" name="password" style="width:250px;" />
                                           </div>  
                                           <button type="submit" class="btn btn-primary" style="height:40px;width:100px;margin-top: 50px;">Log In</button>
                                           <br>
                                       <?php
                                       
                                       if($a==1){
                                           echo 'Invalid username/password';
                                       }
                                       ?>
                                           <a href="#" style="margin-top: 50px;">Forget Password ?</a>
                                       </div>
                                    </div>
                                </div> 
                   </form>   
                </div>
                
              
            </div>
       
            
        </div>    
        <?php include 'footer.php';?>
    </body>
</html>
