<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h1>RECEIPT</h1>
        
        <?php
        //Echo session variables that were set on previous page
        echo"Total is" . $_session ["total"]. ".";
        ?>
    </body>
    </html>
    