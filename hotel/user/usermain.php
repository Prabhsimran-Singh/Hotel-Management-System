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
     
      
        <title>The Majestic Hotel</title>
        
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
            <div  >
                
                <div  class="carousel slide" data-ride="carousel" id="myCarousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                         <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item">
                            <img src="img3.jpg" alt="Los Angeles" style="width:100%;" >
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>LA is always so much fun!</p>
                            </div>
                        </div>

                        <div class="item active">
                            <img src="pool2.jpg" alt="Chicago" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img4.jpg" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        
                         <div class="item ">
                             <img src="pool1.jpg" alt="New York" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
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
           
      <div >
            <div style="border-top:3px solid #c29c68; position: relative">
                 <div id="opc" style="height:800px ;background-image:url('iner1.jpg') "> 
                     <div align="center" style="padding-top:80px; "><span style="font-family:Garamond ;font-size: 37px; color:#c29c68; ">EXPERIENCE THE MAJESTIC HOTEL</span></div>
              
                     <div style="margin-top:50px;">
                         
                         <div style="margin-left:130px;float:left;">
                                      <img style="height:210px;width: 290px; border-radius:5px;  "src="special.jpg" alt=""/>
                                      <div style="font-family:Garamond ;width: 290px;letter-spacing:2px;padding-top:15px;   ">
                                          <span style="color:#c29c68;font-size:20px;" >SPECIAL OFFERS<br></span>
                                          <span style="font-size:17px; ">We offer several attractively priced packages that will enrich your stay at Viroth’s. Enjoy our unique dining and touring opportunities or choose one of the rejuvenating treatments for which our spa is known.</span>
                                          <br><button style="font-family:Garamond;border:1px solid #c29c68;color:#c29c68 ;background:transparent; font-size:18px;padding:10px;width:150px;margin-top:20px;  "   onclick=""><span>More Details <i class="fa fa-angle-double-right"  style="font-size:20px"></i><span></button>
                                      </div>
                                 </div>
                         
                           <div style="margin-left:35px; float:left;">
                                      <img style="height:210px;width: 290px; border-radius:5px;  "src="hotel.jpg" alt=""/>
                                      <div style="font-family:Garamond ;width: 290px;letter-spacing:2px;padding-top:15px;   ">
                                          <span style="color:#c29c68;font-size:20px;" >ROOMS & SUITES<br></span>
                                          <span style="font-size:17px; ">We have thirty-five spacious rooms and suites tastefully and comfortably furnished. These are supplied with latest innovative technology, enabling you to relax in surroundings that evoke simple splendors of Cambodian culture while remaining connected to your family and friends </span>
                                          <br><button style="font-family:Garamond;border:1px solid #c29c68;color:#c29c68 ;background:transparent; font-size:18px;padding:10px;width:150px;margin-top:20px;  "   onclick=""><span>More Details <i class="fa fa-angle-double-right"  style="font-size:20px"></i><span></button>
                                      </div>
                                 </div>
                         
                             <div style="margin-left:35px;float:left;">
                                      <img style="height:210px;width: 290px; border-radius:5px;  "src="gym.jpg" alt=""/>
                                      <div style="font-family:Garamond ;width: 290px;letter-spacing:2px;padding-top:15px;   ">
                                          <span style="color:#c29c68;font-size:20px;" >WELLNESS<br></span>
                                          <span style="font-size:17px; ">Keep fit and well during your stay by making use of our treadmills and other state-of-the-art equipment in our climate-controlled gym.</span>
                                          <br><button style="font-family:Garamond;border:1px solid #c29c68;color:#c29c68 ;background:transparent; font-size:18px;padding:10px;width:150px;margin-top:20px;  "   onclick=""><span>More Details <i class="fa fa-angle-double-right"  style="font-size:20px"></i><span></button>
                                      </div>
                                 </div>
                         
                              <div style="margin-left:35px;float:left;">
                                  <img style="height:210px;width: 290px; border-radius:5px;  "src="dinning2jpg.jpg" alt=""/>
                                      <div style="font-family:Garamond ;width: 290px;letter-spacing:2px;padding-top:15px;   ">
                                          <span style="color:#c29c68;font-size:20px;" >DINING<br></span>
                                          <span style="font-size:17px; ">The Majestic Hotel has both a poolside dining area as well as a glass-enclosed air-conditioned dining rooms where you can enjoy delicious Asian and Western dishes prepared by our chefs.</span>
                                          <br><button style="font-family:Garamond;border:1px solid #c29c68;color:#c29c68 ;background:transparent; font-size:18px;padding:10px;width:150px;margin-top:20px;  "   onclick=""><span>More Details <i class="fa fa-angle-double-right"  style="font-size:20px"></i><span></button>
                                      </div>
                                 </div>
                                 
                     </div>    
                 
                 
                 </div>
                
                 
            </div>
            
        </div>
            <div>
                <div style="height:600px;background-image:url('v2.jpg');width:100%; background-repeat: no-repeat;"> 
                    <div align="center"style="padding-top: 420px;">
                        <span style="font-family:Garamond ;font-size: 40px; color:white; ">10 Reasons<br></span>
                        <span style="font-family:Garamond ;font-size: 20px; color:white;letter-spacing:2px; ">Why to choose The Majestic Hotel</span>
                         <br><button style="font-family:Garamond;border:1px solid white;color:white ;background:transparent; font-size:15px;padding:8px;width:130px;margin-top:20px;  " onclick=""><span id="hvr">LEARN MORE<span></button>
                    </div>
            </div>    
             
        
            </div>
   
            
            <div style="height:650px;background-image:url('wall.jpg');width:100%; background-repeat: no-repeat;"> 
                <div style="width:400px;height:650px;padding-top:100px;margin-left:170px;float:left;   ">
                    <span style="font-family:Garamond ;font-size: 20px; ">FACEBOOK<br></span>
                    <span style="font-family:Garamond ;font-size: 15px; padding-top:15px; letter-spacing:2px;">The Majestic Hotel is the perfect spot to relax and enjoy the comforts of a world-class hotel in the unsurpassed holiday destination of Siem Reap.<br></span>
                    <img style="border-radius:5px;margin-top:15px; " href="https://www.facebook.com/Viroths/" src="bar.png" width="400" height="330">
                </div>


                <div style="width:350px;height:600px;padding-top:100px;margin-left:40px;float:left;   ">
                    <span style="font-family:Garamond ;font-size: 20px; ">INSTAGRAM<br></span>

                    <img style="margin-top:10px; " src="insta.png" width="350" height="400">
                </div>
                
                <div  style="width:400px;height:600px;padding-top:100px;margin-left:40px;float:left;   "> 
                    <span style="font-family:Garamond ;font-size: 20px; ">YOUTUBE<br></span>
                    <div  style="width:400px;float:left">
                        <iframe class="embed-responsive-item" style="width:350px;height:180px;margin-top:10px;border:none  " src="https://www.youtube.com/embed/TA_N9WwcgPk"></iframe>
                    </div>  
                    <span style="font-family:Garamond ;font-size: 20px; ">MAP<br></span>
                    <div id="map" style="width:350px;height:200px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5034.228041719447!2d103.85968299647243!3d13.35521982727774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e6a3ab2e87e0271!2sVIROTH&#39;S+HOTEL!5e0!3m2!1sen!2sth!4v1531680918084" width="350" height="180" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
            </div>    
           
          <?php include 'footer.php';?>
            
           
     </div>
  </body>
</html>
