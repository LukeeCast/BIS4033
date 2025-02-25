<?php
echo '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monthly Payment Form</title>
  <link rel="StyleSheet" type="text/css" href="monthlyPayment.css">
</head>
<body>
  <main>
    <h1>Monthly Payment Form</h1>
    <form action="monthlyPayment.php" onsubmit = "return validateProductData();" method="post">

      <div id="dataInput">
        <label>Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br>

        <label>Initial Loan Amount</label>
        <input type="number" min="1" id="loan_amount" name="loan_amount" required><br>

        <label>Number of Months of Loan</label>
        <input type="number" min="1" id="months" name="months" required><br>

        <label for="interest_percent"> Interest Amount (0-100%)</label>
        <input type= "number" id="interest_amount" name="interest_amount" min="0" max="100" required oninput="this.nextElementSibling.value = this.value"><output>0</output><span>%</span><br>
      </div>
      
      <div id="calculate">
        <label>&nbsp;</label>
        <input type="submit" value="Calculate"><br>
      </div>
    </form>
  </main>
</body>
</html>';
?>