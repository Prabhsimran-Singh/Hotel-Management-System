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
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
      
        <title>Booking</title>
        <title></title>
          <style>
        .navbar {
            min-height: 80px;
            padding:25px;
            background-color:#3b3b3e;
            font-family: Trebuchet MS;
            
            
        }
/*        .navbar-nav{
          background-color:#3b3b3e;
         
        }*/
        #dist{
            margin-left:100px; 
             
        }
        #a1{
            color:white;
        }
        #a1:hover{
            color:#c29c68;
        }
        .button {
            border-radius: 4px;
            background-color:#c29c68;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 5px;
            width: 150px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -15px;
            transition: 0.5s;
        }
        .button:hover{
            background-color:#b67927; 
        }
        .button:hover span {
            padding-right: 20px;
           
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        #myCarousel{
            height:750px;
        }
        #opc{
           // filter: opacity(10%);
        }
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #c29c68;
            color: white;
            cursor: pointer;
            width:50px;
            height:50px;
            border-radius: 4px;
            opacity:0.5;
        }

        #myBtn:hover {
            background-color:#b67927;
        }
        #hvr:hover {
           color: #c29c68;
        }
        #up{
            height:60px;
            width:174px;
            padding-top:20px; 
            display:inline-block; 
            background-color:#f0f0f1;
            color:black;
            text-decoration:none; 
           border:1px solid black;
           border-collapse:collapsel; 
           margin-left:-5px; 
            
        }
        #up:focus{
            background-color:white;
            border-bottom:none;
        }
    </style>
          <script>

        window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
            
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop >20) {
               
                 document.getElementById("bar").style.height = "60px";
            } else {
                document.getElementById("bar").style.height = "100px";
            }
        }
      </script>  
    </head>
    <body>
        
       
        <div class="cointainer-fluid">
            
            <div>
            <div class="row" style="background-color:black;" align="center">
                <h3 style="font-family:Garamond ;font-size: 30px;letter-spacing:1px;color:#c29c68;">The Majestic Hotel<br>Booking Portal </h3>
            </div>
            </div>
            
            <div class="container" style="background-color: white">
                <div class="row" style="padding-top:50px; " >
                    <div class="col-md-9" style="border:1px solid black">
                        
                        <div class="row" align="center">
                           
                                <a href="#" id="up">1.Check Availability</a>
                            
                                <a href="#" id="up">2.Select a Room</a>
                           
                                <a href="#" id="up">3.Enhance</a>
                           
                                <a href="bookingcompletedetail.php" id="up">4.Complete Details</a>
                           
                                <a href="#" id="up" style="width:179px;">5.Confirm</a>
                            
                            
                        </div>
                        
                        <div>
                            <div>
                                <h3>
                                    <br>
                                    COMPLETE DETAILS
                                    <br>
                                </h3>
                            </div>
                             <br>
                            <div>
                                <div class="panel panel-default ">
                                    <div class="panel-heading " style="color:#c29c68;">
                                       Member Sign In
                                    </div>
                                    <div class="panel-body" style="height:150px;" >
                                        <br><br><span style="font-size:25px;">Already Have an Account ?</span>
                                        <input type="button" class="btn btn-primary" value="Log In" style="height:40px;width:100px;float:right;margin-right:70px;  ">
                                    </div>
                                </div> 
                                
                                <div align="center">
                                    <h4>OR</h4>                                  
                                </div>
                                
                                 <div class="panel panel-default ">
                                    <div class="panel-heading " style="color:#c29c68;">
                                       Personal Information
                                    </div>
                                    <div class="panel-body "  >
                                        <form role="form" action="facilityaddcode.php">
                                        
                                            <br><p style="font-size:12px;">* Mandatory<br>&nbsp; Please provide the information below. We respect your privacy. Review our Internet Privacy Policy for more information.</p>
                                            
                                            <div class="form-group">
                                                <label>Title*</label>
                                                <select class="form-control " name="title" style="width:200px;">
                                                    <option>Choose a Prefix</option>
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                </select>
                                            </div>
                                            <div class="form-group " style="float:left; ">
                                                
                                                <label>First Name*</label>
                                                <input class="form-control " name="firstname" style="width:350px;" />
                                            </div>  
                                            <div class="form-group" style="float:right;margin-right:70px; "> 
                                                 <label>Last Name*</label>
                                                <input class="form-control " name="firstname" style="width:350px;"/>
                                            </div>
                                            
                                            <div class="form-group" style=" width:350px;"> 
                                                 <label>Telephone*</label>
                                                <input class="form-control " name="telephone" style="width:350px;"/>
                                            </div>
                                            
                                             <div class="form-group" style=" width:300px;"> 
                                                 <label>Email*</label>
                                                <input class="form-control " name="email" style="width:350px;"/>
                                            </div>
                                        
                                        </form>

                                    </div>
                                </div> 
                                
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3" style="border:1px solid black">
                        
                    </div>
                    
                </div>
            </div>
       
            
        </div>    
        <?php include 'footer.php';?>
    </body>
</html>
