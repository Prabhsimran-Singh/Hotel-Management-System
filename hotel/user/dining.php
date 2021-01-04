<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
 <head>
      <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
          <script src="bootstrap/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
      
        <title>hotel</title>
        
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
        
    </style>
    <script>

        window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
                 document.getElementById("bar").style.height = "60px";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
             if (document.body.scrollTop > 20 || document.documentElement.scrollTop >20) {
               
                 document.getElementById("bar").style.height = "60px";
            } else {
                document.getElementById("bar").style.height = "100px";
            }
        }

// When the user clicks on the button, scroll to the top of the document
    function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
       
    </script>

    </head>
  <body>
      <div class="cointainer-fluid" >
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-long-arrow-up" style="font-size:20px"></i></button>
            <?php
            include 'header.php'
            ?>
            <!--slider-->
            <div>
                
                <div  class="carousel slide" data-ride="carousel" id="myCarousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                         <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                          <li data-target="#myCarousel" data-slide-to="4" class=""></li>
                         <li data-target="#myCarousel" data-slide-to="5" class=""></li>
                          
                      
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item">
                            <img src="dinning2jpg.jpg" alt="Los Angeles" style="width:100%;" >
                            
                        </div>

                        <div class="item active">
                            <img src="dinning5.jpg" alt="Chicago" style="width:100%;">
                           
                        </div>

                        <div class="item">
                            <img src="dinning3.jpg" alt="New York" style="width:100%;">
                           
                        </div>
                        
                         <div class="item ">
                             <img src="dinning6.jpg" alt="New York" style="width:100%;">
                            
                        </div>
                        <div class="item ">
                             <img src="dinning4.jpg" alt="New York" style="width:100%;">
                            
                        </div>
                        <div class="item ">
                            <img src="dinning1.jpg" alt="New York" style="width:100%;">
                            
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span><i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: -10px; width: 30px; height: 30px; margin-top: 400px; font-size: 30px;"></i></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span><i class="fa fa-chevron-right" aria-hidden="true" style="margin-left: -10px; width: 30px; height: 30px; margin-top: 400px; font-size: 30px;"></i></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
           <div style="position:relative">
            <div class="row" style="border-top:3px solid #c29c68;">
                <img src="rest1.png" alt="" style="width:100% "/>
            </div>
            <div class="row">
                <img src="rest2.JPG" alt="" style="width:100% "/>
            </div>
            <div class="row">
                <img src="rest3.png" alt="" style="width:100% "/>
            </div>   
            
          <?php include 'footer.php';?>
            </div>
           
     </div>
  </body>
</html>
