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
                            rules:
                                            {
                                               
                                                password:
                                                        {
                                                            equalTo: "#confirmpass"
                                                        }


                                            },
                                    messages:
                                            {
                                                password: {
                                                    equalTo: "password do not match"
                                                },
                                                

                                            }
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
                <div class="row">
                  
                </div>
                
                <div class="row"  >
                    <div class="col-md-9" style="border:1px solid lightgray">
                        
                        <div class="row" align="center">
                           
                                <a href="#" id="up">1.Check Availability</a>
                            
                                <a href="#" id="up">2.Select a Room</a>
                           
                                <a href="#" id="up">3.Enhance</a>
                           
                                <a href="bookingcompletedetail.php" id="up" class="active">4.Complete Details</a>
                           
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
                                <form role="form" action="bookingcompletedetailscode.php">
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
                                      
                                        
                                            <br><p style="font-size:12px;">* Mandatory<br>&nbsp; Please provide the information below. We respect your privacy. Review our Internet Privacy Policy for more information.</p>
                                            
                                            <div class="form-group">
                                                <label>Title*</label>
                                                <select class="form-control required" name="title" style="width:200px; ">
                                                    <option value="">Choose a Prefix</option>
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                    <option>Dr.</option>
                                                    <option>Prof.</option>
                                                </select>
                                            </div>
                                            <div class="form-group " style="float:left; ">
                                                
                                                <label>First Name*</label>
                                                <input class="form-control required " name="firstname" style="width:350px;" />
                                            </div>  
                                            <div class="form-group " style="float:right;margin-right:70px; "> 
                                                 <label>Last Name*</label>
                                                <input class="form-control required" name="lastname" style="width:350px;"/>
                                            </div>
                                            
                                            <div class="form-group" style=" width:350px;"> 
                                                 <label>Telephone*</label>
                                                <input class="form-control required digits" maxlength="10" minlength="10" name="telephone" style="width:350px;"/>
                                            </div>
                                            
                                             <div class="form-group" style=" width:300px;"> 
                                                 <label>Email*</label>
                                                <input class="form-control required email" name="email" style="width:350px;"/>
                                            </div>
                                            <div class="form-group" style=" width:300px;"> 
                                                 <label>Password*</label>
                                                <input  type="password" class="form-control required " name="comfirmpass" id="confirmpass" style="width:350px;"/>
                                            </div>
                                            
                                            <div class="form-group" style=" width:300px;"> 
                                                 <label>Confirm Password*</label>
                                                <input type="password" class="form-control required " name="password" style="width:350px;"/>
                                            </div>
                                            
                                            <br>
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="checkbox1" value="1">Yes, I would like to receive news and offers by email from The Majestic Hotel</label>
                                            </div>
                                            <br>
                                             <div class="form-group required" > 
                                                 <label>Address*</label>
                                                <input class="form-control required" name="address" />
                                            </div>
                                            <div class="form-group " style="float:left; ">
                                                
                                                <label>City*</label>
                                                <input class="form-control required " name="city" style="width:250px;" />
                                            </div>  
                                            <div class="form-group" style="float:right;margin-right:30px; "> 
                                                 <label>Country*</label>
                                                <input class="form-control required" name="country" style="width:250px;"/>
                                            </div>
                                            <div class="form-group" style="float:right;margin-right:15px; "> 
                                                 <label>State*</label>
                                                <input class="form-control required " name="state" style="width:250px;"/>
                                            </div>
                                             <div class="form-group"  > 
                                                 <label>Pin Code*</label>
                                                <input class="form-control required digits" maxlength="6" minlength="6" name="pincode" style="width:250px;"/>
                                            </div>
                                  
   
                                     </div>
                                </div>        
                                            
                                <div class="panel panel-default ">
                                     <div class="panel-heading " style="color:#c29c68;">
                                                    Credit Information
                                     </div>
                                     <div class="panel-body"  >
                                         <br><p style="font-size:12px;">A credit card is required to confirm and guarantee your reservation. Your security is important to us. We offer a secure website to process your information and take steps to maintain your privacy. As a member, providing your credit card information with your profile will allow you to enjoy rapid check in and check out services and ease the process of booking your stays online. Simply select the hotel and dates, and we take care of the rest. Our website is secure for your protection.</p>      
                                         <div style="height:100px;">
                                            <div class="form-group" style="float:left;width:65%" > 
                                                 <label>Credit Card Number*</label>
                                                 <input class="form-control required digits " name="creditcard" style="width:250px;padding-right:60px; "/>
                                            </div>     
                                            <div class="form-group" style="float:right;margin-right:80px;" >      
                                                <label>Credit Card Type*</label>
                                                <select class="form-control required  " name="cardtype" style="width:200px;">
                                                    <option>Visa</option>
                                                    <option>MasterCard</option>
                                                    <option>American Express</option>
                                                    <option>Dinner's club</option>
                                                    <option>Discover</option>
                                                    <option>JCB</option>
                                                </select>
                                            </div>
                                         </div>
                                         <div style="height:100px;">
                                         <div class="form-group" style="float:left ;" >      
                                                <label>Expiration Date*</label>
                                                <select class="form-control required " name="expmonth" style="width:100px;">
                                                     <option value="">MM</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                    <option>06</option>
                                                    <option>07</option>
                                                    <option>08</option>
                                                    <option>09</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    
                                                </select>
                                            </div>
                                             <div class="form-group" style="float:right;margin-right:500px;">      
                                                 <label style="color:white;"> hahah</label>
                                                <select class="form-control required " name="expyear" style="width:150px;">
                                                     <option value="">YY</option>
                                                    <option>2019</option>
                                                    <option>2020</option>
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    
                                                    
                                                </select>
                                            </div>
                                     </div>
                                            <p style="font-size:13px;">Any required deposit will be charged to this credit card. For more info, see Full Rate Summary.<br>

                                             * I have read and agree to the reservation terms and conditions stated above. <br>

                                             * I understand that by selecting the Submit Details button, I am authorizing a charge on the credit card number provided to purchase the room and tax as specified in the reservation details. I understand that the cancellation policy stated in the Full Room Rate Summary is in effect.</p>
                                            
                                            <div class="checkbox">
                                                <label><input type="checkbox" name="checkbox1" class="required "> I accept the Terms and Conditions</label>
                                            </div>
                                            <p style="font-size:11px;"><i>The collected data is processed by Accor SA for the purposes of managing your bookings and stays, getting to know you better, improving the quality of service and customer experience and sending you information on AccorHotels Group products and services. The data is intended for Accor SA, AccorHotels group legal entities, hotels and Accor SA service providers. In particular, the data related to your stays, preferences, satisfaction and, if the case may be, your loyalty program are shared between the AccorHotels Group hotels in order to improve the quality of service and your experience in each of these hotels. You may at any time object to the sharing of this data between the hotels of the Group by writing to data.privacy@accor.com. The data may be transferred outside the European Union where this is necessary for implementing your booking or managing pre-contractual measures intended to fulfil the booking or where appropriate and suitable safeguards have been provided. You have the right to request access to and rectification or erasure of your data, to object to processing as well as the right to issue instructions on how this data is to be treated after your death (hopefully as late as possible!) by writing to data.privacy@accor.com. 
                                                    Every hotel, as data controller, processes your personal data for the purposes of booking and guest management, billing and payment, canvassing, special offers and sales events, commercial surveys and satisfaction enquiries. The data is intended for use by the hotel as well as its service providers and, in the case of hotels operating under one of the AccorHotels Group brands, for the various Accor SA departments, as far as each is concerned. You have the right to request access and rectification or erasure of your data and to object to processing. You can exercise such right by writing to the hotel management at the above-mentioned address. 
                                                    For more information about the protection of your personal data, please see our <b>Personal Data Protection Charter.</b></i></p>
                                     </div>
                                </div>             
                                            
                                       <button type="reset" class="btn btn-default" style="float:left;margin-left:70px;width:150px;  ">Cancel</button>
                                    <button type="submit" class="btn btn-danger" style="float:right;margin-right:70px;width:150px;  ">Submit</button>
                                   </form> 
                                <br><br><br>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-3" style="border:1px solid lightgray">
                        
                    </div>
                    
                </div>
            </div>
       
            
        </div>    
        <?php include 'footer.php';?>
    </body>
</html>
