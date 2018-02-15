<!doctype html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jquery-->
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <h4>Select a Product</h4>
        
        <br/>
        
        <form method= "POST" action ="Ebus2.php">
        
        <label for="salesforce">
            <input type="radio" id="salesforce" name="product" checked onclick ="disablebtnproceed()"/>
            salesforce@ $100
            </label>
        
        </br>
        
        <label for="aws">
            <input type ="radio" id="aws" name="product" onclick="disablebtnproceed()"/>
            aws @$300
        </label>
        
        <br/>
        <br/>
        
        <label for = "subtotal">
            Sub Total
            <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for "total">
               Total
               <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnproceed" disabled>add to shopping cart</button>
            
            </form>
            
            <br/>
            <button onclick="calcsub()">Calculate cost</button>
            <a role="button" href="ebus1.php">Clear Choice</a>
    </body>
</html>