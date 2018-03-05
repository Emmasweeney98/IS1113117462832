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
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
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
    <li><a href="ebus.php">Ebusiness</a></li>
</ul>
        

              <h4>Please enter your payment details</h4>
        
        
              <form action="Ebus3.php" method="POST">
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
                <a href="Ebus3.php">
                    <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
                </a>
              
            </form>
            
            <br/>
            <button class="button validate" onClick="validateDetails()">Validate</button>
            
            <?php
            // Set session variables
            $_SESSION["total"] = $_POST["total"];
        
            ?>
    
    </body>
</html> 