<?php
function calculateProductDiscount($listprice, $discountPercent) {
  return ($listprice * $discountPercent * .01);
}
function cleanIO($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>