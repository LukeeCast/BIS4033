<?php

$full_name = $_POST['full_name'];
$loan_amount = $_POST['loan_amount'];
$months = $_POST['months'];
$interest_amount = $_POST['interest_amount'];


function CleanIO($dataInput) {
  $data = trim($dataInput);
  $data = stripslashes($dataInput);
  $data = htmlspecialchars($dataInput);
  return $data;
}

if (isset($_POST["full_name"])) 
    $full_name = CleanIO($_POST["full_name"]);

if (isset($_POST["loan_amount"])) 
    $loan_amount = CleanIO($_POST['loan_amount']);

if (isset($_POST["months"])) 
    $months = CleanIO($_POST["months"]);

if (isset($_POST["interest_amount"]))
    $interest_amount = CleanIO($_POST["interest_amount"]);

if (!filter_var($interest_amount, FILTER_VALIDATE_FLOAT)) {
  var_dump($interest_amount);
  echo '<br>';
  exit("Need number for interest_amount");
}

if ($full_name == "")
    exit("Supply full name");
if($loan_amount < 0)
    exit("Loan amount must be greater than 0");
if($months < 0)
    exit("Months must be greater than 0");
if($interest_amount < 0 || $interest_amount > 100)
    exit("Interest must be between 0 and 100");

$monthly_interest_rate = $interest_amount / 100 / 12;
$monthly_payment = $loan_amount * $monthly_interest_rate / (1 - pow(1 + $monthly_interest_rate, -$months));

$loan_amount_formatted = '$'.number_format($loan_amount, 2);
$months_formatted = number_format($months);
$interest_amount_formatted = number_format($interest_amount, 1).'%';
$monthly_payment_formatted = '$'.number_format($monthly_payment, 2);

$full_name_escaped = htmlspecialchars($full_name);
$loan_amount_escaped = htmlspecialchars($loan_amount);
$months_escaped = htmlspecialchars($months);
$interest_amount_escaped = htmlspecialchars($interest_amount);
$monthly_payment_escaped = htmlspecialchars($monthly_payment);


echo '<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Monthly Payment</title>
  <link rel="StyleSheet" type="text/css" href="monthlyPayment.css">
</head>
<body>
  <main>
    <h1>Monthly Payment</h1>

    <label>Full Name:</label>
    <span>'.CleanIO($full_name_escaped).'</span><br>

    <label>Loan Amount:</label>
    <span>'.CleanIO($loan_amount_formatted).'</span><br>

    <label>Number of Months:</label>
    <span>'.CleanIO($months_formatted).'</span><br>

    <label>Interest Amount:</label>
    <span>'.CleanIO($interest_amount_formatted).'</span><br>

    <label>Monthly Payment:</label>
    <span>'.CleanIO($monthly_payment_formatted).'</span><br>

    <input type="button" value="Back" onclick="history.back()">
  </main>
</body>
</html>';
?>