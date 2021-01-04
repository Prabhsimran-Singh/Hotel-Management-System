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
        <link href="bootstrap/icon.css" rel="stylesheet" type="text/css"/>
          <script src="bootstrap/jquery.min.js" type="text/javascript"></script>
        <script src="bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
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
            height:600px;
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
       function scrollWin(x, y) {
    window.scrollBy(x, y);
   
    
       }
    </script>

    </head>
  <body>
        <div class="cointainer-fluid">
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-long-arrow-up" style="font-size:20px"></i></button>
            <?php
            include 'header.php'
            ?>
            <div style="heght:650px;">
                <img src="tempsnip.png" alt="" />
            </div>
             <div style="height:400px;" align="center">
                 <div style="padding-top:95px;">
                     <span style="font-family:Garamond ;font-size: 12px; color:Black; ">ROOMS</span><br>
                     <h2 style="  color:#555555; ">SUITES</h2>
                     <span style="font-size: 32px; color:#555555; ">-</span><br>
                     <span style="font-family:Garamond ;font-size: 18px; color:#555555;  ">The thirty-six rooms and suites of The Majestic Hotel offer the comfort <br>of a residence crafted with a careful eye for detail.</span><br>
                     <br><br><br>
                 </div>
             </div>    
             <div class="row" style="height:600px;background-color:#eeeeee; ">
                    <div class="col-md-4" align="center" >
                        <div style="height:300px;width:300px; margin-top:150px; ">
                          <p style="font-family:Garamond ;font-size: 16px; color:#555555;letter-spacing:1px;    ">In the 12 Junior Suites from 50 to 62 sqm, living areas, dressing rooms and bathrooms are even more spacious. Each suite features a unique element of décor that highlights their individuality. A floatation bath that instills a sense of weightlessness, an authentic sauna to rejuvenate the body after a day out on the slopes, and a vast living area to enjoy a dinner in complete intimacy each punctuate a stay filled with remarkable experiences.</p><br>
                          <br><br> 
                          <button onclick="scrollWin(0, 600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_downward</i></button>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div  class="carousel slide" data-ride="carousel" id="myCarousel"  >
                            <!-- Indicators -->
                            <ol class="carousel-indicators " style="background-color:#514947;margin-bottom:-20px;margin-left:-30px;width:550px;height:50px;padding-top:20px;">
                                <li data-target="#myCarousel" data-slide-to="0" class="" style="border:none;background-color:#827c7b;margin-right:15px; "></li>
                                <li data-target="#myCarousel" data-slide-to="1" class="active" style="border:none;background-color:#827c7b;margin-right:15px; "></li>
                                <li data-target="#myCarousel" data-slide-to="2" class="" style="border:none;background-color:#827c7b;"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="height:600px;">
                                <?php
                                        $dbhost = 'localhost';
                                        $dbuser = 'root';
                                        $dbname = 'hotel';
                                        $dbpass = '';
                                        $r = array();

                                        $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
                                        $db->set_charset("utf8mb4");
                                        $query = "select * from type ";
                                        $stmt = $db->prepare($query);

                                        $stmt->execute();

                                        $arr = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        if ($arr) {
                                            foreach ($arr as $k) {
                                                $r[] = $k;
                                            }
                                        }
                                ?>
                                        
                                                 
                                               
                                                
                                                
                                             
                                        
                                <div class="item">
                                    
                                    <img src="../admin/uploads/<?php echo $r[0]["img1"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item active">
                                    <img src="../admin/uploads/<?php echo $r[0]["img2"]?>" style="width:100%;"/>
                                    
                                </div>

                                <div class="item">
                                    <img src="../admin/uploads/<?php echo $r[0]["img3"]?>" style="width:100%;"/>
                                    
                                </div>

                               

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="margin-top: 160px;z-index: 50;height: 0px;margin-left: 450px;">
                                <span><i class="fa fa-angle-left" aria-hidden="true" style="margin-right: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next" style="margin-top: 160px;z-index: 50;height: 0px;">
                                <span><i class="fa fa-angle-right" aria-hidden="true" style="margin-left: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                    </div>
            </div>   
            
             <div class="row" style="height:600px;background-color:#eeeeee; ">

                     <div class="col-md-8">
                          <div  class="carousel slide" data-ride="carousel1" id="myCarousel1"  >
                            <!-- Indicators -->
                            <ol class="carousel-indicators " style="background-color:#514947;margin-bottom:-20px;margin-left:-50px;width:550px;height:50px;padding-top:20px;">
                                <li data-target="#myCarousel1" data-slide-to="0" class="" style="border:none;background-color:#827c7b;margin-right: 15px;"></li>
                                <li data-target="#myCarousel1" data-slide-to="1" class="active" style="border:none;background-color:#827c7b;margin-right:15px; "></li>
                                <li data-target="#myCarousel1" data-slide-to="2" class="" style="border:none;background-color:#827c7b;"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="height:600px;">
                               
                                <div class="item">
                                    
                                    <img src="../admin/uploads/<?php echo $r[1]["img1"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item active">
                                    <img src="../admin/uploads/<?php echo $r[1]["img2"]?>" style="width:100%;"/>
                                    
                                </div>

                                <div class="item">
                                    <img src="../admin/uploads/<?php echo $r[1]["img3"]?>" style="width:100%;"/>
                                    
                                </div>

                               

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel1" data-slide="prev" style="margin-top: 160px;z-index: 50;height: 0px;margin-left: 450px;">
                                <span><i class="fa fa-angle-left" aria-hidden="true" style="margin-right: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel1" data-slide="next" style="margin-top: 160px;z-index: 50;height: 0px;">
                                <span><i class="fa fa-angle-right" aria-hidden="true" style="margin-left: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                     </div>
                
                     <div class="col-md-4" align="center" >
                         <div style="height:300px;width:300px; margin-top:150px; ">
                             <p style="font-family:Garamond ;font-size: 16px; color:#555555;letter-spacing:1px;    ">With a loft-style design, the Deluxe Junior Suite of 65 sqm features an inviting entrance including a coat closet and powder room, a dining room, spacious bedroom and a living room with a balcony opening onto views over the slopes. A clever sliding wall separates the living areas from a grand dressing room and adjoining bathroom outfitted with a made-to-measure bathtub, chaise-lounge, steam-shower and a separate toilet room.</p><br>
                             <br><br>  
                             <button onclick="scrollWin(0, 600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_downward</i></button> 
                               <button onclick="scrollWin(0, -600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_upward</i></button> 
                         </div>
                     </div>
            </div>
             <div class="row" style="height:600px;background-color:#eeeeee; ">
                    <div class="col-md-4" align="center" >
                        <div style="height:300px;width:300px; margin-top:150px; ">
                          <p style="font-family:Garamond ;font-size: 16px; color:#555555;letter-spacing:1px;    ">The Duplex Suite of 70 sqm is situated around a large light-filled living area, a library and an office. Upstairs, a suite decorated in blonde oak and soft colours hosts the bedroom, dressing room and bathroom.</p><br>
                          <br><br><br><br><br><br>
                           <button onclick="scrollWin(0, 600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_downward</i></button> 
                           <button onclick="scrollWin(0,-600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_upward</i></button> 
                          
                        </div>
                    </div>
                    <div class="col-md-8">
                         <div  class="carousel slide" data-ride="carousel" id="myCarousel2"  >
                            <!-- Indicators -->
                            <ol class="carousel-indicators " style="background-color:#514947;margin-bottom:-20px;margin-left:-30px;width:550px;height:50px;padding-top:20px;">
                                <li data-target="#myCarousel2" data-slide-to="0" class="" style="border:none;background-color:#827c7b;margin-right:15px;"></li>
                                <li data-target="#myCarousel2" data-slide-to="1" class="active" style="border:none;background-color:#827c7b;margin-right:15px;"></li>
                                <li data-target="#myCarousel2" data-slide-to="2" class="" style="border:none;background-color:#827c7b;"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="height:600px;">
                            
                                <div class="item">
                                    
                                    <img src="../admin/uploads/<?php echo $r[2]["img1"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item active">
                                    <img src="../admin/uploads/<?php echo $r[2]["img2"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item">
                                    <img src="../admin/uploads/<?php echo $r[2]["img3"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                               

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel2" data-slide="prev" style="margin-top: 160px;z-index: 50;height: 0px;margin-left: 450px;">
                                <span><i class="fa fa-angle-left" aria-hidden="true" style="margin-right: -10px; width: 30px; height: 30px; margin-top: 400px; font-size: 25px;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel2" data-slide="next" style="margin-top: 160px;z-index: 50;height: 0px;">
                                <span><i class="fa fa-angle-right" aria-hidden="true" style="margin-left: -10px; width: 30px; height: 30px; margin-top: 400px; font-size: 25px;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                    </div>
            </div>     
             <div class="row" style="height:600px;background-color:#eeeeee; ">

                     <div class="col-md-8">
                           <div  class="carousel slide" data-ride="carousel" id="myCarousel3"  >
                            <!-- Indicators -->
                            <ol class="carousel-indicators " style="background-color:#514947;margin-bottom:-20px;margin-left:-48px;width:550px;height:50px;padding-top:20px;">
                                <li data-target="#myCarousel3" data-slide-to="0" class="" style="border:none;background-color:#827c7b;margin-right:15px;"></li>
                                <li data-target="#myCarousel3" data-slide-to="1" class="active" style="border:none;background-color:#827c7b;margin-right:15px;"></li>
                                <li data-target="#myCarousel3" data-slide-to="2" class="" style="border:none;background-color:#827c7b;"></li>
                                
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" style="height:600px;">
                                
                                <div class="item">
                                    
                                    <img src="../admin/uploads/<?php echo $r[3]["img1"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item active">
                                    <img src="../admin/uploads/<?php echo $r[3]["img2"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                                <div class="item">
                                    <img src="../admin/uploads/<?php echo $r[3]["img3"]?>" style="height:600px;width:100%;"/>
                                    
                                </div>

                               

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel3" data-slide="prev" style="margin-top: 160px;z-index: 50;height: 0px;margin-left: 450px;">
                                <span><i class="fa fa-angle-left" aria-hidden="true" style="margin-right: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel3" data-slide="next" style="margin-top: 160px;z-index: 50;height: 0px;">
                                <span><i class="fa fa-angle-right" aria-hidden="true" style="margin-left: -10px; width: 30px; height: 30px; margin-top: 405px; font-size: 25px;"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div> 
                     </div>
                
                     <div class="col-md-4" align="center" >
                         <div style="height:300px;width:300px; margin-top:150px; ">
                             <p style="font-family:Garamond ;font-size: 16px; color:#555555;letter-spacing:1px;    ">In red and white tones contrasted with accents of dark wenge wood, the Deluxe Duplex Suite of 105 sqm offers a dining room, living room and reading nook. A staircase leads to the lower floor and bedroom, dressing room and chaise-lounge sitting area as well as the bathroom outfitted with a massage table and sauna to enjoy moments of relaxation in complete privacy.</p><br>
                             <br><br><br>
                             <button onclick="scrollWin(0,-600)" style="background:transparent;border:none;  "data-scroll-speed="9"><i class="material-icons" style="font-size:30px; ">arrow_upward</i></button> 
                              
                         </div>
                     </div>
            </div>
            <div style="height:300px;" align="center">
                 <div style="padding-top:100px;">
                    
                     <span style="font-family:Garamond ;font-size: 20px; color:#555555;  ">Combining elegance, charm and singularity, the suites reveal a cosy universe <br>punctuated by precious materials and bespoke furniture.</span><br>
                 </div>
             </div>    
            
          <?php include 'footer.php';?>
            
           
     </div>
  </body>
</html>
