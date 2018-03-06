<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
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

    </head>
    <body>
       <h3 style=" text-align:center;">RECEIPT</h3>

        <div class="receipt">      
           <p><strong>Congratulations on your purchase!!</strong><p>
            <?php   
            // Echo session variables that were set on previous page
            echo "Name: ". $_POST["firstname"];
            echo " " . $_POST["lastname"] .  "<br/>"; 
            echo "Email: " . $_POST["email"] . "<br/>";
            echo "Your total is: $" . $_SESSION["total"] . ".";
            ?>
            </div>
    </body>
    </html>
    