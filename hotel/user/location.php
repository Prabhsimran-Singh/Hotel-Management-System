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
        <div id="map" style="width:100%; position:relative;margin-top:100px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31055.411136527222!2d103.859741!3d13.354853!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4e6a3ab2e87e0271!2sVIROTH&#39;S+HOTEL!5e0!3m2!1sen!2sth!4v1532971529077" width="100%" height="700px" frameborder="0" style="border:0"  allowfullscreen></iframe>
        </div>
        
            <?php include 'footer.php';?>
         
     </div>
    </body>
</html>
