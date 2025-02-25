<?php
echo '<!DOCTYPE html>
<html>

<head>
  <title>Product Discount Calculator</title>
  <script src="product_discount_calculator.js"></script>
  <link rel="StyleSheet" type="text/css" href="cssfile.css">
</head>
<body>
  <main>
    <h1>Product Discount Calculator</h1>
    <form action="display.php" onsubmit = "return validateProductData();" method="post">

      <div id="data">
        <label>Product Description:</label>
        <input type="text" id="product_description" name="product_description" required><br>
        
        <label>List Price:</label>
        <input type="number" min="0" id="list_price" name="list_price" required><br>
    
        <label for="discount_percent"> Discount Percent: <br>(0-100)</label>
        <input type="range" id="discount_percent" name="discount_percent" min="0" max="100" required oninput="this.nextElementSibling.value = this.value"><output>50</output><span>%</span><br>
      </div>

      <div id=<"buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Calculate Discount"><br>
      </div>

    </form>
  </main>
</body>
</html>';
?>