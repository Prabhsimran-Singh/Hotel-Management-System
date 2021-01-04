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
        
        
        #message{
            color:greenyellow;
            font-size:15px;
            float:right;
            
        }
    </style>
    <script>
   
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
                     <h2>Facilities</h2>   
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
                                
                             </div>
                             <div class="panel-body">
                                 <div class="row">
                                     <div class="col-md-6">
                                         
                                         <h3 >ALL Types</h3>
                                         
                                      

                                     </div>
                                     <div class="col-md-6">
                                         
                                        
                                         <a href="typeadd.php" style="float:right;">Add a New type</a>
                                      

                                     </div>


                                 </div>
                             </div>
                       
                         <!-- End Form Elements -->
                         <div class="panel-body" >
                            
                             <form role="form" action="typecode.php">
               <div class="row">
                <div class="col-md-12">
                     <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           All Types
                        </div>
                         </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Type ID</th>
                                            <th>Type Name</th>
                                            <th>Charges</th>
                                            <th>Images</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
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

                                        for ($i = 0; $i < count($r); $i++) {
                                            ?>
                                       
                                        <tr>
                                                <td><?php echo $r[$i]["typeid"] ?></td>
                                                <td><?php echo $r[$i]["typename"] ?></td>
                                                <td><?php echo $r[$i]["charges"] ?></td>
                                                <td> <img src="uploads/<?php echo $r[$i]["img1"]?>" width="50px" height="50px"/></td>
                                                <td> <img src="uploads/<?php echo $r[$i]["img2"]?>" width="50px" height="50px"/></td>
                                                <td> <img src="uploads/<?php echo $r[$i]["img3"]?>" width="50px" height="50px"/></td>
                                                
                                                
                                                <td><a href="typemodify.php?typeid=<?php echo $r[$i]["typeid"] ?>">Modify</a></td>
                                                <td><a href="typedelete.php?typeid=<?php echo $r[$i]["typeid"] ?>">Delete</a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                                
                            </div>
                        </div>
                    </div>
                             </form>
                         </div>
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
