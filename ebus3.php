<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
       <h3 style=" text-align:center;">RECEIPT</h3>
        <div class="receipt">      
            <?php
            // Echo session variables that were set on previous page
            echo "Name: ". $_POST["user_name"];
            echo " " . $_POST["last_name"] .  "<br/>"; 
            echo "Email: " . $_POST["Email"] . "<br/>";
            echo "Your total is: $" . $_SESSION["total"] . ".";
            
            ?>
            </div>
    </body>
    </html>
    