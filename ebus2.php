<?php 
//start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Enter Details</title>
        
        
        <!--jQuery-->
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        <h1 class="heading">eBusiness</h1>
        <ul>
  <li><a href="homepage.html">Home</a></li>
  
    <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Interests</a>
    <div class="dropdown-content">
      <a href="travel.html">Travel</a>
      <a href="sports.html">Sports</a>
      <a href="cloudservices.html">Cloud Services</a>
    </div>
  </li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">CV</a>
    <div class="dropdown-content">
      <a href="cv_page1.html">Personal Details</a>
      <a href="cv_page2.html">Education</a>
      <a href="cv_page3.html">Work Experience</a>
      
     
    </div>
  </li>
    <li><a href="Ebusiness.html">Ebusiness</a></li>
</ul>
        
      <style>
         p {
           font-size:25px;
           font-family:helvetica;
         }
       </style>
              <h4>Please enter your payment details</h4>
        
        
              <form action="ebus3.php" method="POST">
                    <label for="Name">Full Name: </label><br/>
                    <input type="text" name="firstname" id="user_name" maxlength="20" placeholder="First.." class="name">
                    <input type="text" name="lastname"id="last_name" maxlength=20 placeholder="Last.." class="name">
                    <br/><br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input type="text" name="email" id="user_Email" maxlength="30" placeholder="Your Email..">
                    <br/><br/>
                    <label for="user_pin" placeholder="Your PIN..">PIN:</label>
                    <br/>
                    <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4" placeholder="Your Password..">
                <a href="ebus3.php">
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </a>
              
            </form>
           
       </style>
            <br/>
            <button class="button validate" onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
        
            ?>
    
    </body>
</html> 