<?php
session_start()
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
    <style>
        #changepass{
            opacity:0;
            visibility: hidden;
            
        }
        #message{
            color:greenyellow;
            font-size:15px;
            float:right;
            
        }
    </style>
    <script>
    function changepassword(){
        
        document.getElementById("changepass").style.opacity = "1";
         document.getElementById("changepass").style.visibility = "visible";
    }
      function hidepassword(){
    
        document.getElementById("changepass").style.opacity = "0";
         document.getElementById("changepass").style.visibility = "hidden";
    }
    function displaymsg(){
    alert("ff");
        document.getElementById("message").innerHTML = "Pasword changed";
         
    }
    </script>
<body>
    <div id="wrapper">
        <!--header-->
       <?php include 'mainheader.php';?>
         <!--header end-->
           <!-- /. NAV TOP  -->
          <!--Side -->  
              <?php include 'mainside.php';?>  
           <!--Side End-->
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Your Profile</h2>   
                     <?php $user=$_SESSION["user"]?>
                        <h5>Welcome <?php echo $user?> , Love to see you back. </h5>
                        <?php
                         $a = 0;
                         if (isset($_REQUEST["error"])) {
                             $a = $_REQUEST["error"];
                         }
                         ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Settings
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php
                                    if ($a == 4) {
                                        ?>

                                    <script >displaymsg()</script>

                                        <?php
                                    }
                                    ?>
                                    <h3 >Change Password</h3>
                                    <form role="form">
                                        <br>
                                            <button type="button" onclick="changepassword()" class="btn btn-default">Change Password</button>
                                            <div id="message"></div>
                                    </form>

                                 
    </div>
                                
                      
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                     <div id="changepass" >
                         
                      <form role="form" action="profilecode.php">
                                        <div class="form-group">
                                            <label>Enter old Password</label>
                                            <input class="form-control" name="oldpassword" placeholder="Your old password"/>
                                        </div>
                                        <div class="form-group ">
                                            <label>Enter new Password</label><br>
                                                <span ><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="newpassword"  placeholder="Your new Password" />
                                        </div>
                          
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="confirmpassword"  placeholder="confirm new Password" />
                                        </div>
                            <button type="submit" class="btn btn-default">Submit Button</button>
                             <button type="button" onclick="hidepassword()" class="btn">Cancel</button>
                               <?php
                                            if ($a == 1) {
                                                ?>
                                                    <script>changepassword();</script>
                                                <?php
                                                echo "Field Empty";
                                            } else if ($a == 2) {
                                                ?>
                                                    <script>changepassword();</script>
                                                <?php
                                                echo "Old Password incorrect";
                                            } else if ($a == 3) {
                                                ?>
                                                    <script>changepassword();</script>
                                                <?php
                                                echo "new password not equal to Confirm Password";
                                            }
                             ?>
                          
                      </form>
                     </div>
                </div>
            </div>
                <!-- /. ROW  -->
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
