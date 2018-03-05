<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jquery-->
        <script src ="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <link rel="stylesheet" href="mystylesheet.css" type="text/css"/>
    </head>
    
    <body>
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
        
        <h4>Select a Product</h4>
        
        <br/>
        
    
        <br/>
                    <form method = "POST" action = "ebus2.php">
                    <label for="salesforce">
                        <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                        salesforce @ $100
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
                        <br/>
                            <input type="text" id="subtotal" value="0.00" class="inline" readonly/>
                    </label>
                    
                    <br/><br/>
                    
                    <label for="discount">
                        Discount:
                        <br/>
                        <input type="text" id="discount" name="total" value="0.00" class="inline" readonly/>
                    </label>
                    <br/><br/>
                    <label for="vat">
                        VAT:
                        <br/>
                        <input type="text" id="vat" name="vat" value="0.00" class="inline" readonly/>
                    </label>
                    <br/><br/>
                    
                    <label for="Total">
                    Total:
                    <br/>
                        <input type="text" id="total" name="total" value="0.00" class="inline" readonly/>
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