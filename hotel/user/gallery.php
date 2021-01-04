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
            height:1000px;
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
         #myImg1 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg1:hover {opacity: 0.7;}
         #myImg2 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg2:hover {opacity: 0.7;}
         #myImg3 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg3:hover {opacity: 0.7;}
        
        #myImg4 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg4:hover {opacity: 0.7;}
        
        #myImg5 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg5:hover {opacity: 0.7;}
        
        #myImg6 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg6:hover {opacity: 0.7;}

        #myImg7 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg7:hover {opacity: 0.7;}
        
        #myImg8 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg8:hover {opacity: 0.7;}
         
        #myImg9 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg9:hover {opacity: 0.7;}
        
        #myImg10 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg10:hover {opacity: 0.7;}
         
        #myImg11 {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg11:hover {opacity: 0.7;}
     

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 200px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {    
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {-webkit-transform:scale(0)} 
            to {-webkit-transform:scale(1)}
        }

        @keyframes zoom {
            from {transform:scale(0)} 
            to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
            position:relative;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px){
            .modal-content {
                width: 100%;
            }
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
             <div style="position:relative">
                  <div align="center" style="background-image:url('wall.jpg');height:1200px;position:relative;padding-top:100px;  ">
                   <div style="height:1100px;width:1000px;">
            <span style="color:#c29c68;font-size:40px;font-family:Garamond ;letter-spacing:2px;padding-top:15px;" >PHOTOS GALLERY<br></span>
            <span style="color:black;font-size:17px;font-family:Garamond ;letter-spacing:2px;" >A montage of views of the tropical beauty, pleasure-filled comforts, splendid architecture, and outstanding service that wait you at Majestic Hotel.</span>
            <span style="color:black;font-size:20px;font-family:Garamond ;letter-spacing:2px;" ><br>-------------------------------------------</span>
          
            <br>
            <img id="myImg1" src="pool2.jpg  " alt="Main Pool" style="width:100%;max-width:300px;height:170px;margin:5px;">
             <img id="myImg2" src="pool3.jpg  " alt="East side pool" style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg3" src="pool1.jpg  " alt="Activity Pool" style="width:100%;max-width:300px;height:170px;margin:5px; ">
              <img id="myImg4" src="gym1.jpg " alt="Main Gym" style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg5" src="gym2.jpg  " alt="West Garden Gym" style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg6" src="spa1.jpg " alt="The Beach Spa " style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg7" src="spa2.jpg " alt="The Cove Spa " style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg8" src="wellness1.jpg " alt="Tennis court " style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg9" src="rock.jpg " alt="Rock Climbing " style="width:100%;max-width:300px;height:170px;margin:5px;">
              <img id="myImg10" src="volley.jpg " alt="Pool Volleyball " style="width:100%;max-width:300px;height:170px;margin:5px;">
               <img id="myImg11" src="yoga.jpg " alt="Morning Yoga " style="width:100%;max-width:300px;height:170px;margin:5px;">
            
            
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg1');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//----------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg2');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg3');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg4');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//----------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg5');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg6');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg7');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//----------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg8');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg9');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg10');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//----------------------------------------

var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg11');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");


img.onclick = function(){
    modal.style.display = "block";
  
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
//--------------------------------------------



</script>
                   </div>
                  </div>   
                   
           </div> 
          <?php include 'footer.php';?>
            
           
     </div>
  </body>
</html>
