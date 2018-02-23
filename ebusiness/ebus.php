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
        
       <form method = "POST" action = "ebus2.php">
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                salesforce @ $1000
            </label>
            
            <br/>
            
            <label for="Cloud9">
                <input type="radio" id="cloud9" name="product" checked onClick="disablebtnProceed()">
                Cloud 9 @ $200
            </label>
            
            
            <br/>
                        
            <label for="aws">
                <input type = "radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            <br/>
            <label for="Gmail">
                <input type = "radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
                
                
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total: 
                <div="inline">
                    <input type="text" id="subtotal" value="0.00" readonly/>
                </div>
            </label>
            
            <br/><br/>
            
            <label for="discount">
                Discount:
                <input type="text" id="discount" name="total" value="0.00" readonly/>
            </label>
            <br/><br/>
            <label for="vat">
                VAT:
                <input type="text" id="vat" name="vat" value="0.00" readonly/>
            </label>
            
            <br/>
            <label for="Total">
            Total:
            <div class="inline1">
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </div>
            </label>
            <br/>
            <a href="Ebus2.php">
                <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            </a>
        </form>
        
        <br/>
        
        <button onClick="calcSub()" class="Calculate button1">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
</html>