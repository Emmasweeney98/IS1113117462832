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
    </head>
    
    <body>
        <h1 class="heading">eBusiness</h1>

              <h4>Please enter your payment details</h4>
        
        
            <form action="Ebus3.php" method="POST">
                    <label for="Name">Full Name: </label><br/>
                    <input type="text" id="user_name" name="user_name" maxlength="20" placeholder="First.." class="name"><input type="text" id=last_name name="last_name" maxlength=20 placeholder="Last.." class="name">
                    <br/><br/>
                    <label for="email">Email:</label>
                    <br/>
                    <input type="text" id="user_Email" name="Email" maxlength="30" placeholder="Your Email.."> 
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
            $_SESSION["Email"] = $_POST["Email"];
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["last_name"] = $_POST["last_name"];
            ?>
    
    
    
</html> 