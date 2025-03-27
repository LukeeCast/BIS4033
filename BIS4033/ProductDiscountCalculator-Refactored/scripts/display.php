<?php

require_once('utilities.php');

// get the data from the form, Identify the variables
$product_description = $_POST['product_description'];
$list_price = $_POST['list_price'];
$discount_percent = $_POST['discount_percent'];

// // use for everything, to clean
// function CleanIO($data) {
//   $data = trim($data);
//   $data = stripslashes($data);
//   $data = htmlspecialchars($data);
//   return $data;
// }

// require_once('scripts/echoHTML.php');
// require_once('/htmlfile.php');
// require_once('scripts/utilities.php');
// $myJSFile = require_once('clientScripts/product_discount_calculator.js');
// $myCSSFile = require_once('styles/cssfile.css');

if (isset($_POST["product_discription"])) {
    $product_description = cleanIO($_POST['product_description']);
  //Debug var_dump("product_description");
  //exit();
}

if (isset($_POST["list_price"])) 
    $list_price = cleanIO($_POST["list_price"]);

if (isset($_POST["discount_percent"])) 
    $discount_percent = cleanIO($_POST["discount_percent"]);

// type checks, make sure it is the right type
if (!filter_var($discount_percent, FILTER_VALIDATE_FLOAT)) {
    var_dump($list_price);
    echo '<br>';
    exit("Need number for list_price");
}

// pass all the if statements, pass the if statements the data is clean
if ($product_description == "")
    exit("Supply product description");
if ($product_description != "Guitars" && $product_description != "Pianos" && $product_description != "Other")
    exit("Incorrect Product Description");
if ($list_price < 0)
    exit("List price must be positive");
if ($discount_percent < 0 || $discount_percent > 100)
    exit("Discount must be positive and up to 100");

 
//calculate the discount
$discount = $list_price * $discount_percent * .01;
$discount_price = $list_price - $discount;

// apply currency formatting to the dollar and percent amounts
$list_price_formatted = '$'.number_format($list_price, 2);
$discount_percent_formatted = number_format($discount_percent, 1).'%';
$discount_formatted = '$'.number_format($discount, 2);
$discount_price_formatted = '$'.number_format($discount_price, 2);

// escape the unformatted input
$product_description_escaped = htmlspecialchars($product_description);

require_once('echoHTML.php');
echoHead('../clientScripts/product_discount_calculator.js', '../styles/cssfile.css');
echoHeader("Sales Information");
echo'
  <main>
    <label>Product Description:</label>
    <span>'.cleanIO($product_description_escaped).'</span><br>

    <label>List Price:</label>
    <span>'.cleanIO($list_price_formatted).'</span><br>

    <label>Standard Discount:</label>
    <span>'.cleanIO($discount_percent_formatted).'</span><br>

    <label>Discount Amount:</label>
    <span>'.cleanIO($discount_formatted).'</span><br>

    <label>Discount Price:</label>
    <span>'.cleanIO($discount_price_formatted).'</span><br>

    <button id="Button" onclick="history.back()">Back</button>
</main>
';
echoFooter();
?>


